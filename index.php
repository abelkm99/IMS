<?php
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// $option = env('PHP_CREATOR', 'Rasmus Lerdorf');

require "./API/V1/Routes.php";
