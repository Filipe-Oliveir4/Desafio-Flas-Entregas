<!DOCTYPE html>
<html>
<head>
	<title>Inserir CEP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<img src="flash-logo.png" alt="Logo da Empresa">
	<!-- Inserção do CEP para pesquisa -->
	<form method="POST" action="action_buscarCep.php">
    	<label for="cep">Insira o CEP:</label>
		<input type="text" id="cep" name="cep" required>

		<button type="submit">Enviar</button>
	</form>
</body>
</html>
