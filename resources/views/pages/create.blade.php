@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

<h1>Nuovo fumetto</h1>
    
    <form action="{{route('comic.store')}}" method="POST">

        @csrf
        @method('POST')

        <label for="titolo">Titolo</label>
        <input type="text" name="titolo">
        <label for="casa_editrice">Casa editrice</label>
        <input type="text" name="casa_editrice">
        <label for="genere">Genere</label>
        <input type="text" name="genere">
        <label for="data_pubblicazione">Data di pubblicazione</label>
        <input type="date" name="data_pubblicazione">
        <label for="prezzo">Prezzo</label>
        <input type="number" step=any name="prezzo">

        <input type="submit" value="ADD NEW">

    </form>



@endsection
