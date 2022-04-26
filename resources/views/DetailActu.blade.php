@extends('layouts.app')

@section('content')

    <h3>Détail des actualitées </h3>
    <h4> {{$actu->titre}} </h4> 
    <h4> {{$actu->detail}} </h4> 

    <br>

    <form action="/update/{{$actu->id}}" method="POST">
        @csrf

        <label for="">Mon titre</label>
        <input type="text" name="titre" value="{{$actu->titre}}">

        <br>

        <label for="">Detail </label>
        <input type="text" name="detail" value="{{$actu->detail}}">

        <br>

        <button type="submit">modifié</button>

    </form>

@endsection