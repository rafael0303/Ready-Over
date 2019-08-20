<?php

    include('Connection.php');

    $cant = $_POST['num'];
    $idCampo = $_POST['id'];
    $precio = $_POST['precio'];
    $subTotal = $cant * $precio;
    if(!empty($cant) && !empty($idCampo)){

        $query = "UPDATE shopping_cart SET quantity = $cant, sub_total = $cant * unit_price WHERE id = $idCampo";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die('Query Failed ' . mysqli_error($conn));
        }

        echo 'exito';
    }

?>