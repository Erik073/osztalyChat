<?php
class DatabaseConnection
{
    private static ?PDO $pdo = null;
    const SERVER_NAME = "localhost";
    const USER_NAME = "root";
    const PASSWORD = "";
    const DATABASE = "projekt1";


    public static function getDatabaseConnection()
    {
        if (self::$pdo !== null) {
            return self::$pdo;
        } else {
            try {
                $pdoObject = new PDO(
                    "mysql:dbname=" . self::DATABASE . ";host=" . self::SERVER_NAME,
                    self::USER_NAME,
                    self::PASSWORD
                );
                $pdoObject->setAttribute(
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
                );
                self::$pdo = $pdoObject;
                return self::$pdo;
            } catch (PDOException $e) {
                die("Adatbázis kapcsolat nem hozható létre.");
            }
        }
    }

}
?>