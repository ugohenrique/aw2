<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdwel_terca";

$id = $_GET['id'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM MyGuests WHERE id=$id";
  echo "comando passado para o BD:= $sql <br>";
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the DELETE succeeded
   echo $stmt->rowCount() . " records DELETED successfully";
  
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>