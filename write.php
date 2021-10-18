<?php 
    //pega os dados da pagina 
    $texto = $_POST['texto'];
    if (isset($texto))
    echo 'já foi setada pelo menos uma vez';
    //cria um descritor de arquivo
    $myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
    fwrite($myfile, md5($texto));
    fwrite($myfile, "\n");
    fclose($myfile);
    echo 'letra gerada pelo codigo ASCII 65 ' . chr(65) . '<br>';
    echo($texto . " gravado<br>");
    echo '<hr>';
    for ($i = 65; $i <=90;$i++)
        echo chr($i) . '&nbsp;' . $i . '&nbsp;' . chr($i+32) . '&nbsp;' . $i+32;
    echo '<br>';
    echo("<script type='text/javascript'>alert('Feito');</script>");
    //header('Location: write.html');
?>