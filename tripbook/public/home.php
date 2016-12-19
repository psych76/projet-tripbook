<!DOCTYPE HTML>
<html>

<head>
        <title>TripBook</title>
        <meta charset="utf-8">
        <meta name="description" content="165c. uniques">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <script type="text/javascript" src="jquery-3.1.1.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){  
            $("a").click(function(){   
            page=($(this).attr("href")); 
            $.ajax({ 
            url: page, 
            cache: false, 
            success:function(html){
            afficher(html);     
            },
            error:function(XMLHttpRequest, textStatus, errorThrows){ 
            }
            });
            return false; 
            });
            });function afficher(donnees){ 
            $("#contenu").empty(); 
            $("#contenu").append(donnees); 
            }
        </script>
</head>

<body>

    <section>
        <header>
            TripBook
        </header>
        <article>
            <div id="contenu">
                AFFICHAGE DE LA MAP
            </div>
        </article>
        <footer>
      
            <div class="boutonfooter"><a href="galerie.php"><img src="images/galerie.png" width="90" height="100%" alt="galerie" /></a></div>
        
            <div class="boutonfooter"><a href="home.php"><img src="images/map.png" width="90" height="100%" alt="carte" /></a></div>
        
            <div class="boutonfooter"><a href="livre.php"><img src="images/livre.png" width="90" height="100%" alt="livre" /></a></div>   
        
        </footer>
    </section>
</body>
</html>