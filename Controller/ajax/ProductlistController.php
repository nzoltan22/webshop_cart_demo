<?php

namespace App\Controller\ajax;

use App\Core\View;
use App\Model\mProducts;

/**
* Termlélista adatbézisból való bewtöltése
*/
class ProductlistController
{
    
    /**
    * Termlélista adatbázisból való betöltése a terméksorrend GET paraméterben 0: id 1: abc
    */
    public function __construct()
    {
        $order = (int)$_GET['order'];
        $products = new mProducts();
        $result = $products->lista($order);
        (new View())->load("ajax/productlist", ['result'=>$result]);
    }
}
