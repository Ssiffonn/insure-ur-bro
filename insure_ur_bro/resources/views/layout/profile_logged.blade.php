@extends('template')

@section('title')
    Profile
@endsection

@section('main_body')
    <form method="GET">
        <input type="submit" name="exit" value="Выход">
    </form>
    <?php
        $company_id = session()->get('id');

        echo "<table>";
            echo "<tr><td>Услуга</td><td>ФИО</td><td>email</td><td>Телефон</td><td>Дата обращения</td></tr>";
            foreach ($orders as $row) {
                echo "<tr>";
                    echo "<td>".$row->service_name."</td>";
                    echo "<td>".$row->FIO."</td>";
                    echo "<td>".$row->email."</td>";
                    echo "<td>".$row->phone_number."</td>";
                    echo "<td>".$row->date."</td>";
                echo "</tr>";
            }
        echo "</table>";

        if(isset($_GET['exit'])){
            // $_SESSION['logged'] = 0;
            $session = session()->put('logged', 0);
            ?>
                <meta http-equiv="refresh" content="0;URL=profile">
            <?php
            
            // echo $_SESSION['logged'];
            // echo $_SESSION['id'];
        }
        
    ?>
@endsection