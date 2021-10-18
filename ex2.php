<table border='1'>
    <tr><td>Chave</td><td>valor</td><tr>
<?php
session_start();
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
$_SESSION['usuario'] = "Ugo";
$_SESSION['logado'] = "sim";

foreach($age as $x => $val) {
  echo "<tr> <td>$x </td><td> $val</td><tr>";
}
?> 

</table>
<table border='1'>
    <tr><td>Chave</td><td>valor</td><tr>
<?php

foreach($_SERVER as $x => $val) {
  echo "<tr> <td>$x </td><td> $val</td><tr>";
}
?> 

</table>
<table border='1'>
    <tr><td>Chave</td><td>valor</td><tr>
<?php
echo 'Environmental variable';
$_ENV = getenv();
foreach($_ENV as $x => $val) {
  echo "<tr> <td>$x </td><td> $val</td><tr>";
}
?> 

</table>

</table>
<table border='1'>
    <tr><td>Chave</td><td>valor</td><tr>
<?php
echo 'SESSION variable :';
if (isset($_SESSION)){
    foreach($_SESSION as $x => $val) {
        echo "<tr> <td>$x </td><td> $val</td><tr>";
      }
}
else
    echo 'Variavel não setada';
?> 

</table>

<table border='1'>
    <tr><td>Chave</td><td>valor</td><tr>
<?php

session_abort();

echo 'SESSION variable :';
if (isset($_SESSION)){
    foreach($_SESSION as $x => $val) {
        echo "<tr> <td>$x </td><td> $val</td><tr>";
      }
}
else
    echo 'Variavel não setada';

echo 'POST variable :';
if (isset($_POST)){
    foreach($_POST as $x => $val) {
        echo "<tr> <td>$x </td><td> $val</td><tr>";
      }
}
else
    echo 'Variavel não setada';
?> 

</table>

<table border='1'>
    <tr><td>Chave</td><td>valor</td><tr>
<?php
echo 'GET variable :';
if (isset($_GET)){
    foreach($_GET as $x => $val) {
        echo "<tr> <td>$x </td><td> $val</td><tr>";
      }
}
else
    echo 'Variavel não setada';
?> 

</table>
