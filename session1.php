<?php
    session_start(); 
    $nome = "Ana Juliana";

    $_SESSION["nome"]= $nome;
    $_SESSION["logado"]= true;
    if($_SESSION["nome"] =="Ana Julia")
        echo $_SESSION["nome"];
    else
        header('Location:.');
?>

<h1> Está logado <?php echo $_SESSION['logado'] ?> </h1>
