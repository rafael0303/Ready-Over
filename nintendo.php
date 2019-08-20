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
	<title>Nintendo</title>
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

	<center><h2>¿Nintendo y Tencent se adelantaron a la aprobación del gobierno chino?</h2>
		<br>
		<img src="img/noticias/nintendo.png"></center>
		<br>
		<div>
			<blockquote>
				Las compañías de videojuegos saben que el mercado chino, por más atractivo que sea, es terreno complicado en materia de modelos de negocio pues el capitalismo de Estado aplicado por el gobierno de ese país regula todas las actividades comerciales y los trámites burocráticos son la norma. Aunque la alianza entre Nintendo y Tencent para llevar Switch a China parece avanzar con paso firme, se sabe que todo podría caerse en cualquier momento y la reciente presentación de ambas compañías en ChinaJoy 2019 dejó entrever algunas situaciones.
				<br><br>
				Luego de que Nintendo y Tencent revelaran que estarían presentes en el evento China Digital Entertainment Expo & Conference 2019, mejor conocido como ChinaJoy, las especulaciones en torno a lo que se presentaría ahí no tardaron en llegar y la expectativa, obviamente, fue que el anuncio de la llegada de Switch a territorio chino era inminente. 
			</blockquote>
			<blockquote>
				Sin embargo, el momento llegó ayer y las compañías hicieron acto de presencia, pero solo revelaron algunos detalles y no hubo información sobre fecha de lanzamiento, ni precio. En ese sentido, el analista de Niko Partners, Daniel Ahmad, compartió los puntos más importantes de la presentación de Nintendo y Tencent en ChinaJoy 2019, donde ambas compañías reafirmaron su alianza y anunciaron que las operaciones de adquisición de contenido en Switch podrán usar el método de pago de WeChat. Asimismo, Nintendo y Tencent señalaron que habrá soporte para la eshop y se optimizarán servidores para su funcionamiento y confirmaron que están trabajando para localizar los juegos de la consola híbrida para el mercado chino.
				<br><br>
				Sin embargo, la lectura que Daniel Ahmad dio a la presentación fue que la aprobación de Switch en China no es un hecho consumado y, en dado caso, no se puede tomar lo que sucedió en ChinaJoy como la confirmación de que la consola llegará al mercado.
			</blockquote>
			<center><img src="img/noticias/nintendo2.png"></center>
			<blockquote>
				Asimismo, parece que Nintendo y Tencent están seguros de su posición en este momento y llevaron estaciones de juego a la zona de exposición de ChinaJoy, tal como lo reveló un reporte de Abacus, donde los asistentes pudieron probar Switch y juegos como: The Legend of Zelda: Breath of the Wild, Mario Kart 8 Deluxe, Super Mario Odyssey y Pokémon: Let’s Go Pikachu! & Let´s Go Eevee!.
			</blockquote>
			<center><img src="img/noticias/nintendo3.png"></center>
			<blockquote>
				Así pues, parece que todavía hay camino por recorrer para Nintendo y Tencent en su objetivo de llevar Switch al mercado más importante del mundo.
			</blockquote>
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