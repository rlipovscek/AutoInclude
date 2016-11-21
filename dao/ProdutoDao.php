<?php
	//inclui as bibliotecas comuns a todas as classes
	require_once("start.php");


	/*
	 * Classe responsável por se comunicar com o banco de dados quando
	 * necessário interações referentes aos produtos
	 */
	class ProdutoDao{

		/*
		* grava o usuário no banco de dados
		* conexao: recebe uma conexao com um banco de dados
		* usuario: usuário recebido
		*/
		public function salvarUsuarioNoBanco($conexao, Usuario $usuario){
			
			//grave os dados no banco
			echo "Usuário ".$usuario->getNome()." gravado pelo DAO<br>";
			
		}// fim de gravaProduto


		//funcões adicionais da DAO dos produtos

	}//fim da classe ProdutoDao