<?php

namespace App\Controller\ajax;

/**
* Terkék kosárba tétele
*/
class AddcartController
{
    /**
    * Terkék kosárba tétele. Termék id-ja get paraméteből kerül kiolvasásra.
    */
    public function __construct()
    {
        $id = (int)$_GET['id'];
        $_SESSION['cart'][] = $id;
    }
}
