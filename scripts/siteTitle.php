<?php
// Usage: php siteTitle.php '<title>'

if (count($argv) != 2) {
    exit(1);
}

$title = (string)$argv[1];

require 'public/kirby/bootstrap.php';

$kirby = new Kirby([ 'roots' => [ 'index' => 'public/' ] ]);

$kirby->impersonate('kirby');

try {
    $kirby->site()->changeTitle($title);
}
catch(Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    exit(1);
}

exit(0);

?>