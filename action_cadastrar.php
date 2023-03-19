<?php
require 'config.php';
session_start();
// Passo os inputs recebidos por variável para variáveis
$nome = filter_input(INPUT_POST,'nome');
$cpf = filter_input(INPUT_POST,'cpf');
$cep = filter_input(INPUT_POST,'cep');
$endereco = filter_input(INPUT_POST,'endereco');
$bairro = filter_input(INPUT_POST,'bairro');
$cidade = filter_input(INPUT_POST,'cidade');
$estado = filter_input(INPUT_POST,'estado');
//Executo a inserção no banco de dados
$pdo->query("INSERT INTO `entregadores`( `nome`, `cpf`, `cep`, `endereco`, `bairro`, `cidade`, `estado`) VALUES 
('$nome','$cpf','$cep','$endereco','$bairro','$cidade','$estado')");
//Coloco a mensagem de usuário cadastrado na sessão
$_SESSION['aviso']='Entregador cadastrado';
//redireciono para o index
header("Location: conclusaoCadastro.php");