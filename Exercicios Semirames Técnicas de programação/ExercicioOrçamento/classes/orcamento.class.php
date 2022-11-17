<?php 

    require_once('produto.class.php');

    class Orcamento {

        private $Itens = [];
        public $qtd;
        

        public function adiciona(Produto $produto, $qtd) {
            
            $this ->Itens[] = array($qtd,$produto);
            
        }
       
        public function ExibeLista() {
            foreach ($this -> Itens as $produto) {
                echo $produto -> getPreco();
            }
        }

        public function CalculaTotal() {

            $total = 0;

            foreach ($this -> Itens as $produto) {
                
                $total += $produto[0] * $produto[1]->getPreco();
                
            }

            echo $total;

        }

    }

   


?>