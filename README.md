# ajithdev

Laravel 12 + PHP 8.3 deployment notes for Hostinger.

## Hostinger layout

Hostinger serves files from `public_html`. This repo provides a small `public_html/`
front controller that forwards requests into a Laravel 12 install that lives in
`laravel/` (outside the public directory).

```
ajithdev/
├── laravel/          # Laravel 12 project (created with Composer)
└── public_html/      # Hostinger document root
    ├── index.php
    └── .htaccess
```

## Build Laravel 12 (PHP 8.3)

Run these locally (or on the server if Composer is available):

```
composer create-project laravel/laravel:^12.0 laravel
```

## Deploy to Hostinger

1. Upload the repository (including the `laravel/` directory) to your hosting
   account.
2. Ensure `public_html/index.php` and `.htaccess` are present as committed here.
3. Configure PHP to use 8.3 in Hostinger's control panel.
4. Update `laravel/.env` with your production settings (APP_KEY, database, etc.).

After deployment, all web traffic will go through `public_html/index.php`, which
boots the Laravel application from `laravel/public`.
