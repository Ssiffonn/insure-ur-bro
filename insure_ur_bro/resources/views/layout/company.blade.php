@extends('template')

@section('title')
    <?php
        include '../app/DTO/connect.php';
        $id = $_GET['id'];
        $sql = "SELECT name FROM `companies` WHERE `company_id`=$id";
        foreach ($db->query($sql) as $row) {
            echo $row['name'];
        }
    ?>
@endsection