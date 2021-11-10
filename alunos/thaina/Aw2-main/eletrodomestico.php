
<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  //$name = $_REQUEST['fname']; 
  //if (empty($name)) {
  //  echo "Name is empty"; 
  //} else {
    //echo $name;
  //}
//} 
$parelho= $_POST['aparelho'];
$qtd_watts= $_POST['qtd_watts'];
$qtd_horas= $_POST['qtd_horas'];
$qtd_dias= $_POST['qtd_dias'];
$array= [$aparelho, $qtd_watts, $qtd_horas, $qtd_dias];
$consumo= ($qtd_watts * $qtd_horas) * $qtd_dias;
$consumoKW= $consumo/1000;
echo 'O consumo de equipamentos'. $aparelho. 'é de'.$consumoKW. 'kilowatts por mes'.
'<br>';
if(isset($_GET["enviar"])){

}  
$fp=fopen("novo.txt","wb"); 
fwrite($fp,$_GET["equipamento"]." consome ".$consumoMensalemKW.' KW/h');
fclose($fp);

?>

</body>
</html>