<?php 
require_once("interface/header.php");
require_once("config.php");
 ?>

  	<main>
  	<!--Formulário-->
  	<div class="container-md">
    <form>

  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" id="id_name" name="nm_nome">
  </div>

  <div class="mb-3">
    <label class="form-label">E-mail</label>
    <input type="email" name="nm_email" class="form-control" id="id_email">
  </div>

  <button type="submit" class="btn btn-success">Cadastrar</button>
  
</form>
</div>


</main>

<?php 

$inserir = new Usuario("","gool","fdjfsj@hghg");
$inserir->insertUsuario();
echo $inserir;

/*$deletar = new Usuario();
$deletar->loadByid(13);
$deletar->deleteUsuario();
echo $deletar;*/
 ?>

  </body>

</html>