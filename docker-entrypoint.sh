#!/bin/bash
set -e

# Cache configuration, routes, and views in production if APP_KEY is provided
if [ -n "$APP_KEY" ]; then
    php artisan config:cache || true
    php artisan route:cache || true
    php artisan view:cache || true
fi

# Fallback to PORT environment variable provided by Vercel or default to 8000
PORT="${PORT:-8000}"

echo "Starting Laravel 12 production container on port ${PORT}..."

# Serve application directly from /public listening on $PORT
exec php artisan serve --host=0.0.0.0 --port="${PORT}"
