@extends('layouts.app')


@section('content')
    @parent
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>

</head>
<body>

	<!-- Modal -->
	<div id="myModal" class="modal">
	  <!-- Contenu du modal -->
	  <div class="modal-content">
	    <span class="close">&times;</span>
	    <p>Gestion de parcours</p>
	    <form name="general">
			<label>Indiquer un nom pour ce point d'intérêt : </label><input type="text" name="interet" value="" />
        	<div><button type ="button" id="btnajouter"> Ajouter </button></div>
	    </form>
	  </div>
	</div>


	<script>

	//Récupère le tooltip
	var tooltip = document.querySelectorAll('.tooltip');

	var field = document.getElementById('interet');

	// Récupère le modal
	var modal = document.getElementById('myModal');

	// Récupère le bouton qui ouvre le modal
	var btn = document.getElementById("myBtn");

	var btnajouter = document.getElementById("btnajouter");

	// Récupère le span qui ferme le modal
	var span = document.getElementsByClassName("close")[0];

	// Ferme le modal en cliquant sur la croix
	span.onclick = function() {
	    modal.style.display = "none";
	}

	// Ferme le modal en cliquant sur ajouter
	btnajouter.onclick = function() 
	{		
		
		if(document.general.interet.value =="") 
			{
				tooltip.display = 'inline-block';
				console.log("contenu vide");
			}
			else
			{
				console.log("contenu non vide");
				modal.style.display = "none";
				document.getElementById('contenu').innerHTML = document.general.interet.value;
				
			}
		
	}

	// Fermeture du modal quand l'utilisateur clique en dehors de son emplacement
	window.onclick = function(event) 
	{
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}

	</script>




    <script type="text/javascript">
		function viewImage(id)
		{
			id.innerHTML = "<img src='{{asset('images/marqueur.png')}}' width='50' height='50' >";
			// Ouverture du modal
			modal.style.display = "block";

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
	
	<!-- affichage des marqueurs sur la map-->
	<div id="Layer2" style="position:absolute; left:45%; top:100px; width:50px; height:50px; z-index:2">
		
	</div>

	<div>
		Liste des points d'intérêts :
	</div>

	<!-- Liste des points d'intérêts apparaît ici -->
	<div id="contenu">
		
	</div>

	<div id="titre">
		<?php 

			$contenu = "nancy";
			$nomparcours = "NancyCreation"
		 ?> 
		<a href="{{ URL::action('ParcoursController@endParcours', [$contenu ,$nomparcours]) }}" id="fincreation"> Terminer création parcours</a>
	</div>



@stop

@section('content')