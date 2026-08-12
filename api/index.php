<?php

// Catch all errors for debugging on Vercel
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

try {
    // Vercel Read-Only Storage Configuration
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

    if (!getenv('APP_KEY') && !isset($_ENV['APP_KEY'])) {
        putenv('APP_KEY=base64:Xd/wTMvshxfm5wjrAW4r6I6akWqBx9MdM6vNiBNIiak=');
        $_ENV['APP_KEY'] = 'base64:Xd/wTMvshxfm5wjrAW4r6I6akWqBx9MdM6vNiBNIiak=';
    }

    if (!getenv('APP_ENV') && !isset($_ENV['APP_ENV'])) {
        putenv('APP_ENV=production');
        $_ENV['APP_ENV'] = 'production';
    }

    // Require Laravel public/index.php
    require __DIR__ . '/../public/index.php';

} catch (\Throwable $e) {
    http_response_code(500);
    echo "<h1>Vercel Serverless Exception</h1>";
    echo "<p><strong>Error:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . " line " . $e->getLine() . "</p>";
    echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
}
