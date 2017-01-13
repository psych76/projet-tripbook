@extends('layouts.app')



@section('content')
    @parent
    <script type="text/javascript">
		function viewImage(id)
		{
			id.innerHTML = "<img src='{{asset('images/marqueur.png')}}' width='50' height='50' >";
			
		}
	</script>

   <div id="titre">
   		Création de parcours
   </div>

   <div id="description">
   		(Cliquer sur la carte pour ajouter un point d'intérêt)
   </div>
         
  
   <!-- A conserver pour la réalisation d'un parcours  
    <div id="Layer1" >
    	<img src="{{asset('images/carte_nancy.png')}}" alt="" style="display: block;margin-left: auto;margin-right: auto" usemap="#carte">
    	
	</div>

	<div id="Layer2" style="position:absolute; left:50%; top:110px; width:50px; height:50px; z-index:2"><img name="marqueur" src="{{asset('images/marqueur.png')}}" width="50" height="50" alt=""></div> -->

	<center>
		<img src="{{asset('images/carte_nancy.png')}}" alt="Orientation" border="0" usemap="#panneaux" />
			<map name="panneaux" id="panneaux">
			   <area shape="circle" coords="300,105,75" onclick="javascript:viewImage(Layer2)" alt="Place Stanislas" />
			</map>
	</center>
	

	<div id="Layer2" style="position:absolute; left:45%; top:100px; width:50px; height:50px; z-index:2">
		
	</div>
Liste des points d'intérêts :

<div id="fincreation">
	<a href="{{ URL::action('ParcoursController@createParcours') }}"> Terminer création parcours</a>
</div>

@stop

@section('content')