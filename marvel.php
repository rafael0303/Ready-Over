<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">    
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" href="css/menu.css">
	<title>Marvel Ultimate Alliance</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="tienda.html">Tienda</a></li>
            <li><a href="noticias.php">Noticias</a></li>
            <li><a href="carrito.html">Carrito</a></li>
            <li>
                <?php if(!empty($user)): ?>
                    <a href="logout.php">Bienvenido: <?= $user['email']; ?></a>
                <?php else: ?>
                    <a href="login.php">Login</a>
                <?php endif; ?>
            </li>
        </ul>
    </nav>

	<center><h2>¡Marvel Ultimate Alliance 3: The Black Order ya está disponible!</h2>
		<br>
		<img src="img/noticias/marvel1.png"></center>
		<br>
		<div>
			<blockquote>
				La espera terminó: después de casi de 10 años sin novedades, la serie Marvel Ultimate Alliance está oficialmente de vuelta. Esto gracias a que hoy se estrenó Marvel Ultimate Alliance 3: The Black Order, un juego que se hizo realidad gracias al esfuerzo de Marvel Games, Team Ninja y Nintendo.

				Por si no lo sabes, Marvel Ultimate Alliance 3: The Black Order sigue la misma línea que sus antecesores. Así pues, estamos hablando de un RPG de acción con combate estilo hack and slash que destaca por ser accesible y presentar a un montón de héroes de Marvel. Si decides vivir esta aventura, debes saber que en ella tendrás que evitar que la Black Order recupere las Gemas del Infinito para entregárselas a Thanos, en lo que podría ser una catástrofe universal.
			</blockquote>
			<blockquote>
				Ahora bien, es importante señalar que el juego base no es lo único que Marvel Ultimate Alliance 3: The Black Order tiene por ofrecer. A lo que nos referimos es que recibirá a un par de personajes como DLC gratuito. Además, contará con un Expansion Pass de pago que añadirá a héroes de Marvel Knights; X-Men y Los 4 Fantásticos.
			</blockquote>
			<center><img src="img/noticias/marvel2.png"><img width="14%"  src="img/noticias/marvel4.jpeg"></center>
			<blockquote>
				Y tú, ¿comprarás Marvel Ultimate Alliance 3? ¿Qué es lo que más te emociona de este lanzamiento?....
				Marvel Ultimate Alliance 3: The Black Order debutó hoy en exclusiva para Nintendo Switch.
			</blockquote>
			<center>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/ICDQk8kCZX0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</center>
			<br>
		</div>

	<footer id="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">                    
                    <div class="shared-panel">
                    <span>Redes sociales</span><br>
                        <a target="_blank" class="shared fb" title="Facebook"></a>    
                        <a target="_blank" class="shared tt" title="Twitter"></a>
                        <a target="_blank" class="shared gp" title="Google+"></a>
                        <a  data-action='share/whatsapp/share' class="shared wa" title="WhatsApp"></a>
                        <a target="_blank" class="shared ce" id="sml" title="Email"></a>
                    </div>


                </div>

                <div class="col-sm-3">
                    <h6>Info</h6>
                    <p>El mejor lugar para comparar y saber nuevas noticias de los videojuegos donde más que solo aqui.</p>
                </div>
            </div>
        </div>
    </footer>

    <div class="n"> 
        <a href="#" title="Ir arriba"><img alt="Ir arriba" border="0" src="img/arrow8a.png" style=position:fixed;bottom:0;right:0;/></a>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script type="js/script.js"></script>
</body>
</html>