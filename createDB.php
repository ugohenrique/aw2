<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  // 1o passo: Criar a conexão
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
 
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  //2o passo: passar comandos para o banco e pedir para executar
  $sql = "CREATE DATABASE pdwel_terca";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Database created successfully<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

//3o passo : encerrar a conexão
$conn = null;
?>