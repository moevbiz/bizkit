<?php

require 'public/kirby/bootstrap.php';

$kirby = new Kirby([ 'roots' => [ 'index' => 'public/' ] ]);

$kirby->impersonate('kirby');