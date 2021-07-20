@extends('template')

@section('title')
    <?php
        include '../app/DTO/connect.php';
        $id = $_GET['id'];
        $sql = "SELECT name FROM `companies` WHERE `company_id`=$id";
        foreach ($db->query($sql) as $row) {
            $name = $row['name'];
            echo $name;
        }
    ?>
@endsection

@section('main_body')
    <div class="greet">
        <h1><?php echo $name; ?></h1>
    </div>

    <?php
        include '../app/DTO/connect.php';
        $i = 0;
        $sql = "SELECT * FROM `services` WHERE `company_id` = $id";
        echo "<div class='row'>";
            foreach ($db->query($sql) as $row) {
                echo "<div class='column'>";            
                    echo "<a href='service_order?id=".$row['service_id']."&company_id=".$id."'><img src='data://image/jpeg;base64,".base64_encode($row['photo'])."'></a>";            
                    echo "<a href='service_order?id=".$row['service_id']."&company_id=".$id."'>".$row['service_name']."</a>";
                echo "</div>";
                $i++;
                if($i % 3 == 0){
                    echo "<div class='break'></div>";
                }      
            }
        echo "</div>";
    ?>
@endsection