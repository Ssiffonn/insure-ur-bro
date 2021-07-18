@extends('template')

@section('title')
    sevices
@endsection

@section('header')
    <header>
        <div class="navbar">
            <a href="/">Главная</a>
            
            <div class="dropdown">
                <button class="dropbtn">
                    Услуги
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="services">Сервис 1</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">
                    Компании
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="companies">Компания 1</a>
                </div>
            </div>

            <div class="profile">
                <a href="profile">Личный кабинет</a>
            </div>
        </div>
    </header>
@endsection