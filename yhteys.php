<?php
    $host="localhost";
    $dbuser="Hermon";
    $dbpassword="IloveJesus";
    $db="tilavaraus";

    try {
        $conn = new PDO("mysql:host=$host; dbname=$db", $dbuser, $dbpassword, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        die("Virhe: " . $e->getMessage());
    }
?>