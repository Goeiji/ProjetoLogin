<?php include '../config.php';?>
<?php include '../contato.php';?>


<?php

	$contato = new contato();

	$contato->setNome($_POST["nome"]);
	$contato->setEmail($_POST["email"]);
	$contato->setMsg($_POST["mensagem"]);

	$add = $contato->salvar($conexao, $contato->getNome(), $contato->getEmail(), $contato->getMsg());

	if($add == 1){
		echo "SUCESSO!<br>";
		echo "<br>";
	}else{
		echo "ERROR, tente novamente...";
	}

?>