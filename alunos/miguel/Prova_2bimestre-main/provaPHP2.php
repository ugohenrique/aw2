<?php
$nome = $_GET["nome"];
$Watts = $_GET ["consumo"];
$Horas = $_GET ["horas"];
$Total = 0;
$Mensal = 0;
$Casa = 0;

$Total = ($Watts * $Horas)/1000;
$Mensal = ($Total * 30);
$Casa = $Mensal;

echo "Nome: $nome ||" ;
echo " Quantos watts usa por hora $Watts || ";
echo " Horas que ficara ligado $Horas ||";
echo " Kw/H é $Total ||";
echo " o calculo mensal em Kw/h é de $Mensal||";
echo " O custo mensal de Casa é de $Casa Kw/H"
?>


