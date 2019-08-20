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
	<title>Mario</title>
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


	<center><h2>Super Mario Maker 2 arrebata el trono a Fire Emblem: Three Houses en Japón</h2>
		<br>
		<img src="img/noticias/mario1.png"></center>
		<blockquote>
		Fire Emblem: Three Houses tuvo un estreno exitoso en Japón, lo cual le hizo ganar el primer lugar la semana previa en ese mercado y recobró el primer puesto para un título de Nintendo. No obstante, Super Mario Maker 2 lo desbancó y regresó como el máximo líder de ventas.
		<br>
		Hoy Famitsu (vía Gematsu) reveló la lista de software en formato físico y hardware más vendidos en Japón durante la semana que abarcó del 29 de julio al 4 de agosto. Como grande sorpresa está Super Mario Maker 2, que regresó al máximo puesto luego de perderlo en las 2 semanas previas. No obstante, la diferencia que lo distanció de Fire Emblem: Three Houses no fue mucha: sólo fueron poco menos de 700 unidades.
		</blockquote>
		<blockquote>
			Como puedes ver más abajo, debido a que no hubo un lanzamiento poderoso, la lista no tuvo nuevos exponentes. El único título debutante fue Omega Labyrinth Life (la versión de Nintendo Switch), el cual tuvo un éxito moderado y logró posicionarse en el puesto 9. Rune Factory 4 Special salió de la lista, al igual que la versión de Pro Yakyuu Spirits 2019 para PlayStation Vita, Fuera de este cambio, los demás puestos fueron ocupados por títulos recurrentes, a los cuales regresó Minecraft: Nintendo Switch Edition.
			<br><br>
			Durante esta semana no hubo cambios en las posiciones de la lista de consolas más vendidas. La diferencia está en la cantidad de sistemas distribuidos, pues todos vendieron menos, salvo Xbox One X, que la semana anterior consiguió vender 34 unidades y en esta 35.

			Sin más, te dejamos con la lista a continuación.
		</blockquote>
		<blockquote>
		<h4>VENTAS DE SOFTWARE</h4>
		<hr style="background-color: black;">
		<ul style="list-style-type: disc;">
			<li>Super Mario Maker 2 — 36,486</li>
			<li>Fire Emblem: Three Houses — 35,804</li>
			<li>Tsuri Spirits Nintendo Switch Version — 23,924</li>
			<li>Pro Yakyuu Spirits 2019 (PlayStation 4) — 14,371</li>
			<li>Super Smash Bros. Ultimate — 9,947</li>
			<li>Mario Kart 8 Deluxe — 8,994</li>
			<li>Olympic Games Tokyo 2020: The Official Video Game — 8,311</li>
			<li>Minecraft: Nintendo Switch Edition (PlayStation Vita) — 7,634</li>
			<li>Omega Labyrinth Life — 6,643</li>
			<li>Jikkyou Powerful Pro Yakyuu — 6,339</li>		
		</ul>
		<h4>VENTAS DE HARDWARE</h4>
		<hr style="background-color: black;">
		<ul style="list-style-type: disc;">
			<li>Nintendo Switch — 36,613</li>
			<li>PlayStation 4 — 6028</li>
			<li>PlayStation 4 Pro — 4026</li>
			<li>New Nintendo 2DS LL — 2311</li>
			<li>New Nintendo 3DS LL — 299</li>
			<li>PlayStation Vita — 115</li>
			<li>Xbox One X — 35</li>
			<li>Xbox One S — 13</li>
		</ul>
		</blockquote>
		<blockquote>
			Y tú, ¿qué opinas sobre el desempeño de los juegos exclusivos de Nintendo Switch? ¿Esperabas que Fire Emblem: Three Houses conservara más tiempo el liderato? 
			<br><br>
			En noticias relacionadas, aunque la nueva entrega de la serie RPG de Nintendo vendió muy bien durante su lanzamiento en varias partes del mundo, no logró llegar al primer puesto en la región EMEAA.
		</blockquote>
		<center><iframe width="560" height="315" src="https://www.youtube.com/embed/HrTZIzLZ8hU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center><br>

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