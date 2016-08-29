<?php

class Conexao {
    
    private static $con;
    
    public static function get(){
        try{
            if(empty(self::$con)){
                self::$con = new mysqli('localhost','root','','bd','3306');
                self::$con->set_charset('utf8');
            }
        } catch (Exception $ex) {
            print(mysqli_error());
        }
        return self::$con;
    }
    
}
