<?php

namespace App\Controller\ajax;

use App\Model\mCartsave;

/**
* Bevásárló kosár mentése
*/
class SavecartController
{
    /**
    * Bevásárló kosár mentése
    */
    public function __construct()
    {
        $cartsave = new mCartsave;
        $cartsave->savesession(session_id(),serialize($_SESSION['cart']));
    }
}
