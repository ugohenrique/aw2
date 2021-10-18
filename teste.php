<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Equipamento: <input type="text" name="aparelho[]" value="">
  Equipamento: <input type="text" name="aparelho[]" value="">
  Equipamento: <input type="text" name="aparelho[]" value="">
  <input type="submit" name="submit" value="Submit">  
</form>
<?php

    if(!empty($_POST['aparelho'])){
        $equipa = $_POST['aparelho'];
        var_dump( $equipa);
    }
    else{
        echo 'preencha os campos';
    }

?>