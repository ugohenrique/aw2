<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Prova AW2 Izabella</title>
  <meta charset="UTF-8">
</head>

<main>
  <body>

    <form name='form' id='web_form' method='post' action='prova.php'>
        <input type='text' name='aparelho' placeholder='Insira o nome do aparelho'>
        <input type='number' name='consumo' placeholder='Insira o consumo do aparelho em Watts por Hora'>
        <input type='number' name='horas' placeholder='Insira a quantidade de horas que o aparelho fica ligado por dia'>
        <input type='submit' value='Adicionar'>
    </form>
  </body>
</main>

</html>

<?php

$aparelho = $_POST['aparelho'];
$consumo = $_POST['consumo'];
$horas = $_POST['horas'];
$aparelhos = '';

if(isset($aparelho)){
  $consumo = $consumo/1000;

  $consumomensal = ($consumo*$horas)*30;

  $aparelhos = 'Consumo mensal do Aparelho ' . $aparelho . ' é igual a ' . $consumomensal . ' kW';

  $fp = fopen('aparelhos.txt', 'a');
  fwrite($fp, $aparelhos . "\n");
  fclose($fp);
}

?>