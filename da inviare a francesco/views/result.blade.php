@extends('layouts.template')

@section('title','Result')

@section('content')
    <h1>Il risultato dell'operazione è {{$def_result}}</h1>
    <button class="btn btn-light mt-5"><a href="/form">Calcola un'altra operazione</button>
@endsection