<?php 

    require_once('cidade.php');
    require_once('cliente.php');
    require_once('habilidade.php');
    require_once('produto.php');
    require_once('venda.php');

    class ItemVenda {

        private $precoVenda;
        private $quantidade;
        private $desconto;
        private $total;
        private $produto;
        

        // public function __construct($precoVenda, $quantidade, $desconto, $total) {
        //     $this -> precoVenda = $precoVenda;
        //     $this -> quantidade = $quantidade;
        //     $this -> desconto = $desconto;
        //     $this -> total = $total;
        // }

        public function setProduto(Produto $produto) {
            $this -> produto = $produto;
        }

    }

?>