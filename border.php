
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
    <!-- Estilo perzonalizado -->
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">    
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" href="css/menu.css">
	<title>Borderlands 3</title>
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
    
	<center><h2>La franquicia Borderlands ya vendió 48 millones de copias</h2>
		<br>
		<img src="img/noticias/border.png"></center>
		<br>
		<div>
		<blockquote>
			Para muchos juegos alcanzar el millón de copias vendidas es un gran logro y pocos son los que cuentan su éxito comercial a partir de las decenas de millones. Precisamente, este es el caso de Borderlands, franquicia de Gearbox Software y Take-Two Interactive que está por lanzar su tercera entrega bajo un contexto que se plantea como inmejorable.
		</blockquote>
		<blockquote>
			Hoy, Take-Two Interactive reveló que, como franquicia, Borderlands ya vendió 48 millones de copias desde que la primera entrega viera la luz en 2009. Asimismo, la compañía celebró el nuevo logro de Borderlands 2 al registrar ventas por 22 millones de copias luego de debutar en 2012. Gracias a la revelación de estos números, el entorno se muestra motivante para la llegada de Borderlands 3, juego que debutará el 13 de septiembre en PS4, Xbox One y PC y del que se esperan muchas cosas dada la trascendencia de la franquicia y su capacidad de mantenerse en el gusto de los jugadores por 10 años.
		</blockquote>
			<center><iframe width="560" height="315" src="https://www.youtube.com/embed/Nx03tqe2F8o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
		<blockquote>
			Tras revelar los impresionantes números de venta de Borderlands, Strauss Zelnick, director general de Take-Two Interactive, declaró a Gamesindustry.biz lo siguiente: "creo que es un reflejo del hecho de que Borderlands es más fuerte que nunca, a pesar de que han pasado 8 años desde el último lanzamiento Hay toda una nueva generación de consumidores que están muy entusiasmados con Borderlands. Eso es un buen augurio cuando nos dirigimos al lanzamiento de septiembre. Veremos cómo funciona, pero nos sentimos realmente bien".
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