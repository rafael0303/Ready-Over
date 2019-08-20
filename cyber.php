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
	<title>Cyberpunk 2077</title>
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


	<center><h2>Espera la peor hostilidad en las zonas marginadas de Cyberpunk 2077</h2>
		<br>
		<img src="img/noticias/cyber.png"></center>
		<br>
		<div>
			<blockquote>
				Como todo obra del género Cyberpunk, el nuevo título de CD Projekt RED presentará este mundo del futuro donde el desarrollo tecnológico, controlado por las corporaciones, no tuvo impacto en la brecha de desigualdad existente en Night City. De ahí que Cyberpunk 2077 presente un entorno lleno de contradicciones y una sociedad a punto del colapso. La temática, sin duda, ha generado un hype impresionante y la riqueza en detalles que se espera del estudio polaco, también. Es por eso que cualquier revelación sobre el juego capta la atención y recientemente se publicaron algunos detalles interesantes.
			</blockquote>
			<blockquote>
				De acuerdo con un reporte de DSOG, el reciente número de la revista polaca PSX EXTREME reveló detalles sobre Cyberpunk 2077 que ya están aumentando la expectativa por el título que verá la luz el 16 de abril de 2020. Para comenzar y tomando en cuenta que podría o no presentarse un error de traducción, hay información que indica el trabajo del estudio polaco para dotar a Cyberpunk 2077 con un modo New Game Plus, por lo que, en caso de que sea así, habría que sumar el factor rejugabilidad al esperado título de CD Projekt RED. En ese sentido, la implementación de un modo New Game Plus confirmaría las declaraciones de Pavel Sasko, diseñador de misiones de Cyberpunk 2077, quien insinuó la posibilidad de ofrecer esta opción para los jugadores.
			</blockquote>
			<blockquote>
				Dicho esto, el reporte ahondó en los detalles sobre el entorno que priva en Night City y las posibilidades de interacción de Cyberpunk 2077. Al respecto, la información señala que las zonas marginadas serán territorio bastante hostil y los grupos sociales que ahí habitan, Wraights y Aldecados, están en conflicto constante. De inicio, la comunicación y posibilidad de relación con los Aldecados será más sencilla, situación contraria a los Wraights, quienes condenan la presencia de extraños en su territorio. Asimismo, la información indica que habrá mucha interacción con los NPC y esta puede dar lugar a situaciones de simple cordialidad, amistad e incluso relaciones de pareja.
			</blockquote>
			<blockquote>
				Por otra parte, la presencia de flora y fauna es mínima en Night City, incluso en las afueras, pues la sobreexplotación de los recursos y la contaminación generada en pro del desarrollo tecnológico han resultado en la desaparición de la mayoría de las especies. Curiosamente, la presencia de plantas y mascotas es algo que podrá verse en las zonas acaudaladas de Cyberpunk 2077.
			</blockquote>
			<center><iframe width="560" height="315" src="https://www.youtube.com/embed/vjF9GgrY9c0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
			<blockquote>
				Otro de los detalles que llama la atención es la historia que tuvo lugar en Night City en el periodo que abarca de 2020 a 2077, cuando el ciberespacio fue hackeado a partir de un sistema operativo alterno, lo cual llevó a las corporaciones a crear un muro virtual "Blackwall" que divide la parte que fue hackeada, la cual se convirtió en una especie de Deep Web, del resto de la infraestructura informática. De acuerdo con el reporte, algunos hackers han tratado de ingresar en ese ciberespacio burlando la seguridad del muro, pero ninguno ha regresado con vida.
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