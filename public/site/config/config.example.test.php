<?php

return [
    // valet share config for ngrok
    // 'url' => isset($_SERVER['HTTP_X_FORWARDED_HOST']) ?  'https://' . $_SERVER['HTTP_X_FORWARDED_HOST'] : 'https://example.test',
    'ready' => function ($kirby) {
        return ['debug' => true];
    },
    'debug' => true,
    'genxbe.ray.enabled' => true,
    'schnti.cachebuster.active' => false,
];