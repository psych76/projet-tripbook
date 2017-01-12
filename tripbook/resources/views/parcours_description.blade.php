
@extends('layouts.app')
@section('content')
    @parent
      
      @foreach ($parcours_decrit as $parcour)
       <h1> {{ $parcour -> nom_parcours }} </h1>
       <div> 
       <p> {{ $parcour -> longueur_parcours }}  kms</p>
          @foreach ($lieux as $lieu)
          <p> {{$lieu -> id_lieu }}</p>
          @endforeach
       <p>{{ $parcour -> description_parcours }}</p>
       </div>
    @endforeach
      
@stop

@section('content')




