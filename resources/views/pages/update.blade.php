@extends('layouts.main-layout')
@section('head')
    <title>Edit</title>
@endsection
@section('content')

<h1>Modifica fumetto</h1>

@if ($errors->any())

    <table class="comics">
        <tr>
            @foreach ($errors->all() as $error)
                <th>{{$error}}</th>
            @endforeach
        </tr>
    </table>  

@endif

<table class="comics">
        <tr>
            <th>Titolo fumetto</th>
            <th>Casa editrice</th>
            <th>Genere</th>
            <th>Data di uscita</th>
            <th>Prezzo</th>
            <th>MODIFICA</th>
        </tr>
    
    <form action="{{route('comic.update', $comics -> id)}}" method="POST">

        @csrf
        @method('PUT')

        <td>
            <input type="text" name="titolo" value="{{$comics->titolo}}">
        </td>
        <td>
            <input type="text" name="casa_editrice" value="{{$comics->casa_editrice}}">
        </td>
        <td>
            <input type="text" name="genere" value="{{$comics->genere}}">
        </td>
        <td>
            <input type="date" name="data_pubblicazione" value="{{$comics->data_pubblicazione}}">
        </td>
        <td>
            <input type="number" step=any name="prezzo" value="{{$comics->prezzo}}">
        </td>
        <td>
            <input type="submit" value="UPDATE">
        </td>

    </form>

</table>


@endsection
