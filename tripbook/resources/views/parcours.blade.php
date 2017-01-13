

@extends('layouts.app')




@section('content')
    @parent
   
        
  


      <h1> Les parcours officiels </h1>
      <div>
        @foreach ($parcours as $parcour)
            <p><a href="{{ URL::action('ParcoursController@showParcours', $parcour->id_parcours) }}"> {{$parcour-> nom_parcours }}

            

             </a></p> </br> <hr>
        @endforeach
        </div>
        <div>
			<a href="{{ URL::action('ParcoursController@createParcours') }}" id="creaparcours">Créer un parcours</a>
        </div>
@stop

@section('content')