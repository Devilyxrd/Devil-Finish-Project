<?php 
    $host = "localhost";
    $username = "root";
    $database = "devildata";
    $password = "";

    try {
         $db = new PDO("mysql:host=$host;dbname=$database;", "$username", "$password");
         $db -> exec("SET CHARSET UTF8");
    } catch ( PDOException $e ){
         print $e->getMessage();
    }

    $_POST = array_map('htmlentities' , $_POST);
    $_GET = array_map('htmlentities' , $_GET);
?>