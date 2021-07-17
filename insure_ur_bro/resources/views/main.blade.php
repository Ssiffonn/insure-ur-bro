<?php
    $servername = "172.25.0.1";
    $username = "root";
    $password = "root";

    try {
        $conn = new PDO("mysql:dbname=insure_ur_bro;host=$servername", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $sql = 'SELECT * FROM `test`';
    foreach ($conn->query($sql) as $row) {
        echo $row['id']."\t";
        echo $row['name']."\t";
        echo $row['head']."\t";
        echo $row['num']."<br>";
    }
?>