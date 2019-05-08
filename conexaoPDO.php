<?php

class ConexaoPDO{
    
    public static $instance;
    
    private function __construct(){
        
        
}
public static function getInstance(){
    
    if(!isset(self::$instance)){
               
            self::$instance = new PDO('mysql:host=localhost:dbname=cursoappvendassistemaweb','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAME utf8"));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        
    }
    return self::$instance;
}
    
    
}

