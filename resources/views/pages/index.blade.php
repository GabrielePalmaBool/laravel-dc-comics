@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    
    <table class="comics">
        
        <tr>
            <th>Titolo fumetto</th>
            <th>Casa editrice</th>
            <th>Genere</th>
            <th>Data di uscita</th>
            <th>Prezzo</th>
        </tr>

        @foreach ( $comics as $comic)

        <tr>
            <td>{{$comic -> titolo}}</td>
            <td>{{$comic -> casa_editrice}}</td>
            <td>{{$comic -> genere}}</td>
            <td>{{$comic -> data_pubblicazione}}</td>
            <td>{{$comic -> prezzo}}</td>
        </tr>
           

        @endforeach
    </table>

@endsection
