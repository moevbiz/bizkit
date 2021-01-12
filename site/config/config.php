<?php

$dotenv = new \Dotenv\Dotenv(__DIR__ . '/../..');
$dotenv->load();
// get environment variable with $_ENV['KEY']

return [
    'debug'  => true,
];