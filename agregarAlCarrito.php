<?php

    include('Connection.php');

    if(isset($_POST['id'])){
        $idGame = $_POST['id'];
        $imageGame = $_POST['imagen'];
        $titleGame = $_POST['titulo'];
        $idUser = $_POST['usuario'];
        $unitPrice = $_POST['precioUnitario'];
        

        $query = "INSERT INTO shopping_cart(id_videogame, title_game, image_game, id_user, quantity, sub_total, unit_price) VALUES('$idGame', '$titleGame', '$imageGame', '$idUser', 1, $unitPrice, $unitPrice)";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die('Query Failed');
        }

        echo 'Correcto';
    }
?>