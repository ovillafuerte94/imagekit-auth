<?php

require 'vendor/autoload.php';

use ImageKit\ImageKit;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$public_key = $_ENV['PUBLIC_KEY'];
$your_private_key = $_ENV['PRIVATE_KEY'];
$url_end_point = $_ENV['ENDPOINT'];

$imageKit = new ImageKit(
    $public_key,
    $your_private_key,
    $url_end_point
);

$authenticationParameters = $imageKit->getAuthenticationParameters();

echo ("Auth params : " . json_encode($authenticationParameters));
