<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdwel_terca";

$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$email = $_GET['email'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('$nome' , '$sobrenome' ,  '$email')";
  // use exec() because no results are returned
  echo $sql . '<br>';
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>