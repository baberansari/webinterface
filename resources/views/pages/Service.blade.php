@extends('layouts.app')
@section('title','Service')
@section('content')
    <h1></h1>
    @if(count($service) > 0)
        <ul>
        @foreach ($service as $service)
            <li>{{$service}}</li>
                
        @endforeach
        </ul>
    @endif

        <h1> this is out put  services </h1>   
@endsection     


