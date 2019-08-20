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
	<title>Fallout 76</title>
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

    
	<center><h2>Fallout 76 recibirá un nuevo mapa para Nuclear Winter</h2>
		<br>
		<img src="img/noticias/map.png"></center>
		<br>
		<div>
		<blockquote>
			Como seguramente sabrás, este fin de semana se lleva a cabo QuakeCon 2019 y Bethesda está aprovechando para dar a conocer muchas novedades de sus próximos proyectos. Algunas estuvieron relacionadas con Fallout 76, pues revelaron que mucho contenido llegará al juego multijugador en línea durante los próximos meses.
			Por medio del espacio destinado para Fallout 76 (vía Kotaku), la desarrolladora anunció que el modo Battle Royale que añadieron el pasado E3, Nuclear Winter, tendrá un nuevo mapa en septiembre, el cual, a comparación del habitual, presentará un entorno más civilizado, pues estará basado en Morgantown.
			En cuanto al modo original, los desarrolladores revelaron una nueva incursión que tendrá lugar en la Bóveda 94. Este evento tendrá misiones semanales y podrán participar grupos de 4 personas para conseguir recompensas de armadura y otras relacionadas al componente social. Para elevar la emoción de los jugadores, Bethesda adelantó que ya trabajan en una incursión más, pero no detallaron más al respecto.
		</blockquote>
		<blockquote>
			Como te mencionamos semanas atrás, Bethesda sigue comprometido con el título y parte del contenido adicional que llegaría gratis incluye la actualización Wastelanders, con la cual los usuarios podrían interactuar narrativamente con personajes NPC. Esta actualización estará disponible en noviembre. Bethesda también actualizó los planes que tienen programados para lo que resta del verano y mencionó que pronto será posible organizar partidas privadas con tus amigos, aunque no especificó alguna fecha.
		</blockquote>
	</div>
	
	<center>
		<img src="img/noticias/map1.jpg">
	</center>
	<center>
		<img width="70%" src="img/noticias/map2.jpg">
	</center>
	<p>Otra noticia positiva para los usuarios de Fallout 76 es que recientemente Bethesda distribuyó las bolsas de la edición de colección del título con la calidad prometida. Aunado a esto, la desarrolladora aseguró que dejar sin soporte a Fallout 76 nunca fue una opción.</p>

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