<?php /*
 -----------------------------------------------------------------------------------------------------
	 2) Método  é uma função que faz parte de uma classe e representa um comportamento que essa 
	 (classe) precisa expor para o ambiente externo. 
	 
	 Uma classe Produto, por exemplo, pode expor métodos (funções) como :
	 
			 aumentarEstoque(), 
			 diminuirEstoque(), 
			 reajustarPreco(), entre outros. 
			 
	 No exemplo  Produto2.php vamos criar cada um desses métodos. 
	 
	 Para um método referenciar um atributo interno da classe, basta utilizarmos a variável $this, que, 
	 por sua vez, é uma variável que representa o objeto atual que está sendo manipulado.
 ---------------------------------------------------------------------------------------------------- 
*/
?>

<?php class Produto2
{
    public $descricao;
    public $estoque;
    public $preco;

    public 	function aumentarEstoque($unidades) // como criar funções no PHP, ou C++, JAVA
	{
        if (is_numeric($unidades) and $unidades >= 0) {
            $this->estoque += $unidades;
			//$this->estoque = $this->estoque + $unidades;
        }
    }

    public function diminuirEstoque($unidades)
    {
        if (is_numeric($unidades) and $unidades >= 0) {
            $this->estoque -= $unidades;
        }
    }

    public function reajustarPreco($percentual)
    {
        if (is_numeric($percentual) and $percentual >= 0) {
            $this->preco *=  (1 + ($percentual / 100));
			
        }
    }
}




$p1 = new Produto2;


$p1->descricao = 'Chocolate';
$p1->estoque = 10;
$p1->preco = 8;

print "O estoque de {$p1->descricao} é {$p1->estoque} <br>";
print "O preço de {$p1->descricao} é {$p1->preco} <br>";

$p1->aumentarEstoque(10);
$p1->diminuirEstoque(5);
$p1->reajustarPreco(100);

print "O estoque de {$p1->descricao} é {$p1->estoque} <br>\n";
print "O preço de {$p1->descricao} é {$p1->preco} <br>\n";

// Resultado: O estoque de Chocolate é 10 O preço de Chocolate é 8 O estoque de Chocolate é 15 O preço de Chocolate é 12

?>
