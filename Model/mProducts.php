<?php

namespace App\Model;

/**
* mProducts table
*/
class mProducts extends \App\Core\Model 
{
    /**
    * Termékel listája
    * @param number $order Sirrend ha 0 akkor abc szerint, ha 1 ár szerint
    * @return array Termékek listája
    */
    public function lista($order) {
        $orderfield = ['title','price'][$order];
        $sql = "
            SELECT *, if(id=1006, ROUND(0.9*price,0), if(id=1002, price-500, price)) as discprice
            FROM products 
            ORDER BY $orderfield
        ";
        $request = $this->queryAll($sql);
        return $request;
    }

    /**
    * Kosár listája
    * @param string $ids losárba lévő termékek id-ja
    * @return array Kosár listája
    */
    public function cartlista($ids) {
        $count = count($ids);
        if($count>0){
            $request = [];
            for($i=0;$i<$count;$i++){
                $sql = "
                    SELECT *, if(id=1006, ROUND(0.9*price,0), if(id=1002, price-500, price)) as discprice 
                    FROM products
                    WHERE id=:id 
                ";
                $request[] = $this->queryRow($sql, ['id'=>$ids[$i]]);
            }
        } else {
            $request = [];
        }
        return $request;
    }
}    
