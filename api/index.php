<?php

use Illuminate\Http\Request;

// 1. Static asset bypass for PHP built-in web server
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH));
if ($uri !== '/' && file_exists(__DIR__ . '/../public' . $uri)) {
    return false;
}

// 2. Vercel Storage Environment setup in /tmp
$tmpStorage = '/tmp/storage';
$tmpBootstrap = '/tmp/bootstrap/cache';

@mkdir($tmpStorage . '/framework/views', 0755, true);
@mkdir($tmpStorage . '/framework/sessions', 0755, true);
@mkdir($tmpStorage . '/framework/cache', 0755, true);
@mkdir($tmpStorage . '/logs', 0755, true);
@mkdir($tmpBootstrap, 0755, true);

// 3. Force environment overrides to /tmp
$_ENV['VIEW_COMPILED_PATH'] = $tmpStorage . '/framework/views';
$_ENV['APP_SERVICES_CACHE'] = $tmpBootstrap . '/services.php';
$_ENV['APP_PACKAGES_CACHE'] = $tmpBootstrap . '/packages.php';
$_ENV['APP_CONFIG_CACHE'] = $tmpBootstrap . '/config.php';
$_ENV['APP_ROUTES_CACHE'] = $tmpBootstrap . '/routes.php';
$_ENV['LOG_CHANNEL'] = 'stderr';

$appKey = getenv('APP_KEY') ?: ($_ENV['APP_KEY'] ?? 'base64:Xd/wTMvshxfm5wjrAW4r6I6akWqBx9MdM6vNiBNIiak=');
$_ENV['APP_KEY'] = $appKey;
$_SERVER['APP_KEY'] = $appKey;

$_ENV['APP_ENV'] = $_ENV['APP_ENV'] ?? 'production';
$_SERVER['APP_ENV'] = $_SERVER['APP_ENV'] ?? 'production';

putenv('VIEW_COMPILED_PATH=' . $tmpStorage . '/framework/views');
putenv('APP_SERVICES_CACHE=' . $tmpBootstrap . '/services.php');
putenv('APP_PACKAGES_CACHE=' . $tmpBootstrap . '/packages.php');
putenv('APP_CONFIG_CACHE=' . $tmpBootstrap . '/config.php');
putenv('APP_ROUTES_CACHE=' . $tmpBootstrap . '/routes.php');
putenv('LOG_CHANNEL=stderr');
putenv('APP_KEY=' . $appKey);
putenv('APP_ENV=' . $_ENV['APP_ENV']);

// 4. Override Server Request Script paths so Laravel Route Matching works cleanly
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/../public/index.php';

// 5. Autoload & Run Laravel 12
require_once __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->handleRequest(Request::capture());
