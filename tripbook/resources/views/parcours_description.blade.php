
@extends('layouts.app')
@section('content')
    @parent

    <!-- Inutile de faire un foreach ici, car la requête de la fonction showParcours($id) va forcément retourner qu'un parcours -->
      @foreach ($parcours_decrit as $parcour)
       <h1> {{ $parcour -> nom_parcours }}  <button type="button" class="realiser" id="bouton" onclick="realiser()">Realiser! </button> </h1>
       @endforeach
       <div> 
       <p> {{ $parcour -> longueur_parcours }}  kms -  Parcours officiel</p>
          <h2> Points d'intérêts : </h2>
           @foreach ($lieux as $lieu)
          <p class="texte">       - {{$lieu -> nom_lieu }} </p>
          @endforeach

         <center>
    <img src="{{asset('images/carte_nancy.png')}}" alt="Orientation" border="0" />
     
  </center>
          <h2>Description du parcours</h2>
       <p class="texte">{{ $parcour -> description_parcours }}</p>
          <h2> Commentaires </h2>
         @foreach ($commentaires_parcours as $co)
       
          <p>{{$co -> pseudo }} - {{ $co -> note_parcours}}/5   -   {{$co -> date_commentaire_parcours }} </p>
          <p class="texte">{{$co -> commentaire_parcours }}</p>
          @endforeach
       </div>

       <div>
     <button type="button" id="bouton_com" onclick="ajout()"> Ajouter un commentaire ! </button>
      <div id="com" style="visibility: hidden;">
      <p> Commentaire : </p>
       <input id="comm" type="text" class="input" required autofocus>
       <p> Note : </p>
       

    
    <SELECT name="note" size="1">
    <OPTION>1
    <OPTION>2
    <OPTION>3
    <OPTION>4
    <OPTION>5
    </SELECT>
   

      </div>

      </div>
    
  <script type="text/javascript">
    function realiser(){
      window.location.replace("http://localhost/projet-tripbook/tripbook/public/home?showMarker=true");
    }
  </script>    

  <script type="text/javascript">
    function ajout(){
document.getElementById('com').style.visibility = 'visible';
document.getElementById('bouton_com').style.visibility = 'hidden';
document.getElementById('bouton').style.visibility = 'visible';
    }
  </script>    
@stop

@section('content')




