<?php

return [
    'hooks' => include 'hooks.php',
    'routes' => include 'routes.php',

    // enable debug for domains that end on ".test"
    'debug' => str_ends_with($_SERVER['SERVER_NAME'] ?? '', '.test') || @$_SERVER['SERVER_NAME'] === 'localhost',

    // 'slugs' => 'de',
    
    'ready' => function ($kirby) {
        // debug mode automatically active for logged in admin users
        // https://forum.getkirby.com/t/your-way-to-remember-debug-mode-is-still-active/20319/8
        return ['debug' => kirby()->user() !== null && kirby()->user()->role()->isAdmin()];
    },
    'favicon' => '🍪',
    'schnti.cachebuster.active' => true,
];