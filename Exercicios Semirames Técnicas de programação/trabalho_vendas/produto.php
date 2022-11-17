<?php 

    require_once('cidade.php');
    require_once('cliente.php');
    require_once('habilidade.php');
    require_once('itemVenda.php');
    require_once('venda.php');

    class Produto {

        public $descricao;
        public $estoque;
        public $precoVenda;
        public $unidade;

        public function __construct($descricao, $estoque, $precoVenda, $unidade) {
            $this -> descricao = $descricao;
            $this -> estoque = $estoque;
            $this -> precoVenda = $precoVenda;
            $this -> unidade = $unidade;
        }


    }

?>