
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo conta bancaria get e set</title>
</head>
<body>
<h2>Formulário da conta Bancaria</h2>
<form action="" method="post">
    Depósito: <input type="number" name="deposito" step="0.01"><br><br>
    Sacar: <input type="number" name="sacar" step="0.01"><br><br>
    <input type="submit" value="Enviar">
 
</form>
    
</body>
</html>
 
<?php

require 'ContaBancaria.php';
 
$conta = new ContaBancaria();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //verifica se foi informado um valor para depósito
    if(!empty($_POST['deposito'])){
       $conta->depositar(floatval($_POST['deposito'])); 
    } 
 
    //verifica se foi informado um valor para sacar
    if(!empty($_POST['sacar'])){
        $conta->sacar(floatval($_POST['sacar']));
    }
}
echo "<h3>Saldo Atual</h3>";
echo "O saldo atual da conta é R$".number_format($conta->getSaldo
(),2,',','.')."<br>";
 
 
?>