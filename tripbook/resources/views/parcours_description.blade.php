
@extends('layouts.app')
@section('content')
    @parent

    <!-- Inutile de faire un foreach ici, car la requête de la fonction showParcours($id) va forcément retourner qu'un parcours -->
      @foreach ($parcours_decrit as $parcour)
       <h1> Nom du parcours : {{ $parcour -> nom_parcours }} </h1>
       <div> 
       <p> Longueur du parcours : {{ $parcour -> longueur_parcours }}  kms</p>
          <p> Lieux du parcours : </p>
           @foreach ($lieux as $lieu)
          <p>  - {{$lieu -> nom_lieu }} (id : {{$lieu->id_lieu}})</p>
          @endforeach
       <p> Description du parcours : {{ $parcour -> description_parcours }}</p>
       </div>
    @endforeach
      
@stop

@section('content')




