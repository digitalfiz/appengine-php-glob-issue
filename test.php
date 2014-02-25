<?php

header('Content-Type: text/plain');

$glob = glob("test_folder/*.php");

echo "Results: ";
var_dump($glob);