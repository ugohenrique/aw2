<?php
$_SESSION['prod'] = 0;
$tempo = $_POST["tempo"];
$potencia = $_POST["potencia"];
$name = $_POST["produto"];
        
//Consumo mensal de cada aparelho
$consumo_m = ($tempo * ($potencia / 1000)) * 30;


$dados = [
    "Eletrodomestico" => $name,
    "ConsumoMensal" => $consumo_m
];

$file = fopen("equipamentos.txt", "a");

fwrite($file, "Produto: ".$name);
fwrite($file, " - Consumo Mensal, em kW/h: ");

session_start();


$_SESSION['prod'] += $consumo_m;

echo "O consumo mensal total dos equipamentos é de:", $_SESSION['prod'] ," kW/h";

fwrite($file, " - Consumo Final é de:".$_SESSION['prod']."\n");

fclose($file);
$_SESSION['prod'] = 0;


?>

