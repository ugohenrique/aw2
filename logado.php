<?php
    session_start(); 
    if(isset($SESSION['logado']) && $_SESSION['logado']==true){
        echo 'ta logado';
    }
    else
    {
        header('Location:login.html');
        exit(1);
    }

?>

<h1> Está logado <?php echo $_SESSION['logado'] ?> </h1>
