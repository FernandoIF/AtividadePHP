<?php 

    $id = $_GET["id"];

    $connection = new mysqli("localhost", "root", "vertrigo", "atividade03");

    $sql = $connection->prepare("DELETE FROM cadastro WHERE id = ?");

    $sql->bind_param("i", $id);

    $sql->execute();

    mysqli_close();

    header("location: index.php");

?>