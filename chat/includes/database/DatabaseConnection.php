
<?php
class DatabaseConnection {
    private static ?DatabaseConnection $conn = null;

    const SERVER_NAME = "localhost";
    const USER_NAME = "root";
    const PASSWORD = "";
    const DATABASE = "projekt1";
    private ?PDO $pdo = null;

    public static function getDatabaseConnection() {
        if (self::$conn !== null) {
            return self::$conn;
        } else {
            $connection = new self();
            $connection->connect();
            self::$conn = $connection;
            return self::$conn;
        }
    }

    public function getPdo() {
        if ($this->pdo !== null) {
            return $this->pdo;
        } else {
            throw new Exception("PDO objektum nincs meghatározva");
        }
    }
    
    private function connect() {
        try {
            $this->pdo = new PDO(
                "mysql:dbname=".self::DATABASE.";host=".self::SERVER_NAME, 
                self::USER_NAME, 
                self::PASSWORD
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Adatbázis kapcsolat nem hozható létre.");
        }
    }
}
?>