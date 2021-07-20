@extends('template')

@section('title')
    Profile
@endsection

@section('main_body')
    <form method="GET">
        <input type="submit" name="exit" value="Выход">
    </form>
    <?php
        include '../app/DTO/connect.php';
        if(isset($_GET['exit'])){
            // $_SESSION['logged'] = 0;
            $session = session()->put('logged', 0);
            ?>
                <meta http-equiv="refresh" content="0;URL=/">
            <?php
            
            // echo $_SESSION['logged'];
            // echo $_SESSION['id'];
        }
        
    ?>
@endsection