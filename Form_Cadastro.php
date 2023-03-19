<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Entrega</title>
	<meta charset="utf-8">
	<<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<img src="flash-logo.png" alt="Logo da Empresa">
	<!-- Formulário para input de dados do entregador-->
	<form method="POST" action="action_cadastrar.php">
		<label for="nome">Nome do Entregador:</label>
		<input type="text" id="nome" name="nome" required>

		<label for="cpf">CPF:</label>
		<input type="text" id="cpf" name="cpf" required >

		<label for="cep">CEP:</label>
		<input type="text" id="cep" name="cep" required value="<?php echo filter_input(INPUT_GET,'cep');?>">
        
        <label for="endereco">Endereço:</label>
		<input type="text" id="endereco" name="endereco" required value="<?php echo filter_input(INPUT_GET,'logradouro');?>">

		<label for="bairro">Bairro:</label>
		<input type="text" id="bairro" name="bairro" required value="<?php echo filter_input(INPUT_GET,'bairro');?>">
		
		<label for="cidade">Cidade:</label>
		<input type="text" id="cidade" name="cidade" required value="<?php echo filter_input(INPUT_GET,'localidade');?>">

		<label for="estado">Estado:</label>
		<input type="text" id="estado" name="estado" required value="<?php echo filter_input(INPUT_GET,'uf');?>">

		<button type="submit">Cadastrar</button>
	</form>
</body>
</html>
