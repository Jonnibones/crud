<?php 
session_start();
require_once("config.php");

//Inserir usuario
if (isset($_POST['btn_enviar'])) {
	$usuario = new Usuario();
	$usuario->insertUsuario($_POST['inp_nome'], $_POST['inp_email']);
	unset($_SESSION['btntype']);
	unset($_SESSION['btnname']);
	header("location:index.php");
}

//Deletar usuario
if (isset($_GET['delete'])) {
	$deletar = new Usuario();
	$deletar->deleteUsuario($_GET['delete']);
	header("location:index.php");
}

//Editar usuario
if (isset($_GET['edit'])) {
	$_SESSION['valor'] = explode(" ",$_GET['edit']);
	$_SESSION['btntype'] = "btn btn-info";
	$_SESSION['btnname'] = "Editar";
	$editusuario = new Usuario();
	$editusuario->updateUsuario(37,$_POST['inp_nome'], $_POST['inp_email']);

	header("location:index.php");

}





 ?>