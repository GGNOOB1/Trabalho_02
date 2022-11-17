<?php 

    class Produto {

        public $nome;
        public $descricao;
        public $preco;
        public $quantidade;

        public function  __construct($nome, $descricao, $preco, $quantidade) {
            $this -> nome = $nome;
            $this -> descricao = $descricao;
            $this -> preco = $preco;
            $this -> quantidade = $quantidade;
        }

    }

?>