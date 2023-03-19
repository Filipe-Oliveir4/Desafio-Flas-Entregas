<?php
require 'config.php';
session_start();
// Passo os inputs recebidos por variável para variáveis
$id=filter_input(INPUT_POST,'id');
$nome = filter_input(INPUT_POST,'nome');
$cpf = filter_input(INPUT_POST,'cpf');
$cep = filter_input(INPUT_POST,'cep');
$endereco = filter_input(INPUT_POST,'endereco');
$bairro = filter_input(INPUT_POST,'bairro');
$cidade = filter_input(INPUT_POST,'cidade');
$estado = filter_input(INPUT_POST,'estado');


//Executo a inserção no banco de dados
$sql=$pdo->query("UPDATE entregadores SET nome='$nome',cpf='$cpf',cep='$cep',
endereco='$endereco',bairro='$bairro',cidade='$cidade',estado='$estado' WHERE id='$id'");
//Coloco a mensagem de usuário cadastrado na sessão
$_SESSION['aviso']='Entregador atualizado';
//redireciono para o painel de controle
header("Location: painelDeControle.php");