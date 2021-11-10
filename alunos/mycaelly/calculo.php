<?php

$aparelho = $_POST['aparelho'];
$qtd_watts = $_POST['qtd_watts'];
$qtd_horas = $_POST['qtd_horas'];
$qtd_dias = $_POST['qtd_dias'];

$array = [$aparelho , $qtd_watts, $qtd_horas, $qtd_dias];

$consumo = ($qtd_watts * $qtd_horas) * $qtd_dias;
$consumoKW = $consumo / 1000;

if (isset($_GET["submit"])){
}

$fp = fopen("arquivo.txt","wb");
fwrite($fp,$_POST["aparelho"]." consome ".$consumoKW.' Kw/h');
fclose($fp);

//echo 'O consumo do equipamento ' . $aparelho . ' é de '. $consumoKW . ' kilowatts por mês'. '<br>';   
    ?>
   