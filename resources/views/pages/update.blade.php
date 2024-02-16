@extends('layouts.main-layout')
@section('head')
    <title>Edit</title>
@endsection
@section('content')

<h1>Modifica fumetto</h1>
    
    <form action="{{route('comic.update', $comics -> id)}}" method="POST">

        @csrf
        @method('PUT')

        <label for="titolo">Titolo</label>
        <input type="text" name="titolo" value="{{$comics->titolo}}">
        <label for="casa_editrice">Casa editrice</label>
        <input type="text" name="casa_editrice" value="{{$comics->casa_editrice}}">
        <label for="genere">Genere</label>
        <input type="text" name="genere" value="{{$comics->genere}}">
        <label for="data_pubblicazione">Data di pubblicazione</label>
        <input type="date" name="data_pubblicazione" value="{{$comics->data_pubblicazione}}">
        <label for="prezzo">Prezzo</label>
        <input type="number" step=any name="prezzo" value="{{$comics->prezzo}}">

        <input type="submit" value="UPDATE">

    </form>



@endsection
