<?php
	//inclui as bibliotecas comuns a todas as classes
	require_once("start.php");

	/*
	 * Classe responsável por fazer a comunicação do  com as 
	 * classes existentes na estrutura do projeto
	 */

	class UsuarioController{

		public function __construct(){
			echo "acessando o UsuarioController<br>";
		}
		/*
		 * Usuario = obriga o recebimento de um usuário
		 * $usuario = Recebe o usuário a ser salvo
		 */

		public function salvaUsuario(Usuario $usuario){
			$conexao = new Conexao();
			$dao = new ProdutoDao();

			//chama a função para salvar o usuário e envia um usuário 
			$dao->salvarUsuarioNoBanco($conexao->obterConexao(), $usuario);


		} // fim da função salvarUsuario

		//Funcções a dicionais do controler de usuário

	} // fim da classe UsuarioController
