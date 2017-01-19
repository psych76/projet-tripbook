

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
        <meta name="description" content="165c. uniques">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" src="{{ asset('css/popup.css') }}">
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/jquery.popup.js')}}"></script>
         <script src="{{asset('js/css-pop.js')}}"></script>
    

        <title>TripBook</title>
</head>

<script type="text/javascript">
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

function showMarker(){
  var showMarker = getUrlVars()["showMarker"];
  if(showMarker == 'true'){
    document.getElementById('Layer2').style.visibility = 'visible';  
}
  

}
</script>   

<body   onload="showMarker()">
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
<main class="scroll">
  
 <h1>@yield('titre')</h1>
        @section('content')
            
        @show
</main> 

</body>
  
    <footer>
            <ul id="bottom"> 
                <li id="bottom"><a href="{{ url('/parcours') }}"><img src="{{asset('images/galerie.png')}}" width="90" height="90" alt="galerie" /></a></li>
            
                <li id="bottom"><a href="{{ url('/home') }}"><img src="{{asset('images/carte.png')}}" width="90" height="90" alt="carte" /></a></li>
            
                <li id="bottom"><a href="{{ url('/livre') }}"><img src="{{asset('images/livre.png')}}" width="90" height="90" alt="livre" /></a> </li>
            </ul>
  </footer>

  

</body>
</html>
   