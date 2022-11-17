<?php 

/*
------------------------------------------------------------------------------------------------------------------
	5) No PHP, um método construtor deve ter o nome __construct(), pois é uma convenção da linguagem. 
	
	No exemplo a seguir estamos criando um método construtor que recebe três parâmetros: $descricao, $estoque e $preco. 
	
	Ao construirmos o objeto, ele receberá essas três variáveis, caso elas passem nas validações necessárias 
	antes de serem atribuídas internamente ao objeto ($this->). 
	
	Neste exemplo, criamos um objeto com atributos válidos e, depois, executamos os métodos getters para obter os 
	valores dos atributos. 
	
	Veja que os parâmetros recebidos pelo método construtor ($descricao, $estoque, $preco) devem ser armazenados 
	como atributos do objeto ($this->descricao, $this->estoque, $this->preco) para serem lidos posteriormente.
	
	Observação: caso não seja definido um método construtor, automaticamente todas as propriedades do objeto 
	criado são inicializadas com o valor NULL.
------------------------------------------------------------------------------------------------------------------
*/

    class Produto5 {

    private $descricao;
    private $estoque;
    private $preco;

    public function __construct($descricao, $estoque, $preco) {
        if (is_string($descricao)) {
            $this->descricao = $descricao;
        }
        if (is_numeric($estoque) and $estoque > 0) {
            $this->estoque = $estoque;
        }
        if (is_numeric($preco) and $preco > 0) {
            $this->preco = $preco;
        }
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }
    public function getPreco()
    {
        return $this->preco;
    }
}



$p1 = new Produto5('Chocolate', 10, 5);

print 'Descrição: ' . $p1->getDescricao() . '<br>' ;
print 'Estoque: ' . $p1->getEstoque() . '<br>' ;
print 'Preço: ' . $p1->getPreco() . '<br>' ;
// Resultado: Descrição: Chocolate Estoque: 10 Preço: 5
?>

