<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$bd = "usuario";

	$superconexao = mysqli_connect($host, $usuario, $senha, $bd) or die("Não foi possível conectar...");

	$login = $_POST["Login"];
	$senha = $_POST["Senha"];

	$consulta = mysqli_num_rows(verificar($superconexao, $login, $senha));

	function verificar($superconexao, $login, $senha){
		$sql = mysqli_query($superconexao,"select * from `usuario` where `login` in ('$login') and `senha` in ('$senha')") or print(mysql_error());
		/*print_r($sql);
		echo "<br>";
		$a = mysqli_fetch_array($sql, MYSQLI_ASSOC);
		print_r($a);*/
		return $sql;
	}

	if ($consulta == 1){
		echo "<h1>PERMISSAO CONCEDIDA</h1>";
		echo "<html>
				<form action='listar.php'>
					<input type='submit' value='LISTAR'>
				</form>
			</html>";
	}else{
		echo "<h1>USUARIO DESCONHECIDO</h1>";
	}
?>