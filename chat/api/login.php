<?php
require_once(dirname(__FILE__) . "/../includes/autoload.php");

if (isset($_POST["username"], $_POST["password"])) {
    $username = $_POST["username"];
    $password = sha1($_POST["password"]);
    $connection = DatabaseConnection::getDatabaseConnection();

    $statement = $connection->prepare("SELECT user_token FROM user WHERE username = :username AND password = :password LIMIT 1");
    $statement->bindValue(":username", $username, PDO::PARAM_STR);
    $statement->bindValue(":password", $password, PDO::PARAM_STR);
    $statement->execute();
    if (($token = $statement->fetchColumn(0)) && !empty($token)) {
        header("Content-Type: application/json");
        echo json_encode([
            "user_token" => $token
        ]);
    } else {
        http_response_code(403);
    }
} else {
    http_response_code(403);
}