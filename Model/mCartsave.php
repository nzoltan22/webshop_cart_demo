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
    public function savesession($sessionid, $data)
    {
        $this->query("
            INSERT INTO cartsave (sessionid, data) 
            VALUES (:sessionid, :data)
            ON CONFLICT (sessionid) 
            DO UPDATE SET data = EXCLUDED.data",
            [':sessionid'=>$sessionid, ':data'=>$data]);
    }

    /**
    * Session betöltése
    * @param string $sessionid Session id-ja
    * @return string Session tartala serializálva
    */
    public function loadsession($sessionid)
    {
        return $this->queryOne('SELECT data FROM cartsave WHERE sessionid=:sessionid',[':sessionid'=>$sessionid]);
    }
    
}    
