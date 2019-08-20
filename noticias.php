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
<html lang = "mx">
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">    
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" href="css/menu.css">
	<title>Noticias</title>
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
	

<section id="noticias">
        <div class="contenido-seccion">
            <div class="container">
                
                <h3><a href="noticias.php">
                Últimas Noticias</a></h3>
                <p class="lead">Últimas noticias al momento de los video juegos. </p>
                
                <hr>
                
                <div class="row">
                    <div class="col-sm-12">                        
                        <div>

                            <a href="marvel.php">
                                <div style="background-color: #F5F5F5;width: 100%; ">
                                <img class="card-img-top" src="img/noticias/marvel.jpg" alt="proyector" style="position: absolute;">
                                <br>
                                <div class="card-block" style="margin-left: 14rem;">
                                    <h4 class="card-title">¡Marvel Ultimate Alliance 3: The Black Order ya está disponible!</h4>
                                    <p class="card-text">El RPG de acción llegó en exclusiva para Nintendo Switch</p>
                                    <br><br><br><br><p></p><br>
                                </div>
                            </div>
                        </a>
                        <br>

                            <a href="mortal.php">
                                <div style="background-color: #F5F5F5;width: 100%; ">
                                    <img class="card-img-top" src="img/noticias/mortal.jpg" alt="tarjetas" style="position: absolute;">                                
                                <br>
                                <div class="card-block" style="margin-left: 14rem;">
                                    <h4 class="card-title">La película de Mortal Kombat tendrá un detalle en común con Deadpool</h4>                                    
                                    <p class="card-text">Greg Russo habló sobre la importancia de la trama y los personajes</p>
                                    <br><br><br><br><p></p><br>
                                </div>
                            </div>
                        </a>
                        <br>

                            <a href="nintendo.php">                            
                                <div style="background-color: #F5F5F5;width: 100%; ">
                                    <img class="card-img-top" src="img/noticias/switchNin.jpg" alt="internetvs" style="position: absolute;">
                                <br>
                                <div class="card-block" style="margin-left: 14rem;">
                                    <h4 class="card-title">¿Nintendo y Tencent se adelantaron a la aprobación del gobierno chino?</h4>
                                    <p class="card-text">Las compañías reafirmaron su alianza pero no hablaron del lanzamiento de Switch en ese país</p>
                                    <br><br><br><br><p></p><br>
                                </div>
                            </div>
                        </a>
                        <br>

                            <a href="mario.php">
                                <div style="background-color: #F5F5F5;width: 100%; ">
                                    <img class="card-img-top" src="img/noticias/mario.jpg" alt="diferencias" style="position: absolute;">
                                <br>
                                <div class="card-block" style="margin-left: 14rem;">
                                    <h4 class="card-title">Super Mario Maker 2 arrebata el trono a Fire Emblem: Three Houses en Japón</h4>
                                    <p class="card-text">Ventas de consolas disminuyeron a excepción de las de Xbox One X</p>
                                    <br><br><br><br><p></p><br>
                                </div>
                            </div>
                        </a>
                        <br>

                            <a href="border.html">
                                <div style="background-color: #F5F5F5;width: 100%; ">
                                    <img class="card-img-top" src="img/noticias/borde.jpg" alt="seguridadios" style="position: absolute;">
                                <br>
                                <div class="card-block" style="margin-left: 14rem;">
                                    <h4 class="card-title">La franquicia Borderlands ya vendió 48 millones de copia</h4>
                                    <p class="card-text">El entorno de ventas es favorable para el lanzamiento de Borderlands 3</p>         
                                    <br><br><br><br><p></p><br>
                                </div>
                            </div>
                        </a>
                        <br>

                            <a href="cyber.php">
                                <div style="background-color: #F5F5F5;width: 100%; ">
                                <img class="card-img-top" src="img/noticias/cyberpunk.jpg" alt="datosseguros" style="position: absolute;">
                                <br>
                                <div class="card-block" style="margin-left: 14rem;">
                                    <h4 class="card-title">Espera la peor hostilidad en las zonas marginadas de Cyberpunk 2077</h4>
                                    <p class="card-text">Un reporte refiere detalles interesantes sobre un suceso ocurrido en Night City de 2020 a 2077</p>
                                    <br><br><br><br><p></p><br>
                                </div>
                            </div>
                        </a>
                        <br>

                            <a href="fall.php">
                                <div style="background-color: #F5F5F5;width: 100%; ">
                                    <img class="card-img-top" src="img/noticias/fall.jpg" alt="datosseguros" style="position: absolute;">
                                <br>
                                <div class="card-block" style="margin-left: 14rem;">
                                    <h4 class="card-title">Fallout 76 recibirá un nuevo mapa para Nuclear Winter</h4><p class="card-text">La desarrolladora anunció que el modo Battle Royale que añadieron el pasado E3, Nuclear Winter, tendrá un nuevo mapa</p>
                                    <br><br><br><br><p></p><br>
                                </div>
                            </div>
                        </a>
                        <br>

                        <!-- aqqui termina el cuadro-->
                        </div>                        
                        <hr>                                          
                    </div>
                </div>                
            </div>
        </div>
    </section>    
    
    
    <footer id="footer-main">
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