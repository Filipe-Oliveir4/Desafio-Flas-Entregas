<?php  
require 'config.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Entrega</title>
	<meta charset="utf-8">
	<<link rel="stylesheet" href="estilo.css">
</head>
<body>
<?php
$id = filter_input(INPUT_GET,'id');
$lista=[];
//Resgato do banco de dados  as informações do entregador que sera feita a alteração
$sql = $pdo->query("SELECT * FROM entregadores  WHERE id='$id'" );
$lista=$sql->fetchAll(PDO::FETCH_ASSOC);
?> 
	<!-- Coloco o mesmo formulário do cadastro, com os input preenchidos  -->
	<img src="flash-logo.png" alt="Logo da Empresa">
	<form method="POST" action="action_alterarCadastro.php">
        <label for="id">ID:</label>
		<input  id="id" type="text" name="id" required value="<?php echo $lista[0]['id'];?>">


		<label for="nome">Nome do Entregador:</label>
		<input type="text" id="nome" name="nome" required value="<?php echo $lista[0]['nome'];?>">

		<label for="cpf">CPF:</label>
		<input type="text" id="cpf" name="cpf" required value="<?php echo $lista[0]['cpf'];?>">

		<label for="cep">CEP:</label>
		<input type="text" id="cep" name="cep" required value="<?php echo $lista[0]['cep'];?>">
        
        <label for="endereco">Endereço:</label>
		<input type="text" id="endereco" name="endereco" required value="<?php echo $lista[0]['endereco'];?>">

		<label for="bairro">Bairro:</label>
		<input type="text" id="bairro" name="bairro" required value="<?php echo $lista[0]['bairro'];?>">
		
		<label for="cidade">Cidade:</label>
		<input type="text" id="cidade" name="cidade" required value="<?php echo $lista[0]['cidade'];?>">

		<label for="estado">Estado:</label>
		<input type="text" id="estado" name="estado" required value="<?php echo $lista[0]['estado'];?>">

		<button type="submit">Alterar cadastro</button>
	</form>
</body>
</html>