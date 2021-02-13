<?php
// Usage: php siteTitle.php '<title>'

require 'authenticate.php';

if (count($argv) != 2) {
    exit(1);
}

$title = (string)$argv[1];

try {
    $kirby->site()->changeTitle($title);
}
catch(Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    exit(1);
}

exit(0);

?>