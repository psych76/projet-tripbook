
<!DOCTYPE HTML>
<html>

<head>
        <title>TripBook</title>
        <meta charset="utf-8">
        <meta name="description" content="165c. uniques">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <script type="text/javascript" src="jquery-3.1.1.js"></script>
        <script type="text/javascript"></script>

		
</head>

<body>
	<h2>Connexion au site : </h2>
<?php
    echo Form::open(array('url' => 'connexion'));
    echo '<strong>',Form::label('nom', 'Nom :'),'</strong>';
    echo Form::text('nom');
    echo '<strong>',Form::label('password', 'Mot de passe :'),'</strong>';
    echo Form::password('password');
    echo Form::submit('Se connecter');
    echo Form::close();
?>





</body>

</html>