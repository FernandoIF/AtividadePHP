<?php
   
   $id = $_POST["id"];
   $name = $_POST["name"];
   $data_nascimento = $_POST["birth"];
   $date = $_POST["date"];
   $matter = $_POST["matter"];

   $connection = new mysqli("localhost", "root", "vertrigo", "atividade03");

   if($id == 0) {
        $sql = $connection->prepare("INSERT INTO cadastro (nome, data_nascimento, ano_curso, materia_preferida) VALUES(?, ?, ?, ?)");
        $sql->bind_param("ssis", $name, $data_nascimento, $date, $matter);
   } else {
       $sql = $connection->prepare("UPDATE cadastro SET nome = ?, data_nascimento = ?, ano_curso = ?, materia_preferida = ? WHERE id = ?");
       $sql->bind_param("ssis", $name, $data_nascimento, $date, $matter);
   }

   $sql->execute();

   mysqli_close($connection);

   header("location: index.php");
?>