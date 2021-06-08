<?php 

class Usuario {

//Atributos
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

//Métodos

//Listar usuarios
public function getList(){

	try{
	$sql = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	$stmt = $sql->prepare("SELECT * FROM tb_funcionarios");
	$stmt->execute();
	$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach ($list as $value) {
		foreach ($value as $valor) {
			$lista[] = $valor;
		}
	}
	return $lista;
	}catch(Exception $e){
		print $e->getMessage();
	}

}
//Listar usuario por id
public function getListid(){
	
	try{
	$sql = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	$stmt = $sql->prepare("SELECT id_usuario FROM tb_funcionarios");
	$stmt->execute();
	$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach ($list as $value) {
		foreach ($value as $valor) {
			$lista[] = $valor;
		}
	}
	return $lista;
	}catch(Exception $e){
		print $e->getMessage();
	}
}

//Listar usuario por nome
public function getListnome(){
	
	try{
	$sql = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	$stmt = $sql->prepare("SELECT nome_usuario FROM tb_funcionarios");
	$stmt->execute();
	$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach ($list as $value) {
		foreach ($value as $valor) {
			$lista[] = $valor;
		}
	}
	return $lista;
	}catch(Exception $e){
		print $e->getMessage();
	}
}

//Listar usuario por email
public function getListemail(){

	try{
	$sql = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	$stmt = $sql->prepare("SELECT email_usuario FROM tb_funcionarios");
	$stmt->execute();
	$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach ($list as $value) {
		foreach ($value as $valor) {
			$lista[] = $valor;
		}
	}
	return $lista;
	}catch(Exception $e){
		print $e->getMessage();
	}

}

//Inserir usuários
public function insertUsuario($insname, $insemail){

	try{
	$this->setNomefuncionario($insname);
	$this->setEmailfuncionario($insemail);

	$sql = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	$stmt = $sql->prepare("INSERT INTO tb_funcionarios(nome_usuario, email_usuario) VALUES('$insname', '$insemail')");
	$stmt->execute();

	if ($stmt->rowCount() > 0) {
		$mensagem = "Registro inserido";
	}else{
		$mensagem = "Falha";
	}
	return $mensagem;
	}catch(Exception $e){
		print $e->getMessage();
	}
}
//Deletar usuário
public function deleteUsuario($id){
	try{

	$this->setIdfuncionario($id);
	$sql = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	$stmt = $sql->prepare("DELETE FROM tb_funcionarios WHERE id_usuario = $id");
	$stmt->execute();

	if ($stmt->rowCount() > 0) {
		$mensagem = "Deletado";
	}else{
		$mensagem = "Falha";
	}
	return $mensagem;
}catch(Exception $e){
	print $e->getMessage();
}
}

//Alterar usuário
public function updateUsuario($id, $newname, $newemail){
	try{

	$this->setIdfuncionario($id);
	$this->setNomefuncionario($newname);
	$this->setEmailfuncionario($newemail);

	$sql = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	$stmt = $sql->prepare("UPDATE tb_funcionarios SET nome_usuario = '$newname', email_usuario = '$newemail' WHERE id_usuario = $id");
	$stmt->execute();

	if ($stmt->rowCount() > 0) {
		$mensagem = "Registro alterado";
	}else{
		$mensagem = "Falha";
	}
	return $mensagem;
}catch(Exception $e){
	print $e->getMessage();
}

}


}//fim da classe



 ?>