@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')

<h1>Fumetto</h1>
    
    <table class="comics">
        
        <tr>
            <th>Titolo fumetto</th>
            <th>Casa editrice</th>
            <th>Genere</th>
            <th>Data di uscita</th>
            <th>Prezzo</th>
        </tr>

        <tr>
            <td>{{$comics -> titolo}}</td>
            <td>{{$comics -> casa_editrice}}</td>
            <td>{{$comics -> genere}}</td>
            <td>{{$comics -> data_pubblicazione}}</td>
            <td>{{$comics -> prezzo}}</td>
        </tr>
           
    </table>

@endsection
