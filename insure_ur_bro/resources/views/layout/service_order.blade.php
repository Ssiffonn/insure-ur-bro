@extends('template')

@section('title')
@endsection

@section('main_body')
    <div class="greet">
        <h1></h1>
    </div>

    @foreach ($info as $row)
        <img src="data://image/jpeg;base64,{{ base64_encode($row->photo) }}">
        Цена: {{ $row->default_price }}
    @endforeach

    <form action = "/create" method="post" action="service_order">
        @csrf
        ФИО: <input type="text" placeholder="ФИО" name="FIO">
        Телефон: <input type="text" placeholder="00000000000" name="phone">
        email: <input type="text" placeholder="example@mail.ru" name="email">
        <input type="submit" name="order" value="Заказать">
    </form>

@endsection