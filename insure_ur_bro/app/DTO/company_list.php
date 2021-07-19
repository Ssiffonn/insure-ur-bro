<?php
    include 'connect.php';
    $sql = "SELECT company_id,name FROM `companies`";
    foreach($db->query($sql) as $row){
        echo "<a href='company?id=".$row['company_id']."'>".$row['name']."</a>";
    }
