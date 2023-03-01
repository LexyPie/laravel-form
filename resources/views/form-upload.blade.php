@extends('layouts.template')

@section('title','Upload image')
    
@section('content')
    <form method="POST" action="/upload-status" enctype="multipart/form-data" class="container m-5">
        @csrf {{--crea un token per evitare gli attacchi crossite, se non lo si mette non funziona--}}
        <label>Carica l'immagine</label>
        <input type="file" name="uploaded_img" class="form form-control m-2"/>
        <button type="submit" name="sende_upload" class="btn btn-primary mt-3">Carica immagine</button>
    </form>
@endsection