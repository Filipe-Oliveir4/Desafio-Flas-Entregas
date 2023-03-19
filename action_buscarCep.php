<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$cep =  filter_input(INPUT_POST,'cep');
	$url = "https://viacep.com.br/ws/" . $cep . "/json/";

	// Realiza a requisição HTTP para a API do ViaCEP
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);

	// Decodifica o resultado da requisição como um objeto JSON
	$result = json_decode($response);
	
	// Redireciona para a página que exibirá as informações do CEP
	
	header("Location: Form_Cadastro.php?cep=" . $cep . "&logradouro=" . $result->logradouro . "&bairro=" . $result->bairro . "&localidade=" . $result->localidade . "&uf=" . $result->uf);
	exit;
}