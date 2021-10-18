<?php

    $aparelho = $_POST['aparelho'];
    $potencia = $_POST['potencia'];
    $tempo = $_POST['tempo'];
    $m = array('aparelho'=> $aparelho, 'potencia' => $potencia, 'tempo' => $tempo);
    
    $consumo = array();
    $total = 0;
    $myfile = fopen("consumo.csv", "a+") or die("Unable to open file!");
    
    for($i = 0 ; $i < count($aparelho);$i++){
        $consumo[$i] = $potencia[$i] * 30;
        $total = $total + $consumo[$i];
        echo "<div><span> $aparelho[$i] </span> <span>$potencia[$i]</span><span>$tempo[$i]</span></div>";

        fwrite($myfile, $aparelho[$i] . ',' . $potencia[$i] . ',' . $consumo[$i] );
        fwrite($myfile, "\n");
    }
    fclose($myfile);
   
    
    echo "Total consumido " . $total/1000 . " kw";


?>