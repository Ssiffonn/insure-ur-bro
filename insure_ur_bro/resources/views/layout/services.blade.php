@extends('template')

@section('title')
    sevices
@endsection

@section('main_body')
    <div class="greet">
        <h1>Услуги</h1>
    </div>

    <div class='row'>
        @foreach ($services as $row)  
            <div class='column'>        
                {{-- <a href="service?id={{$row->service_id}}"><img src="data://image/jpeg;base64,{{base64_encode($row->photo)}}"></a>   --}}
                <a href="service?id={{$row->service_id}}">{{$row->service_name}}</a>
            </div>
        @endforeach
    </div>
@endsection