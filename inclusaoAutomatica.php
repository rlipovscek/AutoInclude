<?php

	/*
	 * Faz o include de um detarminado arquivo php com base no seu nome
	 * nomeDoArquivo = Nome do arquivo procurado
	 */

	// Veriável que informa o diretório atual
	$diretorio= __DIR__;
	function carregaArquivo($nomeDoArquivo){
		//retona o path raiz
		$diretorio = __DIR__;
		//recebe um array com as pastas do sistema
		$pastas = scannerDeDiretorio($diretorio);
		/*
		 * Verifica em qual pasta do sistema se encontra o arquivo procurado
		 * pastas = array de pastas
		 * diretorio = o real path de nossa raiz
		 * nomeDoArquivo = qual o arquivo procurado
		 * encontrado = o real path do arquivo encontrado
		 */
		$encontrado = procuraArquivo($pastas, $diretorio,$nomeDoArquivo);
		// efetua o require do arquivo encontrado
		require_once($encontrado);

	}// fim de carregaArquivo
	
	//informa que o carrega classe deve ser iniciado automaticamente
	spl_autoload_register("carregaArquivo");


	/*
	 * Retorna a lista de diretórios existentes em um local
	 * diretorio = qual o caminho base que deve ser verificado
	 */
	function scannerDeDiretorio($diretorio){
		//escaneia o conteúdo de um local e guarda este em um array
		$lista = scandir($diretorio);
		//array que recebera somente as pastas de um local
		$pastas = [];
		// verifica cada item de um array para separar as pastas dos arquivos
		foreach ($lista as $item) {
			/*
			 * Veirica se algum arquivo possui um ponto em seu nome, pois caso
			 * exista um ponto na declaração este não será considerado como um
			 * diretório
			 */
			$pos = strpos($item,'.');
			// se o arquivo não possuir pontos ele é guardado no array pastas
			if($pos === false){
				array_push($pastas, $item);
			}//fim do if
		}// fim do foreach
		//insere um campo vazio no array, para representar a raiz
		array_push($pastas, "");
		//retorna o array con as pastas encontradas
		return $pastas;
	} // fim de scannerDeDiretorio

	/*
	 * Procura por um arquivo em um conjunto de pastas
	 * pastas = array de pastas a serem procuradas
	 * $diretorio = diretório raiz usado para montar o real path do arquivo
	 * nomeDoArquivo = nome do arquivo que procuramos
	 */
	function procuraArquivo($pastas, $diretorio, $nomeDoArquivo){
		//garda o endereço do arquivo encontrado
		$encontrado="";

		foreach ($pastas as $pasta) {
			//se a pasta possui um nome ele é concatenado com a raiz usada na busca
			if($pasta != ""){
				$arquivo = $diretorio."/".$pasta."/".$nomeDoArquivo.".php";
			}else{
				//caso a pasta não possua nome a variável é definida com o endereço da raiz da busca
				$arquivo = $diretorio."/".$nomeDoArquivo.".php";
			}
			if(file_exists($arquivo)){
				//se o arquivo foi encontrado ele é devolvido como endereço
				return $arquivo;
			}
		}
		//Caso o arquivo não seja encontrado é devolvido o endereço em banco
		return $encontrado;

	}// fim de procuraArquivo

