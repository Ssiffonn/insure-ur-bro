<?php
    include 'connect.php';
    $sql = "SELECT `service_id`,`service_name` FROM `services` GROUP BY `service_name`,`service_id`;";
    foreach($db->query($sql) as $row){
        echo "<a href='service?id=".$row['service_id']."'>".$row['service_name']."</a>";
    }