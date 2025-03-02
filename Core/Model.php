<?php

namespace App\Core;

use PDO;

class Model {

    private static $conn;

    function __construct() {
        if(empty(self::$conn)) { 
            self::$conn = new PDO(
                "pgsql:host=".DB_HOST.";dbname=".DB_NAME , 
                DB_USER, 
                DB_PASS, 
                array(
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED,
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_PERSISTENT         => true
                )
            );
        }
    }
	
    public function query($query, $params = array()){
        $st = self::$conn->prepare($query);
        $st->execute($params);
        return $st;
    }
	
    public function queryAll($query, $params = array()){
        $st = self::$conn->prepare($query);
        $st->execute($params);
        return $st->fetchAll(); 
    }	

    public function queryRow($query, $params = array()){
        $st = self::$conn->prepare($query);
        $st->execute($params);
        return $st->fetch(); 
    }	

    public function queryOne($query, $params = array()){
        $st = self::$conn->prepare($query . ' limit 1');
        $st->execute($params);
        $row = $st->fetch(PDO::FETCH_ASSOC);
        return @reset($row);
    }
    
}    
