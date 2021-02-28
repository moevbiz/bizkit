<?php

$dotenv = new \Dotenv\Dotenv(__DIR__ . '/../..');
$dotenv->load();
// get environment variable with $_ENV['KEY']

return [
    'ready' => function ($kirby) {
        // debug mode automatically active for logged in admin users
        return ['debug' => kirby()->user() !== null && kirby()->user()->role()->isAdmin()];
    },
];