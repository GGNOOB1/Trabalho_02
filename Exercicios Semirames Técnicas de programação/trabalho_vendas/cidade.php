<?php 

    require_once('cliente.php');
    require_once('habilidade.php');
    require_once('produto.php');
    require_once('venda.php');
    require_once('itemVenda.php');

    class Cidade {

        private $nome;

        public function __construct($nome) {
            $this -> nome = $nome;
        }

    }

?>