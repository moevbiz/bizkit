<?php

return [
    'hooks' => include 'hooks.php',
    'routes' => include 'routes.php',
    
    'ready' => function ($kirby) {
        // debug mode automatically active for logged in admin users
        // https://forum.getkirby.com/t/your-way-to-remember-debug-mode-is-still-active/20319/8
        return ['debug' => kirby()->user() !== null && kirby()->user()->role()->isAdmin()];
    },
    'favicon' => '🍪',
    'schnti.cachebuster.active' => true,
];