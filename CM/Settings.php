<?php
/**
 * Classe che contiene una lista di variabili di configurazione
 *
 * @author Roberto Deiana
 */
 class Settings
 {
    private static $appPath;
    const debug = false;
    
    public static $user = "deianaRoberto";
    public static $password = "caimano377";
    public static $host = "localhost";
    public static $db = "amm14_deianaRoberto";

    public static function getApplicationPath() 
    {
        if (!isset(self::$appPath)) 
        {
            switch ($_SERVER['HTTP_HOST']) {
                case 'localhost':
                    self::$appPath = 'http://' . $_SERVER['HTTP_HOST'] . '/checkmate/';
                    break;
                case 'spano.sc.unica.it':
                    // configurazione pubblica
                    self::$appPath = 'http://' . $_SERVER['HTTP_HOST'] . '/amm2014/deianaRoberto/CM/';
                    break;
                default:
                    self::$appPath = '';
                    break;
            }
        }
        
        return self::$appPath;
    }
}
?>
