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
            <th>Modifica</th>
            <th>Elimina</th>
        </tr>

        @foreach ( $comics as $comic)

        <tr>
            
            <td>
                <a href="{{route('comic.show', $comic -> id)}}">
                    {{$comic -> titolo}}
                </a>
            </td>
            <td>{{$comic -> casa_editrice}}</td>
            <td>{{$comic -> genere}}</td>
            <td>{{$comic -> data_pubblicazione}}</td>
            <td>{{$comic -> prezzo}}</td>

            <!-- Modifica riga -->
            <td>
                <a href="{{route('comic.edit', $comic -> id)}}">MODIFICA</a>
            </td>

            <!-- Cancellazione riga -->
            <td>
                <form action="{{route('comic.destroy', $comic -> id)}}" method="POST">

                    @csrf
                    @method('DELETE')

                    <input type="submit" value="X">

                </form>
            </td>

        </tr>
           

        @endforeach
    </table>

    <a href="{{route('comic.create')}}">ADD COMIC</a>

@endsection
