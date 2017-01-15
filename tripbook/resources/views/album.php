@extends('layouts.app')
@section('content')
@parent
<h1> Les albums </h1>
<div>
    @foreach ($albums as $album)
    <p><a href="{{ URL::action('AlbumController@showAlbum', $album->id_album) }}"> {{$album-> nom_album }}



    </a></p> </br> <hr>
    @endforeach
</div>
<div>
    <a href="{{ URL::action('AlbumController@createAlbum') }}" id="creaalbum">Créer un album</a>
</div>
@stop
@section('content')