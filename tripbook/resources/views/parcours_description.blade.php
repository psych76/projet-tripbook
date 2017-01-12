<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
        <meta name="description" content="165c. uniques">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      
       <script src="{{asset('js/jquery.min.js')}}"></script>
        <title>TripBook</title>
</head>
<body>
<ul id="top">
      <li><a href="#home">Home</a></li>
      <li style="float:right"><a href="#about">Déconnexion</a></li>
      <li style="float:right"><a href="#contact">A propos</a></li>
      <li style="float:right"><a href="#news">Paramètres</a></li>  
      <li style="float:right"><a class="active" a href="#news">Profil</a></li>
    </ul>
<main>
      
      @foreach ($parcours_decrit as $parcour)
       <h1> {{ $parcour -> nom_parcours }} </h1>
       <div class="scroll"> 
       <p> {{ $parcour -> longueur_parcours }}  kms</p>
          @foreach ($lieux as $lieu)
          <p> {{$lieu -> nom_lieu }}</p>
          @endforeach
       <p>{{ $parcour -> description_parcours }}</p>
       </div>
      
     @endforeach

</main>
  
  
    <footer>
            <ul id="bottom">
                <li id="bottom"><a href="parcours"><img src="images/galerie.png" width="90" height="90" alt="galerie" /></a></li>
            
                <li id="bottom"><a href="home"><img src="images/map.png" width="90" height="90" alt="carte" /></a></li>
            
                <li id="bottom"><a href="livre"><img src="images/livre.png" width="90" height="90" alt="livre" /></a> </li>
            </ul>
  </footer>
</body>
</html>
   