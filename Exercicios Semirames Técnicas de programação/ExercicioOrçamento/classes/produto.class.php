<?php 

    require_once('orcamento.class.php');

    class Produto {
        private $nome;
        private $qtd;
        private $preco;
        

        public function __construct($nome, $qtd, $preco) {
            $this -> nome = $nome;
            $this -> qtd = $qtd;
            $this -> preco = $preco;
        }

        public function getPreco() {
            return $this -> preco;
        }

        

    }


?>