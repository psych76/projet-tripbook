

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
      <li><a href="{{ url('/home') }}">Home</a> <p> {{ Auth::user()->name }} </p></li>


      <li style="float:right">
        <a href="{{ url('/logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
         Se déconnecter</a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }} </form>
      </li>
      <li style="float:right"><a href="#contact">A propos</a></li>
      <li style="float:right"><a href="#news">Paramètres</a></li>  
      <li style="float:right"><a href="#news">Profil</a></li>
    </ul>
<main>
  
 <h1>@yield('titre')</h1>
        @section('content')
            
        @show
</main> 

</body>
  
    <footer>
            <ul id="bottom"> 
                <li id="bottom"><a href="{{ url('/parcours') }}"><img src="{{asset('images/galerie.png')}}" width="90" height="90" alt="galerie" /></a></li>
            
                <li id="bottom"><a href="{{ url('/home') }}"><img src="{{asset('images/carte.png')}}" width="90" height="90" alt="carte" /></a></li>
            
                <li id="bottom"><a href="{{ url('/livre') }}"><img src="{{asset('images/galerie.png')}}" width="90" height="90" alt="livre" /></a> </li>
            </ul>
  </footer>
</body>
</html>
   