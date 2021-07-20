@extends('template')

@section('title')
    sevices
@endsection

@section('main_body')
    <div class="greet">
        <h1>Услуги</h1>
    </div>

    <?php
        include '../app/DTO/connect.php';
        $sql = "SELECT `service_id`,`service_name` FROM `services` GROUP BY `service_name`,`service_id`;";
        $i=0;
        echo "<div class='row'>";
            foreach ($db->query($sql) as $row) {                             
                echo "<div class='column'>";            
                    // echo "<a href='service?id=".$row['service_id']."'><img src='data://image/jpeg;base64,".base64_encode($row['photo'])."'></a>";            
                    echo "<a href='service?id=".$row['service_id']."'>".$row['service_name']."</a>";
                echo "</div>";
                $i++;
                if($i % 3 == 0){
                    echo "<div class='break'></div>";
                }                
            }
        echo "</div>";
    ?>
@endsection