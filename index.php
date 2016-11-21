<?php require_once("start.php");


echo "conteúdo da index <br>";

// cria uma instancia do usuário
$usuario = new Usuario("Rodolpho", "Lipovscek");

/*
 * Cria uma instancia do controller de usuário e chama a função
 * responsável por salvar o usuário
 */
$controller = new UsuarioController();
$controller->salvaUsuario($usuario);