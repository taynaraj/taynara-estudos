<?php
require_once("banco-usuario.php");
require_once("logica-usuario.php");


$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if($usuario ==null){
	$_SESSION["danger"] = "Usuário ou senha inválida!!";
	header("Location:index.php?login=0");
}
else{
	$_SESSION["sucecess"] = "Usuário logado com sucesso!!";
	logaUsuario($usuario["email"]);
	header("Location:index.php");
}