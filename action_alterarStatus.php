<?php
require 'config.php';
$id = filter_input(INPUT_GET,'id');
$lista=[];
//Resgato do banco de dados  as informações do entregador que sera feita a alteração
$sql = $pdo->query("SELECT * FROM entregadores  WHERE id='$id'" );
$lista=$sql->fetchAll(PDO::FETCH_ASSOC);
//Verifico o status atual e modifico para a negação dele
if($lista[0]['status']=="Em andamento"){
    $sql=$pdo->query("UPDATE entregadores SET status='Concluido' WHERE id='$id'");
}else{
    $sql=$pdo->query("UPDATE entregadores SET status='Em andamento' WHERE id='$id'");
}
//Redireciono para o painel de control
header("Location: painelDeControle.php");