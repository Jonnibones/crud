<?php 
session_start();
require_once("config.php");

//Inserir e editar usuario
if (isset($_POST['btn_enviar'])) {
	if ($_SESSION['btntype'] == "btn btn-info") {
		$usuario = new Usuario();
	$usuario->updateUsuario($_SESSION['valor'][2],$_POST['inp_nome'], $_POST['inp_email']);
	$_SESSION['msg'] = "Registro editado.";
	$_SESSION['msgcolor'] = "alert alert-warning";
	unset($_SESSION['btntype']);
	unset($_SESSION['btnname']);
	unset($_SESSION['valor']);
	header("location:index.php");
	}else{
		if(!empty($_POST['inp_nome'] and !empty($_POST['inp_email']))){
	$usuario = new Usuario();
	$usuario->insertUsuario($_POST['inp_nome'], $_POST['inp_email']);
	$_SESSION['msg'] = "Registro inserido.";
	$_SESSION['msgcolor'] = "alert alert-success";
	unset($_SESSION['btntype']);
	unset($_SESSION['btnname']);
	header("location:index.php");
}else{
	$_SESSION['msg'] = "Campos não podem ser vazios!";
	$_SESSION['msgcolor'] = "alert alert-danger";
	header("location:index.php");
}
}
}

//Deletar usuario
if (isset($_GET['delete'])) {
	$deletar = new Usuario();
	$deletar->deleteUsuario($_GET['delete']);
	$_SESSION['msg'] = "Registro excluído.";
	$_SESSION['msgcolor'] = "alert alert-danger";
	header("location:index.php");
}

//Carregar inputs e mudar o texto e cor do botão submit
if (isset($_GET['edit'])) {
	$_SESSION['valor'] = explode(",",$_GET['edit']);
	$_SESSION['btntype'] = "btn btn-info";
	$_SESSION['btnname'] = "Editar";
	header("location:index.php");

}





 ?>