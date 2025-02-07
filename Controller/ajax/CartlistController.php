<?php

namespace App\Controller\ajax;

use App\Core\View;
use App\Model\mProducts;

/**
* Bevásárlókosár adatainak előállítása
*/
class CartlistController
{
    /**
    * Bevásárlókosár adatainak kiolvasása
    */
    public function __construct()
    {
        $products = new mProducts();
        $result = $products->cartlista($_SESSION['cart']);
        $panemcount = 0;
        $ar1 = [];
        $ar2 = [];
        foreach($result as $key=>$item){
            if($item['publisher']=='PANEM') {
                $panemcount++;
                $ar1[] = $item['price'];
                $ar2[] = $key;
            }    
        }
        $nullpricecount = floor($panemcount/3);
        array_multisort($ar1, $ar2);
        if($nullpricecount>0){
            for($i=0;$i<$nullpricecount;$i++){
                $result[$ar2[$i]]['discprice'] = 0;
            }
        }
        $sumprice = 0;
        $sumdiscprice = 0;
        foreach($result as $item){
            $sumprice += $item['price'];
            $sumdiscprice += $item['discprice'];
        }
     
        (new View)->load("ajax/cartlist", [
            'result'=>$result,
            'sumprice'=>$sumprice,
            'sumdiscprice'=>$sumdiscprice,
            'sumdiscount'=>$sumprice-$sumdiscprice
        ]);
    }
}
