<?php
    // session_start();
    $session = session()->get('logged');
    if($session == 1){
        ?>
        <a href='profile_logged'>Личный кабинет</a>
        <?php
    }
    else{
        ?>
        <a href='profile'>Личный кабинет</a>
        <?php
    }