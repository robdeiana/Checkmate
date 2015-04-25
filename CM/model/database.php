<?php

include_once './model/settings.php';

// Gives database data
class database
{
    
    private function __construct()
    {
        
    }
    
    private static $_singleton;
   
    // Returns the singleton for the database connection
    public static function getInstance()
    {
        if(!isset(self::$_singleton))
            self::$_singleton = new database();
        
        return self::$_singleton;
    }
    
    // Returns a datavase connection
    public function databaseConnection()
    {
        $mysqli = new mysqli();
        $mysqli->connect(settings::$db_host, settings::$db_username,
        settings::$db_password, settings::$db_name);
        
        if($mysqli->errno != 0)
            return null;
        else
            return $mysqli;
    }
}

?>