@extends('layout.base')
@section('content')
    <div class="container">
        @foreach ($outils as $outil)
            <p>{{$loop->iteration}} : {{$outil}}</p>
        @endforeach
    </div>
@endsection