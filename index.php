<?php

session_start();

if(!isset($_SESSION['cart']))
{
    $_SESSION['cart'] = [];
}

/** @var \Slim\App $app */
$app = require 'bootstrap/app.php';

$app->run();
