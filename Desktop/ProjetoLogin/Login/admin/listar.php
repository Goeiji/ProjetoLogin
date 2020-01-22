<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Formulário de contato</title>
</head>
<body>
	<h2>Contato</h2>
	<p> Listando contatos</p>
	
	<?php include '../config.php';?>
	<?php include '../contato.php';?>
		
	<?php
	$contato = new contato();

	$sql = $contato->listar($conexao);
	
	echo "<table border = 1>";

	while ($linha = mysqli_fetch_array($sql)){
		$contato->setID($linha["id"]);
		$id = $linha["id"];
		$contato->setNome($linha["nome"]);
		$nome = $linha["nome"];
		$contato->setEmail($linha["email"]);
		$email = $linha["email"];
		$contato->setMsg($linha["mensagem"]);
		$mensagem = $linha["mensagem"];

		echo "<tr>
			<td>".$contato->getID()."</td>
			<td>".$contato->getNome()."</td>
			<td>".$contato->getEmail()."</td>
			<td>".$contato->getMsg()."</td>".
			"<td><a title='Excluir' href='excluir.php?id=$id'>Excluir</a></td>
			<td><a title='Editar' href='editar2.php?id_ref=$id'>Editar</a></td>
		</tr>";
		
	}
	echo "</table>";
	?>
		
</body>
</html>
