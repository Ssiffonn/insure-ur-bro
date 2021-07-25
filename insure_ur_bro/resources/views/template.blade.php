<?php
    // session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="{{ asset("css/style.css") }}">        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Insure ur bro - @yield('title')</title>
    </head>

    <body>
        <header>
            <form method="GET">
                <div class="navbar">
                    <a href="/">Главная</a>
                    
                    <div class="dropdown">
                        <a href="services" class="dropbtn">
                            Услуги 
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-content">
                            {{-- <a href="services">Сервис 1</a> --}}
                            <?php include "../app/DTO/services_list.php"; ?>
                        </div>
                    </div>
    
                    <div class="dropdown">
                        <a href="{{ route('companies') }}" class="dropbtn">
                            Компании 
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-content">
                            {{-- <a href="company">Компания 1</a> --}}
                            <?php include "../app/DTO/company_list.php"; ?>
                        </div>
                    </div>
    
                    <div class="profile">
                        {{-- <a href="profile">Личный кабинет</a> --}}
                        <?php include "../app/DTO/logged.php"; ?>
                    </div>
                </div>
            </form>
        </header>
        <?php 
            // echo $_SESSION['logged'];
            //$value = $request->session()->get('logged');
            //echo $value;
        ?>


        @yield('main_body')
        {{-- @yield('companies_show')  --}}
    </body>
</html>