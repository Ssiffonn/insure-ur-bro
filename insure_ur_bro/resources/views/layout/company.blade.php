@extends('template')

@section('title')
    {{-- {{ $name }} --}}
@endsection

@section('main_body')
    <div class="greet">
        <h1></h1>
    </div>
    
    <div class='row'>
        @foreach ($info['info'] as $row)
            <div class='column'>
                <a href="{{ route('service_order', ['id' => $row->service_id, 'Cid' => $info['Cid']]) }}"><img src="data://image/jpeg;base64,{{base64_encode($row->photo)}}"></a>
                <a href="{{ route('service_order', ['id' => $row->service_id, 'Cid' => $info['Cid']]) }}">{{$row->service_name}}</a>
            </div>
        @endforeach
    </div>
@endsection