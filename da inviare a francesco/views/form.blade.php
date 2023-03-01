@extends('layouts.template')

@section('title','Form')
    
@section('content')
    <form method="POST" action="result" class="container m-5">
        @csrf
        <label>Valore A</label>
        <input type="number" name="valA" class="form form-control m-2"/>
        <label>Valore B</label>
        <input type="number" name="valB" class="form form-control m-2"/>
        <button type="submit" name="sum" class="btn btn-primary mt-3">Somma +</button>
        <button type="submit" name="sub" class="btn btn-success mt-3">Sottrazione -</button>
        <button type="submit" name="mult" class="btn btn-danger mt-3">Moltiplicazione *</button>
        <button type="submit" name="div" class="btn btn-warning mt-3">Divisione /</button>
    </form>
@endsection