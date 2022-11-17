<?php /*
-----------------------------------------------------------------------------------------------------------------------
	4) Como não poderemos mais definir os valores dos atributos de maneira arbitrária, precisaremos de um meio para fazer isso. 
	Para tal, podemos criar métodos de acesso (setters e getters), ou seja, métodos que permitam a gravação e a leitura dos 
	atributos 	utilizando alguma regra de validação. 

	No exemplo a seguir, vamos reescrever a classe Produto para adicionar os métodos de acesso; 
	
	método setDescricao() irá verificar se o parâmetro recebido é string 
	setEstoque() irá verificar se o parâmetro recebido é numérico e positivo. 
	
	Essa técnica funciona porque os métodos são public, ou seja, são acessíveis de fora da classe. 
	Entretanto os atributos são private, ou seja, somente podem ser acessados de dentro da própria classe (a partir de métodos).
------------------------------------------------------------------------------------------------------------------------
*/

    class Produto4 {

        private $descricao;
        private $estoque;
        private $preco;
    
        public function setDescricao($descricao)
        {
            if (is_string($descricao)) {
                $this->descricao = $descricao;
            } else {
                echo "Não é uma descricao valida";
            }
        }
    
        public function getDescricao()
        {
            return $this->descricao;
        }
    
        public function setEstoque($estoque)
        {
            if (is_numeric($estoque) and $estoque > 0) {
                $this->estoque = $estoque;
            } else {
                echo "Não é um estoque valida";
            }
        }
    
        public function getEstoque()
        {
            return $this->estoque;
        }
}

$p1 = new Produto4;
$p1->setDescricao('Chocolate');
$p1->setEstoque(10);

print 'Descrição: ' . $p1->getDescricao() . '<br>' ;
print 'Estoque: ' . $p1->getEstoque() . '<br>' ;

// Resultado: Descrição: Chocolate Estoque: 10
?>
