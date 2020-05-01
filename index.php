<?php

require_once("config.php");


//carrega um usuario
//$root = new Usuario();
//$root->loadById(5);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();

//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jos");
//echo json_encode($search);

//carrega um usuario usando login e senha

//$usuario = new Usuario();

//$usuario->login("joao", "1234");

//echo $usuario;

//Criando um novo usuario
//$aluno = new Usuario("aluno", "@lun0");
//echo $aluno;

//ALTERAR UM USUARIO
/*
$usuario = new Usuario();

$usuario->loadById(12);
$usuario->update("professor", "#@!$$!");
echo $usuario;
*/

//DELETAR UM USU
$usuario = new Usuario();

$usuario->loadById(12);

$usuario->delete();
echo $usuario;

?>