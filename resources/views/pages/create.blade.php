@extends('layouts.main-layout')
@section('head')
    <title>Add new</title>
@endsection
@section('content')

<h1>Nuovo fumetto</h1>

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
            <th>AGGIUNTA</th>
        </tr>

        <tr>
            <form action="{{route('comic.store')}}" method="POST">

                @csrf
                @method('POST')

                
                <td>
                    <input type="text" name="titolo">
                </td>
                <td>
                    <input type="text" name="casa_editrice">
                </td>
                <td>
                    <input type="text" name="genere">
                </td>
                <td>
                    <input type="date" name="data_pubblicazione">
                </td>
                <td>
                    <input type="number" step=any name="prezzo">
                </td>

                <td>
                    <input type="submit" value="ADD NEW">
                </td>

            </form>
        </tr>
</table>
    

    



@endsection
