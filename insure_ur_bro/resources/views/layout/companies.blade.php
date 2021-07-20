@extends('template')

@section('title')
    companies
@endsection

@section('main_body')
    <div class="greet">
        <h1>Компании</h1>
    </div>

    <?php
        include '../app/DTO/connect.php';
        $sql = "SELECT * FROM `companies`";
        $i=0;
        echo "<div class='row'>";
            foreach ($db->query($sql) as $row) {                             
                echo "<div class='column'>";            
                    echo "<a href='company?id=".$row['company_id']."'><img src='data://image/jpeg;base64,".base64_encode($row['Photo'])."'></a>";            
                    echo "<a href='company?id=".$row['company_id']."'>".$row['name']."</a>";
                echo "</div>";
                $i++;
                if($i % 3 == 0){
                    echo "<div class='break'></div>";
                }                
            }
        echo "</div>";
    ?>
@endsection