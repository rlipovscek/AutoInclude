<?php 
	/*
	 * Classe que será incuida em todo os arquivos
	 */

	/*verifica se a variável diretório existe, caso ela não exista inica 
	 * nosso sistema de inclusão automática de classes
	 */
	if(!isset($diretorio)){
		require_once("inclusaoAutomatica.php");
	}

	// inclusões, adicionais, e comuns a todo o projeto 