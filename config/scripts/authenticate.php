<?php

define("KIRBY_HELPER_DUMP", false);

require 'public/kirby/bootstrap.php';

$kirby = new Kirby([ 'roots' => [ 'index' => 'public/' ] ]);

$kirby->impersonate('kirby');