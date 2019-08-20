<?php

    include('Connection.php');

    $id = $_POST['user'];

    if(!empty($id)){

        $query = "SELECT id, id_user, title_game, image_game, unit_price, quantity, sub_total FROM shopping_cart WHERE id_user = $id";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die('Query Failed ' . mysqli_error($conn));
        }

        $json = array();
        while($row = mysqli_fetch_array($result)){
            $json[] = array(
                'id' => $row['id'],
                'id_user' => $row['id_user'],
                'image_game' => $row['image_game'],
                'title_game' => $row['title_game'],
                'unit_price' => $row['unit_price'],
                'quantity' => $row['quantity'],
                'sub_total' => $row['sub_total']
            );

        }

        $jsonString = json_encode($json);
        echo $jsonString;
    }
?>