<?php 
require_once("interface/header.php");
require_once("config.php");
 ?>

  	<main>
  	<!--Formulário-->
  	<div class="container-md">
    <form method="POST" action="processa.php">

  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" id="id_name" name="nm_nome">
  </div>

  <div class="mb-3">
    <label class="form-label">E-mail</label>
    <input type="email" name="nm_email" class="form-control" id="id_email">
  </div>

  <button type="submit" name="btn_enviar" class="btn btn-success">Cadastrar</button>
  
</form>
</div>


</main>

<?php 
/*carrega uma lista de usuários
$lista = Usuario::getList();
echo json_encode($lista);*/

/*$inserir = new Usuario();
$inserir->insertUsuario("gool","fdjfsj@hghg");
echo $inserir;*/

/*$deletar = new Usuario();
$deletar->loadByid(13);
$deletar->deleteUsuario();
echo $deletar;*/

/*alterar um usuario
$usuario = new Usuario();
$usuario->loadByid(7);
$usuario->updateUsuario("Ken", "ken@gmail");
echo $usuario; */
 ?>

 <div class="container-md">
   <table id="tab" class="table">
   	<!--Colunas-->
<thead>
  <tr>
 	<th>Id funcionário</th>
    <th>Nome funcionário</th>
    <th>Email funcionário</th>
    <th colspan="3">Ação</th>
  </tr>
</thead>
<?php 
 
 $lista = new Usuario();

 $lista->loadByid(1);

 

 var_dump($lista);

 ?>
<tr>
	<td></td>
	<td></td>
	<td></td>
</tr>


</table>
</div>


  </body>

</html>