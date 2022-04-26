@extends('layouts.app')

    @section('content')

        <h1>Formulaire d'ajout</h1>

        <form action="/save" method="POST">
            @csrf

            <label for="">Mon titre</label>
            <input type="text" name="titre">

            <br>

            <label for="">Detail </label>
            <input type="text" name="detail">

            <br>

            <button type="submit">Ajouter</button>

        </form>

        <br>

        <li><a href="/">Accueil</a></li>

        

    @endsection