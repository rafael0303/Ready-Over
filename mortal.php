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
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">    
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" href="css/menu.css">
	<title>Mortal Kombat</title>
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

	<center><h2>La película de Mortal Kombat tendrá un detalle en común con Deadpool</h2>
		<br>
		<img src="img/noticias/kombat.jpg"></center>
		<br>
		<div>
			<blockquote>
				Si bien el proceso creativo y de producción de la película de Mortal Kombat ha tardado muchos años, actualmente sabemos que hay una luz al final del túnel y será en 2021 cuando el filme se estrene en la pantalla grande. Esta situación ha permitido que aquellas personas vinculadas con la película puedan revelar más detalles y recientemente el responsable del guion habló sobre la influencia que la película de Deadpool tiene en el proceso creativo.</blockquote>

				<blockquote>
				Durante una entrevista con Comic Book, Greg Russo, guionista de la película de Mortal Kombat, habló sobre la importancia que tendrán la historia y los personajes más allá del contenido polémico y escandaloso que resaltará en pantalla, el cual obedece a la esencia de la franquicia. En ese sentido, el creativo señaló que el objetivo es alcanzar el equilibrio: "queríamos ser sinceros con el tono del juego. Entonces, si jugaste las entregas, hay situaciones serias, hay emoción detrás de lo que están pasando los personajes, pero al mismo tiempo, es algo realmente divertido. Mortal Kombat siempre ha sido muy irónico en cuanto a la forma de tratar la violencia exagerada o simplemente respecto a algunas ideas locas de la historia que se les ocurren. Quiero decir que siempre ha habido este tipo de naturaleza divertida".
			</blockquote>

			<center>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/4ANaKFnOOjk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</center>
			<blockquote>
				En ese sentido, Russo señaló que la mayor influencia que han tenido para abordar el tono que quieren dar a la película de Mortal Kombat está en la película de Deadpool: "miramos los juegos y luego también vimos algunas propuestas de películas para comparar nuestro tono. Ahí aparecieron propuestas como Deadpool y pensamos que realmente nos gusta su tono. Ya sabes, tiene un gran humor, pero si le quitas el humor, tiene personajes reales, como situaciones realmente emocionales detrás de lo que están pasando los personajes".
			</blockquote>
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