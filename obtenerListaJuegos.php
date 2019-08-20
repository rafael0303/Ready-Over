<?php

    include('Connection.php');

    $id = $_POST['id'];

    if(!empty($id)){
        
        $query = "SELECT id, title, image, price, developer, release_date FROM videogames WHERE id = '$id'";

        $result = mysqli_query($conn, $query);
        
        if(!$result){
            die('Query Error '.mysqli_error($conn));
        }

        $json = array();

        while($row = mysqli_fetch_array($result)){
            $json[] = array(
                'id' => $row['id'],
                'title' => $row['title'],
                'image' => $row['image'],
                'price' => $row['price'],
                'developer' => $row['developer'],
                'release_date' => $row['release_date']
            );
        }

        $jsonString = json_encode($json);
        echo $jsonString;
    }
?>