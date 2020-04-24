# Laravel Scope

Define the scope, Admin or Front, of a Laravel application so that the resources, controllers, and routes can be splitted. If you visit an admin route '/admin/product/add' then it should boot up required services for the admin side and ignore the services of the front end. This package helps to determine the scope of the application via admin_route which can be defined in "config/adlara.php" after the installation process

# Installation

1. composer require jigeshraval/laravel-scope
2. Add "AdLara\Boot\BootstrapServiceProvider::class" in the providers array in config/app.php 
3. Run, php artisan vendor:publish --tag=adlarascope

# Usage 

- After Installation, you can determine application scope by accessing app()->scope or config('adlara.app_scope') anywhere in the application. 

- You can modify admin route in the config/adlara.php file

# Package

Visit https://github.com/jigeshraval/adlara-bootstrap for the full package installation which sets up Laravel admin with Vue, along with Rich Tools such as Media Library, and Image resizing, in no-time

