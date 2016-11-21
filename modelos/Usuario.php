<?php
	//inclui as bibliotecas comuns a todas as classes
	require_once("start.php");

	// classe com o dados do usuário
	class Usuario{

		// inicio da declaração das variáveis
		private $nome;
		private $sobreNome;
		// fim das declarações de variáveis


		// construtor de usuário
		public function __construct($nome, $sobreNome){
			$this->nome = $nome;
			$this->sobreNome = $sobreNome;
			echo "criando usuário<br>";

		} // fim do construtor de usuário 

		//reescreve o toString do objeto
		public function __toString(){
			return ("Nome do usuário: ".$this->nome." ".$this->sobreNome);
		}//fim do toString


		//Definição dos Geters e Seters da classe
		public function getNome(){
			return $this->nome;
		}

		public function getSobreNome(){
			return $this->sobreNome;
		}


	} // fim da classe usuário