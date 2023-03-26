<?php
class Database {
    //just uncomment the following line (4), then comment out the other line(5).
    private static $dsn = 'mysql:host=localhost;dbname=dining_app';
    //private static $dsn = 'mysql:host=localhost;dbname=platepals';
    private static $username = 'root';
    //just uncomment the following line (8) then comment out the other line(9).
    //private static $password = 'sesame';
    private static $password = 'Armondo1@';
    private static $db;

    private function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>