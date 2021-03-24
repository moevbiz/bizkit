<?php
// Usage: php siteTitle.php '<title>'

require 'authenticate.php';

if ($kirby->site()->title() != 'bizkit') {
    echo $kirby->site()->title() . ' sure is a nice name.';
    exit(0);
}

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