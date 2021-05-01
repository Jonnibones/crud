<?php 


class Usuario extends Sql{

//Atributos
private $idfuncionario;
private $nomefuncionario;
private $emailfuncionario;
private $dataregistro;

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
public function getDataregistro(){
	return $this->dataregistro;
}
public function setDataregistro($value){
	$this->dataregistro = $value;
}

//metodos
public static function getList(){

	$sql = new Sql();

	return $sql->select("SELECT * FROM tb_funcionarios;");

}

}//fim da classe



 ?>