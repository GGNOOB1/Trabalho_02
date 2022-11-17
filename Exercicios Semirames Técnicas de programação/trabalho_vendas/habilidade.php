<?php 

    require_once('cidade.php');
    require_once('cliente.php');
    require_once('itemVenda.php');
    require_once('produto.php');
    require_once('venda.php');

    class Habilidade {

        public $nome;

        public function __construct($nome){
            $this -> nome = $nome;
        }

    }

?>