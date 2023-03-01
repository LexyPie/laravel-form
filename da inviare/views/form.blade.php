@extends('layouts.template')

@section('title','Form')
    
@section('content')
    <form method="POST" action="result" class="container m-5">
        @csrf
        <label>Valore A</label>
        <input type="number" name="valA" class="form form-control m-2"/>
        <label>Valore B</label>
        <input type="number" name="valB" class="form form-control m-2"/>
        <button type="submit" class="btn btn-primary mt-3">Somma</button>
    </form>
@endsection