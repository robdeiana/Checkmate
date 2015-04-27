<?php

include_once './Settings.php';

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
        $mysqli->connect(Settings::$db_host, Settings::$db_username,
        Settings::$db_password, Settings::$db_name);
        
        if($mysqli->errno != 0)
            return null;
        else
            return $mysqli;
    }
}

?>
