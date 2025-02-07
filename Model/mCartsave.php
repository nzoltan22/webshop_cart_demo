<?php

namespace App\Model;

/**
* mProducts table
*/
class mCartsave extends \App\Core\Model {

    /**
    * Session mentése
    * @param string $sessionid Session id-ja
    * @param string $data Session tartala serializálva
    */
    public function savesession($sessionid, $data){
        
        $this->query(
            'insert into cartsave set sessionid=:sessionid, data=:data on duplicate key update sessionid=:sessionid, data=:data',
            [':sessionid'=>$sessionid, ':data'=>$data]);
        
    }

    /**
    * Session betöltése
    * @param string $sessionid Session id-ja
    * @return string Session tartala serializálva
    */
    public function loadsession($sessionid){
        
        return $this->queryOne('select data from cartsave where sessionid=:sessionid',[':sessionid'=>$sessionid]);
        
    }
    
}    
