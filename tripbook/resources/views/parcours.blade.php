

@extends('layouts.app')




@section('content')
    @parent
   
        
  


      <h1> Les parcours officiels </h1>
        @foreach ($parcours as $parcour)
            <p><a href="{{ URL::action('ParcoursController@showParcours', $parcour->id_parcours) }}"> {{$parcour-> nom_parcours }}

            

             </a></p> </br> <hr>
        @endforeach


@stop

@section('content')