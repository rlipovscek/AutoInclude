<?php
	//inclui as bibliotecas comuns a todas as classes
	require_once("start.php");


	/*
	 * Classe responsável pelas comunicações com o banco de dados
	 */

	class Conexao{

		public function obterConexao(){

			//efetue a conexão com seu banco
			echo "estabelecendo conexao<br>";
			return "conexao";
		}//fim de obterConexao

		// demais funções referentes as conexão

	}//fim da classe Conexao