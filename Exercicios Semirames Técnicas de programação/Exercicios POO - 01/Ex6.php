<?php 

/*
----------------------------------------------------------------------------------------------
	6)  Método destrutor irá exibir uma mensagem de debug,  para que saibamos em que momento ele é executado. 
	No  exemplo ele será executado automaticamente quando usarmos o método unset(). 
	Se não tivéssemos usado o método unset(), os objetos seriam todos destruídos ao final da execução do programa.
----------------------------------------------------------------------------------------------
*/

class Produto6
{
    private $descricao;
    private $estoque;
    private $preco;

    public function __construct($descricao, $estoque, $preco)
    {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
        print "CONSTRUÍDO: Objeto {$descricao}, estoque {$estoque}, preco {$preco}<br>\n";
    }

    public function __destruct()
    {
        print "DESTRUÍDO: Objeto {$this->descricao}, estoque {$this->estoque}, preco {$this->preco}<br>\n";
    }
}

$p1 = new Produto6('Chocolate', 10, 5);


$p2 = new Produto6('Café', 100, 7);


// Resultado: CONSTRUÍDO: Objeto Chocolate, estoque 10, preco 5

//DESTRUÍDO: Objeto Chocolate, estoque 10, preco 5 CONSTRUÍDO: Objeto Café, estoque 100, preco 7 DESTRUÍDO: Objeto Café, estoque 100, preco 7


?>
