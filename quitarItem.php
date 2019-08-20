<?php

    include('Connection.php');

    $id = $_POST['id'];

    $query = "DELETE FROM shopping_cart WHERE id = $id";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die('Query Failed');
    }

    echo 'Correcto';
?>