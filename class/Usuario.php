<?php 


class Usuario extends Sql{

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
public static function getList(){

	$sql = new Sql();

	return $sql->select("SELECT * FROM tb_funcionarios;");

}

public function setData($data){

	$this->setIdfuncionario($data['id_usuario']);
	$this->setNomefuncionario($data['nome_usuario']);
	$this->setEmailfuncionario($data['email_usuario']);

}

//Inserir usuários

public function insertUsuario(){

	$sql = new Sql();

	/*"INSERT INTO `dbphp7`.`tb_funcionarios` (`id_usuario`,`nome_usuario`, `email_usuario`) VALUES (:NOME, :EMAIL)"*/

	$stmt = $sql->select("CALL sp_funcionarios_insert(:NOME, :EMAIL)", array(

		':NOME'=>$this->getNomefuncionario(),
		':EMAIL'=>$this->getEmailfuncionario()


	));

	if(count($stmt) > 0){
		$this->setData($stmt[0]);
	}

}

public function deleteUsuario(){

	$sql = new Sql();

	$sql->query("DELETE FROM tb_funcionarios WHERE id_usuario = :ID", array(

			':ID'=>$this->getIdfuncionario()

	));


}

public function loadByid($id){

	$sql = new Sql();

	$results = $sql->select("SELECT * FROM tb_funcionarios WHERE id_usuario = :ID", array(
		":ID"=>$id
	));

	if (count($results) > 0){

	$this->setData($results[0]);

	}

}



public function __toString(){

	return json_encode(array(

		"idusuario"=>$this->getIdfuncionario(),
		"nomefuncionario"=>$this->getNomefuncionario(),
		"emailfuncionario"=>$this->getEmailfuncionario()
		


	));	

}


}//fim da classe



 ?>