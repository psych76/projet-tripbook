@extends('layouts.app')
@section('content')
@parent
<div id=parent>
    <div id=enfant>

        <h1 style="text-align:center"> Les albums </h1>
        <figure>
            @foreach($albums as $album)
            <?php $i = 0; ?>
            <span class="album"><a href="http://127.0.0.1/projet-tripbook/tripbook/public/album_description/{{$album->id_album}}">
                <div class="titre">{{$album->nom_album}}</div>
                @foreach($photos as $photo)
                @if($album->id_album == $photo->id_album&&$i==0)
                <?php $i++; ?>
                <img src="http://127.0.0.1/projet-tripbook/tripbook/public/photos/{{$photo->src_photo}}" width="100%" height="90%"/>
                @else
                <!--ne fait rien-->
                @endif
                @endforeach
            </a></span>
            @endforeach
        </figure>

    </div>
</div>
<style>
    .album{
        display:inline-block;
        width:45%;
        height:45%;
        border-style:solid;
        border-width:1px;
        margin:5px;
    }
    .titre{
        text-align: center;
        background-color:orange;
    }.
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