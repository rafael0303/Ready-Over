<?php

  header("Content-Type: text/html;charset=utf-8");
  require 'database.php';

  $message = '';

  if (!empty($_POST['nombre']) && !empty($_POST['password']) && !empty($_POST['email']) 
        && !empty($_POST['numTarjeta']) && !empty($_POST['pais']) && !empty($_POST['estado']) 
        && !empty($_POST['ciudad']) && !empty($_POST['cp']) && !empty($_POST['direccion'])) {
    $sql = "INSERT INTO users (name, password, email, country, state, city, address, card, postal_code) VALUES (:nombre, :password, :email, :pais, :estado, :ciudad, :direccion, :numTarjeta, :cp)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':numTarjeta', $_POST['numTarjeta']);
    $stmt->bindParam(':pais', $_POST['pais']);
    $stmt->bindParam(':estado', $_POST['estado']);
    $stmt->bindParam(':ciudad', $_POST['ciudad']);
    $stmt->bindParam(':cp', $_POST['cp']);
    $stmt->bindParam(':direccion', $_POST['direccion']);

    if ($stmt->execute()) {
      $message = 'Nuevo usuario creado!';
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear su cuenta';
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Estilo perzonalizado -->
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/registro.css">    
    <link rel="stylesheet" type="text/css" href="css/normalize.css"> 
    <link rel="stylesheet" href="css/menu.css">   
    <title>Registro</title>
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

    <center>
        <?php if(!empty($message)): ?>
          <p> <?= $message ?></p>
        <?php endif; ?>
    </center>

    <div class="box-login">
        <form action="registro.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombre">Nombre completo</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo">
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                </div>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Correo electronico">
            </div>
            <div class="form-group">
                <label for="numTarjeta">Numero tarjeta de credito</label>
                <input type="text" class="form-control" id="numTarjeta" name="numTarjeta">
            </div>
            <div class="form-group">
                <label for="pais">País</label>
                <input type="text" class="form-control" id="pais" name="pais" placeholder="Pais">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad"> 
                </div>
                <div class="form-group col-md-6">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ciudad">Código postal</label>
                    <input type="number" class="form-control" id="cp" name="cp" placeholder="Código postal"> 
                </div>
                <div class="form-group col-md-6">
                    <label for="birthday">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" data-date-format="DD/MM/YYYY">
                </div>
            </div>

            <div class="form-group">
                <label for="direccion">Dirección</label>
                <textarea class="form-control" aria-label="With textarea"  id="direccion" name="direccion"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>

        </form>
        
        <br>

    </div>

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
                    <ul class="list-unstyled">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="informacion.php">Información</a></li>
                        <li><a href="tienda.php">Tienda</a></li>
                        <li><a href="noticias.php">Noticias</a></li>
                        <li><a href="proximos.php">Proximos</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
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