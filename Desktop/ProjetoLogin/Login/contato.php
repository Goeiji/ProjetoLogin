<?php
	class contato{
	private $id;
	private $nome;
	private $email;
	private $mensagem;

	public function setID($id){
		$this->id = $id;
	}

	public function getID(){
		return $this->id;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setMsg($mensagem){
		$this->mensagem = $mensagem;
	}

	public function getMsg(){
		return $this->mensagem;
	}

	public function salvar($conexao, $nome, $email, $mensagem){
		mysqli_query($conexao, "insert into contato (nome, email, mensagem)
		values ('$nome', '$email', '$mensagem')") or print(msqli_error());
		return 1;
	}

	public function listar($conexao){
		$sql = mysqli_query($conexao, "Select * from contato");
		return $sql;		
	}

	}

?>