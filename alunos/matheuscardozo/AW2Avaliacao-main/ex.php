<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>AW2</title>
  <meta charset="UTF-8">
</head>

<main>
  <body>

    <form name='form' id='web_form' method='post' action='ex.php'>
        <input type='text' name='nome' id='msgg' placeholder='Nome do aparelho'>
        <input type='number' name='consumo' id='consumoo' step=0.01 placeholder='Consumo em Watts por Hora'>
        <input type='number' name='horas' id='horass' step=0.01 placeholder='Horas ligadas por dia'>
        <input type='submit' id='add' value='Adicionar'>
    </form>
  </body>
</main>

</html>

<?php

$aparelho = $_POST['nome'];
$consumo = $_POST['consumo'];
$horas = $_POST['horas'];
$mensagem = '';

if(isset($aparelho)&&$aparelho!=''){
  $consumo = $consumo/1000;

  $consumototal = ($consumo*$horas)*30;

  $mensagem = $mensagem . 'Consumo mensal ' . $aparelho . ': ' . $consumototal . ' kW';

  $fp = fopen('mensagem.txt', 'a');
  fwrite($fp, $mensagem . "\n");
  fclose($fp);
}

?>