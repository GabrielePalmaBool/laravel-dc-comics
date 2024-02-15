@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

<h1>Lista fumetti</h1>
    
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
            
            <td><a href="{{route('comic.show', $comic -> id)}}">{{$comic -> titolo}}</a></td>
            <td>{{$comic -> casa_editrice}}</td>
            <td>{{$comic -> genere}}</td>
            <td>{{$comic -> data_pubblicazione}}</td>
            <td>{{$comic -> prezzo}}</td>
            
        </tr>
           

        @endforeach
    </table>

@endsection
