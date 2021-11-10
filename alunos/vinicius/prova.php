<!\\Vinícius Manarin T-431//>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title> AW2 - Aplicação </title>
</head>

<body>
    <form method="get" action="Aplicação_cálculo_mensal.php"> 
    <h1> Cálculo de consumo de energia mensal de eletro-eletrônicos: </h1>

<div>Entre com o nome do aparelho que deseja calcular o consumo: <input type="text" name="aparelho" ></div>
<div> Entre com o consumo em Watts/hora: <input type="number" name="consumo" ></div>
<div> Entre com a qtd de horas diárias de uso: <input type="number" name="qtd_hours" ></div>
<div>Entre com a qtd de dias de uso: <input type="number" name="qtd_days" ></div>
<br><br>
        <input type="submit" name="calcular" value="Calcular"><br><br>
        <input type="submit" name="add" value="Adicionar novo aparelho">
    </form>

   <script>
    function addAparelho(){
        var aparelho = prompt("Entre com o nome do novo aparelho eletrônico que deseja adicionar.);
        if (aparelho == "" || aparelho == null) {
            alert("Prompt cancelled");
        } else {
            var aparelhos = document.getElementById("aparelhos");
            var option = document.createElement("option");
            option.text = aparelho;
            aparelhos.add(option, aparelhos[0]);
        }
    }
</script>

</body>
</html>

<?php

$aparelho = $_GET['aparelho'];
$consumo = $_GET['consumo'];
$qtd_horas = $_GET['qtd_hours'];
$qtd_dias = $_GET[' qtd_days'];

$consumoWatts = ($consumo * $qtd_horas) * $qtd_dias;
$consumoKW = $consumoWatts / 1000;

if (isset($_GET["calcular"])){
echo  $aparelho . ' consome mensalmente o total de: '. $consumoKW . ' Kw/h'. '<br>';   
}

$fp = fopen("cálculo energia.txt","wb");
fwrite($fp,$_GET["aparelho:"]." O aparelho indicado consome mensalmente o total de: ". $consumoKW.' Kw/h');
fclose($fp);

?>
