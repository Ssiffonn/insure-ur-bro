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
        if(isset($_GET['run'])){
            
            foreach ($user as $row) {
                if($row->login == $_GET['login'] && $row->password == $_GET['password']){
                    $session = session()->put('logged', 1);
                    $session = session()->put('id', $row->company_id);
                    ?>
                        <meta http-equiv="refresh" content="0;URL=profile_logged">
                    <?php
                }
            }
            echo "Не верный логин или пароль";
        }
    ?>
@endsection