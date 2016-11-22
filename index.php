<?php 
	
/*
	 * Sistema simples para testar a função de auto include das classes
	 * neste exemplo o arquivo inclusaoAutomatica é responsável por localizar a classe
	 * com base em seu nome, sendo que o arquivo pode estar contido dentro de
	 * uma pasta e deve possuir o mesmo nome que a classe.
	 * caso deseje procurar um arquivo php que não seja uma classe basta chamar a funação
	 * carregaArquivo($nomeDoArquivo) e informar o nome do arquivo a ser procurado.
	 */

	if(!isset($diretorio)){
		require_once("inclusaoAutomatica.php");
	}



echo "conteúdo da index <br>";

// cria uma instancia do usuário
$usuario = new Usuario("Rodolpho", "Lipovscek");

/*
 * Cria uma instancia do controller de usuário e chama a função
 * responsável por salvar o usuário
 */
$controller = new UsuarioController();
$controller->salvaUsuario($usuario);
