<!DOCTYPE html>
<html lang="pt-br">
<head>						
		<title>Calculando Consumo</title>
		<meta charset="utf-8">			
</head>							
<body>											

<form method="post"> 
 
  
 Hora: <input type="number" name="hora" value=""> 
Watt: <input type="number" name="watt" value="">
Equipamentos: <input type="text" name="aparelho" value="">
  

     <input type="submit" name="submit" value="Submit">  
</form>
<?php

    if(!empty($_POST['aparelho'])){
        
        
        $y = $_POST['hora'];
        $x= $_POST['watt'];
        $total = $x*$y;
        $v = $total*5;
    
        echo "<hr>";
        echo "gasto:";
        print_r( $total); echo "Kw/H";
        echo "<hr>";
        echo "consumo no mes: ";  print_r( $v); " Kw/H";
       

        $equipa = $_POST['aparelho'];
        print_r( $equipa);

    

        $fo= fopen('prova.txt', 'teste');

        fwrite($fo, var_export("Eletrodomesticos: ", true));

        fwrite($fo, var_export("gasto: ", true));

        fwrite($fo, var_export($equipa, true));

        fwrite($fo, var_export("Consumo no mes:", true));

        fwrite($fo, var_export($total, true));
       
        fwrite($fo, var_export($v, true));      
        fclose($fo);        
}
 else{
        echo 'preencha os campos';
    }
</form>
?>
</body>							
</html>
