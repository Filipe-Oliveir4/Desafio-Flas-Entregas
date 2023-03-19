<?php
require 'config.php';
//Pego o id pelo get 
$id = filter_input(INPUT_GET,'id');
//Executo a query para deletar o entregador pelo ID
$sql = $pdo->query("DELETE FROM entregadores WHERE `entregadores`.`id` = $id" );

//Redireciono para o painel de csontrol
header("Location: painelDeControle.php");