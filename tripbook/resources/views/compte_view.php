<!DOCTYPE html>
<html>

 
    <h1>Task List</h1>
   
    <hr>
 
   
 	
   @foreach($compte as $key => $value)
        
          <p> {{ $value->id_compte }}</p>
            <p>{{ $value->nom }}</p>
       
    @endforeach
</html>