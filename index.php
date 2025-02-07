<?php
ini_set( "short_open_tag", 1 );
session_start();
ob_start();

include "config.php";
require "vendor/autoload.php";

$router = new \App\Router();
$router->route();

ob_end_flush();