<?php 

require_once("config.php");

//Inserir usuario
if (isset($_POST['btn_enviar'])) {
	$usuario = new Usuario();
	$usuario->insertUsuario($_POST['inp_nome'], $_POST['inp_email']);
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
	
}





 ?>