<?php
    // session_start();
    $session = session()->get('logged');
    if($session == 1){
        echo "<a href='".route('profile_logged')."'>Личный кабинет</a>";
    }
    else{
        echo "<a href='".route('profile')."'>Личный кабинет</a>";
    }