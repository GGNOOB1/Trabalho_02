<?php 

    require_once("produto.class.php");

    class CestaDeCompras {

        public $produtos;

        public function addProdutos(Produto $produto){
            $this -> produtos[] = $produto;
        }

        public function exibirProdutos() {
            foreach($this -> produtos as $produto) {
                echo "Nome do produto: " . $produto->nome."<br>";
                echo "Descrição do produto: " . $produto->descricao."<br>";
                echo "Preço do produto: " . $produto->preco."<br>";
                echo "Quantidade do produto: " . $produto->quantidade."<br><br>";
                
            }
        }

        public function calculaTotal() {

            $total = 0;

            foreach($this -> produtos as $produto) {
                $total += ($produto -> quantidade * $produto -> preco); 
            }

            echo "O total de sua compra é igual a: " . $total . "<br>";
            echo '<hr>';
        }


    }


    $produto1 = new Produto("Chocolate", "Alimento com cor marrom com um toque adocicado", 12, 50);
    $produto2 = new Produto("Bola", "Objeto redondo para crianças chutar", 23.50, 13);

    $produto3 = new Produto("Chup-Chup", "Isso daqui chupa msm ein", 0.50, 100);
    $produto4 = new Produto("Fone", "Objeto para escutar musicas", 124.90, 5);

    echo "<pre>";
    var_dump($produto1);
    echo "</pre>";

    $cesta1 = new CestaDeCompras;
    $cesta2 = new CestaDeCompras;

    $cesta1 -> addProdutos($produto1);
    $cesta1 -> addProdutos($produto2);
    $cesta2 -> addProdutos($produto3);
    $cesta2 -> addProdutos($produto4);

    $cesta1 -> exibirProdutos();
    $cesta1 -> calculaTotal();

    $cesta2 -> exibirProdutos();
    $cesta2 -> calculaTotal();
?>