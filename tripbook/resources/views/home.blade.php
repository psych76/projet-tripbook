@extends('layouts.app')



@section('content')
    @parent
   
    
        
     <figure>
    <!-- <img src="{{asset('images/carte_nancy.png')}}" alt="carte de nancy" style="display: block;
    margin-left: auto;
    margin-right: auto" />
	-->

	<div id="blanket" style="display:none">
		
	
		<div id="popUpDiv" style="display:none">
		<h1> Quand la place Stanislas a-t-elle été construite? </h1>
				<form action="">
				  <input type="radio" name="gender" value="male"> Entre 1902 et 1905<br>
				  <input type="radio" name="gender" value="female">Entre 1751 et 1755 <br>
				  <input type="radio" name="gender" value="other"> Entre 1860 et 1865
				</form>
		<a class="choisir" href="#" onclick="popup('popUpDiv')" >Choisir</a>

	</div>

		
	</div>
	<div id="Layer1" >
    	<img src="{{asset('images/carte_nancy.png')}}" alt="" style="display: block;margin-left: auto;margin-right: auto" usemap="#carte">
    <div id="Layer2" style="position:absolute; left:45%;  visibility: hidden; top:80px; width:50px; height:50px; z-index:2">
    		<a href="#" onclick="popup('popUpDiv')" >
    			<img name="marqueur" src="{{asset('images/marqueur.png')}}" width="50" height="50" alt=""> 
    		</a>
    </div> -->
     </figure>
         
  
@stop

@section('content')
