<?php 

/*1)  Teste e modifique a classe Produto.php, acrescentando as  propriedades para armazenar codigo,
marca e fabricante; */

class Produto {
    public $descricao;
    public $estoque;
    public $preco;
    public $codigo;
    public $marca;
    public $fabricante;
}

$p1 = new Produto;
$p1->descricao = 'Chocolate';
$p1->estoque = 10;
$p1->preco = 7;
$p1->codigo = 1;
$p1->marca = "Cacau Show";
$p1->fabricante = "Nestle";

$p2 = new Produto;
$p2->descricao = 'Café';
$p2->estoque = 20;
$p2->preco = 4;
$p2->codigo = 1;
$p2->marca = "Bis";
$p2->fabricante = "Lactea";
// output objeto inteiro

echo '<pre>';

var_dump($p1);
var_dump($p2);

echo '</pre>';

/* Resultado esperado:
object(Produto)#1 (3) { ["descricao"]=> string(9) "Chocolate" ["estoque"]=> int(10) ["preco"]=> int(7) }
object(Produto)#2 (3) { ["descricao"]=> string(5) "Café" ["estoque"]=> int(20) ["preco"]=> int(4) }
*/


?>