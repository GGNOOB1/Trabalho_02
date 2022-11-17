<?php 

    require_once('cidade.php');
    require_once('cliente.php');
    require_once('habilidade.php');
    require_once('itemVenda.php');
    require_once('produto.php');

    class Venda {

        private $data;
        private $total;
        private $obs;
        private $vendas;

        // public function __construct($data, $total, $obs) {
        //     $this -> data = $data;
        //     $this -> total = $total;
        //     $this -> obs = $obs;
        // }

        public function addItemVenda($precoVenda, $quantidade, $desconto, $total) {
            $itemVenda = new ItemVenda;
            $itemVenda -> precoVenda = $precoVenda;
            $itemVenda -> quantidade = $quantidade;
            $itemVenda -> desconto = $desconto;
            $itemVenda -> total = $total;
            $this -> vendas[] = $itemVenda; 
        }
    }

?>