<?php 

	class Imovel {

		public $quartos;
		public $valor;
		public $endereco;
		public $descricao;

		public function __construct($quartos, $valor, $endereco, $descricao) {
			
			if (is_numeric($quartos)) {
				$this -> quartos = $quartos;
			} /*else {
				echo "A informação apresentada não corresponde a resposta adequada!<br>";
				echo "Esperava-se um valor numérico<br>";
			}*/

			if (is_numeric($valor)) {
				$this -> valor = $valor;
			} /*else {
				echo "A informação apresentada não corresponde a resposta adequada!<br>";
				echo "Esperava-se um valor numérico<br>";
			}*/

			if (is_string($endereco)) {
				$this -> endereco = $endereco;
			} /*else {
				echo "A informação apresentada não corresponde a resposta adequada!<br>";
				echo "Esperava-se um valor do tipo 'texto'!<br>";
			}*/

			if (is_string($descricao) && $descricao != ''){
				$this -> descricao = $descricao;
			} else{
				echo "Preencha a descrição!";
			};

		}

		public function dadosImovel(){
			echo ("O seu imovel possui: <br>Quartos: {$this -> quartos}<br>Valor: {$this -> valor}<br>Endereco: {$this -> endereco}");
			echo '<hr>';
		}

	}

?>