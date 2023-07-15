<?php
    include("database/db.php");

    $id= $_GET['id'];
    $query= "SELECT imagen FROM task where id=$id";
    $result_task = mysqli_query($conn, $query);

    $img_data= mysqli_fetch_assoc($result_task);
    header("Content-type: image/jpg");

    echo $img_data['imagen'];
?>