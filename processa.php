<?php 

require_once("config.php");

if (isset($_POST['btn_enviar'])) {
	$usuario = new Usuario();
	$usuario->insertUsuario($_POST['nm_nome'], $_POST['nm_email']);
	header("location:index.php");
}





 ?>