<?php
    $servername = "172.25.0.1";
    $dbname ="insure_ur_bro";
    $username = "root";
    $password = "root"; 

    try {
        $db = new PDO("mysql:dbname=$dbname;host=$servername", $username, $password);
        // set the PDO error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }