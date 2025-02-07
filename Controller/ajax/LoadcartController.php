<?php

namespace App\Controller\ajax;

use App\Model\mCartsave;

/**
* Bevásárlókosár betöltése
*/
class LoadcartController
{

    /**
    * Bevásárlókosár betöltése
    */
    public function __construct()
    {
        $cartsave = new mCartsave;
        $_SESSION['cart'] = unserialize($cartsave->loadsession(session_id()));
    }
}
