@extends('layouts.app')
@section('content')
@parent
<div id=parent>
    <div id=enfant>

        @foreach ($album_decrit as $alb)
        <h1> Nom de l'album : {{$alb->nom_album}} </h1>
        <div>
            <p> Description de l'album : {{$alb->description}}</p>
            <!-- Comme un album est associé  un seul parcours, je sais donc qu'il n'y aura qu'un seul résultat -->
            <p> Cet album est lié au {{$parcours[0]->nom_parcours}} (id : {{$parcours[0]->id_parcours}}) </p>

            <p> Les photos :</p>
            <!-- Il n'y a pas besoin de vérifier de quel album les photos affichées sont, car elles sont forcément de l'album choisi
            car on l'a précisé dans la requête-->
            <figure>
                @foreach($photos as $photo)
                <div>
       <span class="bloc">
           <div class="titre">{{$photo->nom_photo}}</div>
        <img src="http://127.0.0.1/projet-tripbook/tripbook/public/photos/{{$photo->src_photo}}" width=100% />
        </span>
                    <p style="display:inline"> {{$photo->description_photo}} </p>
                </div>
                @endforeach
            </figure>
        </div>
        @endforeach
    </div>
</div>
<style>
    .bloc{
        display:inline-block;
        width:35%;
        height:45%;
        border-style:solid;
        border-width:1px;
        margin:5px;
    }
    .titre{
        text-align: center;
        background-color:orange;
    }
    #parent{
        height: 100%;
        width: 100%;
        overflow: hidden;
        position: relative;
    }
    #enfant{
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: -15px; /* Il faut varier cette variable en fonction du navigateur utilisé (la barre de défilement n'a pas toujours la même largeur) */
        overflow: auto;
    }
</style>

@stop

@section('content')