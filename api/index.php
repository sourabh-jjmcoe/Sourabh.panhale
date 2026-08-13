<?php

use Illuminate\Http\Request;

// 1. Force environment overrides at absolute top
putenv("APP_KEY=base64:Xd/wTMvshxfm5wjrAW4r6I6akWqBx9MdM6vNiBNIiak=");
putenv("APP_ENV=production");
putenv("APP_DEBUG=false");
putenv("LOG_CHANNEL=stderr");
putenv("SESSION_DRIVER=array");
putenv("CACHE_STORE=array");
putenv("DB_CONNECTION=sqlite");
putenv("DB_DATABASE=:memory:");

$_ENV['APP_KEY'] = 'base64:Xd/wTMvshxfm5wjrAW4r6I6akWqBx9MdM6vNiBNIiak=';
$_ENV['APP_ENV'] = 'production';
$_ENV['APP_DEBUG'] = false;
$_ENV['LOG_CHANNEL'] = 'stderr';
$_ENV['SESSION_DRIVER'] = 'array';
$_ENV['CACHE_STORE'] = 'array';
$_ENV['DB_CONNECTION'] = 'sqlite';
$_ENV['DB_DATABASE'] = ':memory:';

$_SERVER['APP_KEY'] = $_ENV['APP_KEY'];
$_SERVER['APP_ENV'] = $_ENV['APP_ENV'];
$_SERVER['APP_DEBUG'] = false;

// 2. Writable /tmp storage directories
$tmpStorage = '/tmp/storage';
$tmpBootstrap = '/tmp/bootstrap/cache';

@mkdir($tmpStorage . '/framework/views', 0777, true);
@mkdir($tmpStorage . '/framework/sessions', 0777, true);
@mkdir($tmpStorage . '/framework/cache', 0777, true);
@mkdir($tmpStorage . '/logs', 0777, true);
@mkdir($tmpBootstrap, 0777, true);

putenv('VIEW_COMPILED_PATH=' . $tmpStorage . '/framework/views');
putenv('APP_SERVICES_CACHE=' . $tmpBootstrap . '/services.php');
putenv('APP_PACKAGES_CACHE=' . $tmpBootstrap . '/packages.php');
putenv('APP_CONFIG_CACHE=' . $tmpBootstrap . '/config.php');
putenv('APP_ROUTES_CACHE=' . $tmpBootstrap . '/routes.php');

$_ENV['VIEW_COMPILED_PATH'] = $tmpStorage . '/framework/views';
$_ENV['APP_SERVICES_CACHE'] = $tmpBootstrap . '/services.php';
$_ENV['APP_PACKAGES_CACHE'] = $tmpBootstrap . '/packages.php';
$_ENV['APP_CONFIG_CACHE'] = $tmpBootstrap . '/config.php';
$_ENV['APP_ROUTES_CACHE'] = $tmpBootstrap . '/routes.php';

// 3. Override script paths for request routing
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/../public/index.php';

// 4. Require Autoloader & Bootstrap App
require_once __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Set storage path to writable /tmp directory on Vercel
$app->useStoragePath($tmpStorage);

// 5. Handle HTTP Request
$app->handleRequest(Request::capture());
