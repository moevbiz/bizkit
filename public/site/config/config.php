<?php

$dotenv = new \Dotenv\Dotenv(__DIR__ . '/../..');
$dotenv->load();
// get environment variable with $_ENV['KEY']

return [
    'hooks' => include_once 'hooks.php',
    'routes' => include_once 'routes.php',
    
    'ready' => function ($kirby) {
        // debug mode automatically active for logged in admin users
        // https://forum.getkirby.com/t/your-way-to-remember-debug-mode-is-still-active/20319/8
        return ['debug' => kirby()->user() !== null && kirby()->user()->role()->isAdmin()];
    },
    'favicon' => '🍪',
    'schnti.cachebuster.active' => true,
];