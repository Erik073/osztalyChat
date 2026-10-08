<?php
require_once("includes/database/DatabaseConnection.php");
$connection = DatabaseConnection::getDatabaseConnection();
?>
<!DOCTYPE html> 
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Chat</title>
</head>

<body class="bg-dark text-white">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary w-50 mx-auto mt-3" style="border-radius: 30px">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Üdv</a>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="reg.php">
                            Regisztráció
                        </a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>