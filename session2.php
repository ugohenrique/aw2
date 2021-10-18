<?php
    session_start();
   if($_SESSION['logado']==true)
    echo "ok pode acessar";
   else
    echo "Não está logado. Você não pode acessar essa página diretamente"; 
?>