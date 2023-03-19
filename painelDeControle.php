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
	<img src="flash-logo.png" alt="Logo da Empresa">
	
    <?php 
    //Coleto todos os entregadores do banco de dados e coloco numa lista
    $lista=[];
    $sql = $pdo->query("SELECT * FROM entregadores");
    if($sql->rowCount()>0){
    $lista=$sql->fetchAll(PDO::FETCH_ASSOC);

}?>

<a . texto href="index.php">ADICIONAR USUÁRIO</a>
<!-- Monto a tabela e mostro todos os entregadores ue preencheram o formulário-->
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>STATUS</th>
        <th>CPF</th>
        <th>CEP</th>
        <th>AÇÕES</th>
    </tr>
    <!-- Faço um foreach para percorrer todos os entregadores, preenchendo os dados na tabela-->
    <?php foreach($lista as $usuario):?>
        <tr>
        <td><?php echo $usuario['id']; ?></td>
        <td><?php echo $usuario['nome']; ?></td>
        <td><?php echo $usuario['status']; ?></td> 
        <td><?php echo $usuario['cpf']; ?></td>
        <td><?php echo $usuario['cep']; ?></td> 
        <td>
            <a href="Form_Alteracao.php?id=<?=$usuario['id'];?>">[Editar]</a>
            <a href="action_excluir.php?id=<?=$usuario['id'];?>">[Excluir]</a>
            <a href="action_alterarStatus.php?id=<?=$usuario['id'];?>">[Alterar Status]</a>
        </td>    

        </tr>    
    <?php endforeach;?>
</table>
</body>
</html>