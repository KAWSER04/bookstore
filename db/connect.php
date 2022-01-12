<?php
function Connect()
{
    $server_name = "localhost";
    $username = "faiz";
    $password = "Faiz@6761";
    $db_name = "bookstore-db";
    try {
        $conn = new PDO("mysql:host=$server_name;dbname=$db_name", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        return -1;
    }
}