<?php

namespace App\Controller\ajax;

/**
* Bevásárlókosár törlése
*/
class DeletecartController
{
    /**
    * Bevásárlókosár törlése
    */
    public function __construct()
    {
        $_SESSION['cart'] = [];
    }
}
