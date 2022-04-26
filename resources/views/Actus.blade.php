@extends('layouts.app')

@section('content')

    <h1>Actualitées</h1>

        <ul>
            <li><a href="detail">Détail des actualitées</a></li>
            <li><a href="create">Ajout des actualitées</a></li>

        </ul>

            @forelse ($actualites as $item)

                <a href="/detail/{{$item->id}}">{{$item->titre}}</a><br>
                
                @empty
                    <h5>Pas d'actualitées</h5>  
                
            @endforelse

@endsection