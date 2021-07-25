@extends('template')

@section('title')
    companies
@endsection

@section('main_body')
    <div class="greet">
        <h1>Компании</h1>
    </div>
    
    <div class='row'>
        @foreach ($companies as $row)  
            <div class='column'>        
                <a href="{{ route('company', ['id' => $row->company_id]) }}"><img src="data://image/jpeg;base64,{{base64_encode($row->Photo)}}"></a>  
                {{-- <a href="company?id={{$row->company_id}}">{{$row->name}}</a> --}}
                <a href="{{ route('company', ['id' => $row->company_id]) }}">{{$row->name}}</a>
            </div>
        @endforeach
    </div>
@endsection