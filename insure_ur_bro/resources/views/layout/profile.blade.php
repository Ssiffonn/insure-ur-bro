@extends('template')

@section('title')
    Profile
@endsection

@section('main_body')
    <form method="GET">
        <div>
            Login: <input type="text" name="login"><br>
            Password: <input type="text" name="password"><br>
            <input type="submit" name="run">
        </div>
    </form>

    <?php
        // session_start();
        if(isset($_GET['run'])){
            
            foreach ($user as $row) {
                if($row->login == $_GET['login'] && $row->password == $_GET['password']){
                    // $_SESSION['logged'] = 1;
                    // $_SESSION['id'] = $row['company_id'];
                    $session = session()->put('logged', 1);
                    $session = session()->put('id', $row->company_id);
                    
                    ?>
                        <meta http-equiv="refresh" content="0;URL=profile_logged">
                    <?php
                }
            }
            // echo $_SESSION['logged'];
            // echo $_SESSION['id'];
            echo "Не верный логин или пароль";
        }
    ?>
@endsection