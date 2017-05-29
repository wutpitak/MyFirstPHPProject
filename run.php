<?php

require __DIR__ . '/vendor/autoload.php';

$hello = new \Hello\Hello();
echo $hello -> sayAnything("Hello World");