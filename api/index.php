<?php

use Illuminate\Http\Request;

// 1. Static asset bypass for PHP built-in web server
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH));
if ($uri !== '/' && file_exists(__DIR__ . '/../public' . $uri)) {
    return false;
}

// 2. Vercel Storage Environment setup in /tmp
$tmpDir = '/tmp';
$storageDir = $tmpDir . '/storage';

@mkdir($storageDir . '/framework/views', 0755, true);
@mkdir($storageDir . '/framework/sessions', 0755, true);
@mkdir($storageDir . '/framework/cache', 0755, true);
@mkdir($storageDir . '/logs', 0755, true);
@mkdir($tmpDir . '/bootstrap/cache', 0755, true);

putenv('VIEW_COMPILED_PATH=' . $storageDir . '/framework/views');
putenv('APP_SERVICES_CACHE=' . $tmpDir . '/bootstrap/cache/services.php');
putenv('APP_PACKAGES_CACHE=' . $tmpDir . '/bootstrap/cache/packages.php');
putenv('APP_CONFIG_CACHE=' . $tmpDir . '/bootstrap/cache/config.php');
putenv('APP_ROUTES_CACHE=' . $tmpDir . '/bootstrap/cache/routes.php');
putenv('LOG_CHANNEL=stderr');

// 3. Fallback App Key & Environment
if (!getenv('APP_KEY') && !isset($_ENV['APP_KEY'])) {
    $key = 'base64:Xd/wTMvshxfm5wjrAW4r6I6akWqBx9MdM6vNiBNIiak=';
    putenv("APP_KEY={$key}");
    $_ENV['APP_KEY'] = $key;
    $_SERVER['APP_KEY'] = $key;
}

if (!getenv('APP_ENV') && !isset($_ENV['APP_ENV'])) {
    putenv('APP_ENV=production');
    $_ENV['APP_ENV'] = 'production';
    $_SERVER['APP_ENV'] = 'production';
}

// 4. Override Server Request Script paths so Laravel Route Matching works cleanly
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/../public/index.php';

// 5. Autoload & Run Laravel 12
require_once __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->handleRequest(Request::capture());
