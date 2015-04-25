<?php

include_once './model/item.php';
include_once './model/database.php';

class itemDB
{

    private static $singleton;

    private function __constructor()
    {
        
    }
    
    public static function instance()
    {
        if (!isset(self::$singleton))
            self::$singleton = new itemDB();

        return self::$singleton;
    }
    
    public function getItem($ID)
    {
        $mysqli = database::getInstance()->databaseConnection();
        
        if (!isset($mysqli)) 
        {
            $mysqli->close();
            return false;
        }

        $stmt = $mysqli->stmt_init();
        
        $query = "SELECT * FROM item WHERE ID=$ID;";
        
        $stmt->prepare($query);
        
        if (!$stmt) 
            return false;
        
        if(!$stmt->execute())
        {
            $stmt->close();
            $mysqli->close();
            return false;
        }
        
        $result = array();
        $bind = $stmt->bind_result(
                $result['ID'],  
                $result['name'],
                $result['price'],
                $result['description'],
                $result['image']);
    
        if (!$bind)
            return false;
        
        if (!$stmt->fetch()) 
        {
            $stmt->close();
            $mysqli->close();
            return false;
        }
        
        $stmt->close();
        $mysqli->close();
        
        return $result;
    }
}

?>
