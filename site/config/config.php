<?php

$dotenv = new \Dotenv\Dotenv(__DIR__ . '/../..');
$dotenv->load();
// get environment variable with $_ENV['KEY']

return [
    'ready' => function ($kirby) {
        // debug mode automatically active for logged in admin users
        return ['debug' => kirby()->user() !== null && kirby()->user()->role()->isAdmin()];
    },
    'routes' => [
        [
            // remove "/subpages/" from URL string
            'pattern' => '(:any)',
            'action'  => function($uid) {
                $page = page($uid);
                if(!$page) $page = page('subpages/' . $uid);
                if(!$page) $page = site()->errorPage();
                return site()->visit($page);
            }
        ],
        [   
            // remove "/subpages/" from URL string
            'pattern' => 'subpages/(:any)',
            'action'  => function($uid) {
                go($uid);
            }
        ],
    ],
];