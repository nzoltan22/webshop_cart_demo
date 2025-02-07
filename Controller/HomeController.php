<?php

namespace App\Controller;

use App\Core\View;

/**
* Home Controller
*/
class HomeController
{
    public function __construct()
    {
        if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
        (new View())->load("home");
    }
}
