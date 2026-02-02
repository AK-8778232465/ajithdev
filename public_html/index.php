<?php

declare(strict_types=1);

$laravelPublic = dirname(__DIR__) . '/laravel/public';

if (! is_dir($laravelPublic)) {
    http_response_code(500);
    echo 'Laravel public directory not found. Install Laravel into /laravel.';
    exit;
}

require $laravelPublic . '/index.php';
