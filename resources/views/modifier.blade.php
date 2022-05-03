@extends('layouts.app')

@section('content')

<h1>Modification des actualitées</h1>

<form action="/update" method="POST"> @csrf
    
    <input type="hidden" name="id" value="{{$actu->id}}">
    

    <label for="">Mon titre</label>
    <input type="text" name="titre" value="{{$actu->titre}}">

    <br>

    <label for="">Detail </label>
    <input type="text" name="detail" value="{{$actu->detail}}">

    <br>

    <button type="submit">modifié</button>

    
</form>

@endsection