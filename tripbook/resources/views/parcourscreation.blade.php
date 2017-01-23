@extends('layouts.app')


@section('content')
    @parent
<?php
	$contenu="";
	$nomparcours="";
?>
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

	<!-- Modal -->
	<div id="myModal" class="modal">
	  <!-- Contenu du modal -->
	  <div class="modal-content">
	    <span class="close">&times;</span>
	    <p>Gestion de parcours</p>
	    <form name="general">
			{{ csrf_field() }}
			<!--
			<form action="parcourscreation.blade.php" method="get">
			<label for="name">Indiquer un nom pour ce point :</label>
			<input type="submit" value="S'inscrire" />
			</form>
			-->

			<div><label>Indiquer un nom pour ce parcours : </label><input type="text" name="nomparcours" value="" id="nomparcours"/></div>
			<input type="hidden" name="link" value="{{url('parcours/fin')}}" id="link">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div><label>Indiquer un nom pour ce point d'intérêt : </label><input type="text" name="interet" value="" id="interet"/></div>
			
        	<div><button type ="button" id="btnajouter"> Ajouter </button></div>

	    </form>
	  </div>
	</div>



   <div id="titre">
   		Création de parcours
   </div>

   <div id="description">
   		(Cliquer sur la carte pour ajouter un point d'intérêt)
   </div>
         

	<center>
		<img src="{{asset('images/carte_nancy.png')}}" alt="Orientation" border="0" usemap="#panneaux" />
			<map name="panneaux" id="panneaux">
			   <area shape="circle" coords="300,105,75" onclick="viewImage(Layer2)" alt="Place Stanislas" />
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
		<button type="button" id="fincreation">Terminer création parcours</button>

	</div>

<script type>
  
    	//Récupère le tooltip
	var tooltip = document.querySelectorAll('.tooltip');

	var field = document.getElementById('interet');

	// Récupère le modal
	var modal = document.getElementById('myModal');

	// Récupère le bouton qui ouvre le modal
	var btn = document.getElementById("myBtn");

	// Récupère le span qui ferme le modal
	var span = document.getElementsByClassName("close")[0];

	// Ferme le modal en cliquant sur la croix
	span.onclick = function() {
	    modal.style.display = "none";
	}

	// Ferme le modal en cliquant sur ajouter
	$('#btnajouter').click(function(e) {
	    //Récupère la valeur de #interet. Si pas chaine vide, on ajoute un élément dans la div contenu pour l'afficher.
	    var interet = $('#interet').val();
	    if (interet != '') {
	      $('#contenu').append('<div class="contenu-element">'+interet+'</div>');
	    }
	});

	// affichage du marqueur sur la carte
	function viewImage(id)
	{
		id.innerHTML = "<img src='{{asset('images/marqueur.png')}}' width='50' height='50' >";
		// Ouverture du modal
		modal.style.display = "block";
		
	}
	
	
	$('#fincreation').click(function(e) {
	
	  //e.preventDefault(); //Eviter le click par défaut
	  var array = [];
	  $('.contenu-element').each(function() {
	    array.push($(this).html()); //récupère les données saisies
	  });
	  
	  console.log($('#interet').val());
	  console.log($('#nomparcours').val());
	  console.log($('#link').val());
	  $.ajax({
	    type: 'GET',
	    //url: $(this).attr('href'),	   
	    url: 'fin',	   
	    data: {
	      contenu: $('#interet').val(),
	      nomparcours: $('#nomparcours').val()
	    },
	    success: function() {
	      //ce que tu veux faire quand le call est réussi
	      alert("success");
	      window.location.replace('http://127.0.0.1/projet-tripbook/tripbook/public/parcours');
	    }
	  });
	});

	
	
	
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
				contenu = document.general.interet.value;
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

@stop

@section('content')