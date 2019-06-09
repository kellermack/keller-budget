<?php
$dsn = 'mysql:host=localhost;dbname=budget';
$username = "root";
$password = "";

$db = new PDO($dsn, $username, $password);


try {
    $db = new PDO($dsn, $username, $password);
    echo '<p> You are connected to the database </p>';
} catch (PDOException $ex) {
        $error_message = $ex->getMessage();
        include('databaseError.php');
        exit();

}



