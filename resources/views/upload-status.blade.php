@extends('layouts.template')

@section('title','Upload status')

@section('content')
    <h1>Il tuo file  stato caricato </h1>
    <img src="storage/images/{{$preview_img}}"/>
@endsection