@extends('template')

@section('title')
    <?php
        include '../app/DTO/connect.php';
        $id = $_GET['id'];
        $sql = "SELECT service_name FROM `services` WHERE `service_id`=$id";
        foreach ($db->query($sql) as $row) {
            $name = $row['service_name'];
        }
        echo $name;
    ?>
@endsection