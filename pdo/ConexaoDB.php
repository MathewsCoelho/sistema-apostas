<?php

final class ConexaoDB {

    private static $conn = null;

    private function __construct() {}

    public static function getInstance(){
        if(self::$conn == null){
            try {
                self::$conn = new PDO('pgsql:dbname=apostas; user=postgres; password=senha5; host=localhost');
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //print_r(self::$conn);
            } catch (PDOException $ex) { 
            echo $ex->getMessage();
        }
            return self::$conn;
        }
        
        return self::$conn;
    }
    
    public static function close(){
        self::$conn = null;
        echo "\nLiberou os recursos.";
    }
    
}
