<?php 

/*
 ----------------------------------------------------------------------------------------------------------------------
3) Para proteger os atributos de um objeto utilizamos o encapsulamento, no caso da classe Produto, 
	alterando as declarações de public para private, os atributos só poderão ser referenciados dentro da própria classe
 ----------------------------------------------------------------------------------------------------------------------
*/
?>

<?php class Produto3
{
    private $descricao;
    private $estoque;
    private $preco;
	
}

$p1 = new Produto3;
$p1->descricao = 'Chocolate';
$p1->estoque = 10;
$p1->preco = 8;

//  Resultado: Resultado: Fatal error: Cannot access private property Produto::$descricao in objeto3 . php on line 10
?>

