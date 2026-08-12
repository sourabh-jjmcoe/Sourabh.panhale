<?php

// Vercel Serverless Read-Only Filesystem Fixes for Laravel
$tmpDir = '/tmp';
$storageDir = $tmpDir . '/storage';

@mkdir($storageDir . '/framework/views', 0755, true);
@mkdir($storageDir . '/framework/sessions', 0755, true);
@mkdir($storageDir . '/framework/cache', 0755, true);
@mkdir($storageDir . '/logs', 0755, true);
@mkdir($tmpDir . '/bootstrap/cache', 0755, true);

// Set Vercel Storage Environment Overrides
putenv('VIEW_COMPILED_PATH=' . $storageDir . '/framework/views');
putenv('APP_SERVICES_CACHE=' . $tmpDir . '/bootstrap/cache/services.php');
putenv('APP_PACKAGES_CACHE=' . $tmpDir . '/bootstrap/cache/packages.php');
putenv('APP_CONFIG_CACHE=' . $tmpDir . '/bootstrap/cache/config.php');
putenv('APP_ROUTES_CACHE=' . $tmpDir . '/bootstrap/cache/routes.php');
putenv('LOG_CHANNEL=stderr');

// Ensure APP_KEY fallback if not configured in Vercel environment variables
if (!getenv('APP_KEY') && !isset($_ENV['APP_KEY'])) {
    putenv('APP_KEY=base64:Xd/wTMvshxfm5wjrAW4r6I6akWqBx9MdM6vNiBNIiak=');
    $_ENV['APP_KEY'] = 'base64:Xd/wTMvshxfm5wjrAW4r6I6akWqBx9MdM6vNiBNIiak=';
}

if (!getenv('APP_ENV') && !isset($_ENV['APP_ENV'])) {
    putenv('APP_ENV=production');
    $_ENV['APP_ENV'] = 'production';
}

// Forward request to Laravel's public/index.php
require __DIR__ . '/../public/index.php';
