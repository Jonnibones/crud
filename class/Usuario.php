<?php 

//Início da Classe
class Usuario {

//Atributos
private $conn;	
private $idfuncionario;
private $nomefuncionario;
private $emailfuncionario;

//Métodos getters e setters
public function getIdfuncionario(){
	return $this->idfuncionario;
}
public function setIdfuncionario($value){
	$this->idfuncionario = $value;
}
public function getNomefuncionario(){
	return $this->nomefuncionario;
}
public function setNomefuncionario($value){
	$this->nomefuncionario = $value;
}
public function getEmailfuncionario(){
	return $this->emailfuncionario;
}
public function setEmailfuncionario($value){
	$this->emailfuncionario = $value;
}

//Métodos do crud

//Criar conexão
public function __construct(){
	try{
$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
}catch(PDOException $e){
	print "ERROR: ".$e->getMessage();
}
}

//Listar usuarios
public function getList(){
	$stmt = $this->conn->prepare("SELECT * FROM tb_funcionarios");
	$stmt->execute();
	$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach ($list as $value) {
			$listagem[] = array_values($value);
	}
	return $listagem;
}

//Inserir usuários
public function insertUsuario($insname, $insemail){
	$this->setNomefuncionario($insname);
	$this->setEmailfuncionario($insemail);
	$stmt = $this->conn->prepare("INSERT INTO tb_funcionarios(nome_usuario, email_usuario) VALUES('$insname', '$insemail')");
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		$mensagem = "Registro inserido";
	}else{
		$mensagem = "Falha";
	}
	return $mensagem;
	
}

//Deletar usuário
public function deleteUsuario($id){
	$this->setIdfuncionario($id);
	$stmt = $this->conn->prepare("DELETE FROM tb_funcionarios WHERE id_usuario = $id");
	$stmt->execute();
}

//Alterar usuário
public function updateUsuario($id, $newname, $newemail){
	$this->setIdfuncionario($id);
	$this->setNomefuncionario($newname);
	$this->setEmailfuncionario($newemail);
	$stmt = $this->conn->prepare("UPDATE tb_funcionarios SET nome_usuario = '$newname', email_usuario = '$newemail' WHERE id_usuario = '$id'");
	$stmt->execute();
}
}//fim da classe



 ?>