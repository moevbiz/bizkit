<?php
// Usage: php siteTitle.php '<title>'

require 'authenticate.php';

print_r($argv);

if (count($argv) < 2) {
    exit(1);
}

$title = array_slice($argv, 1);

$title = implode(' ', $title);

try {
    $kirby->site()->changeTitle($title);
}
catch(Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    exit(1);
}

exit(0);

?>