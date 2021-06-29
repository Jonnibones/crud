# crud
<h3>Crud em php com PDO</h3>

Este pequeno projeto se trata de um crud em PHP utilizando PDO e Mysql. 
É um projeto feito por um iniciante nos estudos, e tenho como objetivo poder ajudar outros iniciantes e também receber críticas(construtivas), sugestões e dicas em geral.
O projeto tem uma simples tabela com apenas 3 campos, e as 4 operações básicas para manutençao de dados(crud), sendo possível inserir, deletar e editar nome e email de um
funcionário, onde os registros da tabela são listados na index. Para o front utilizei o framework bootstrap(não reparem mas não caprichei muito pois o foco era o back-end mesmo
hehehe).

<h3>Tabela no banco de dados</h3>

CREATE TABLE `tb_funcionarios` (
  	`id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  	`nome_usuario` VARCHAR(100) NOT NULL COLLATE 'utf8_general_ci',
  	`email_usuario` VARCHAR(100) NOT NULL COLLATE 'utf8_general_ci',
  	PRIMARY KEY (`id_usuario`) USING BTREE
  )
  COLLATE='utf8_general_ci'
  ENGINE=InnoDB
  AUTO_INCREMENT=1;<br><br>
 Os nomes das colunas da tabela estão como usuario pq estava com outro projeto em andamento e acabei misturando hehehe

