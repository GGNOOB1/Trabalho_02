<?php

/*
------------------------------------------------------------------------------------------------------
	7) Herança, para demonstrar o relacionamento de herança, utilizaremos os conceitos de conta, conta-corrente e conta 
    poupança. 
	
	Em um sistema bancário há diferentes tipos de conta e existem similaridades entre elas. 
	
	Ambas as contas – poupança e conta-corrente – têm atributos em comum, como número da agência, da conta e o saldo, 
	porém uma conta-corrente ainda terá um limite. 
	
	Ambas as classes têm funcionalidades em comum, como depositar valores e retirar valores. 
	Porém alguns desses métodos podem ter uma leve diferenciação entre uma conta e outra. 
	
	Enquanto o ato de depositar valores é igual, o ato de retirar valores é diferente, 
	pois uma conta-corrente tem um limite a ser observado além do seu saldo real. 
	
	Dessa forma, criaremos três classes: 
	
				Conta, 
				ContaCorrente e 
				ContaPoupanca. 
	
	A primeira classe será a classe pai, e as outras duas, classes filhas. 
	A classe pai terá as funcionalidades em comum e, nas classes filhas, implementaremos as funcionalidades específicas.
	A classe Conta terá um método construtor para definir alguns atributos iniciais. Além disso, terá também os métodos :
			
				depositar() para incrementar o saldo, 
				getSaldo()  para retornar o saldo atual e 
				método getInfo() para retornar algumas informações da conta. 
			
	Mas por que a classe "PAI" não tem um método retirar()? Porque o método retirar() é diferente entre as classes
    ContaCorrente e ContaPoupanca, portanto será implementado nas classes filhas.
	
	Vimos anteriormente que, ao declarar um atributo como private, ele fica protegido do escopo externo da classe. 
	Porém, em um relacionamento de herança, precisaremos acessar os atributos da classe a partir das classes filhas. 
	
	Para que isso seja possível, declaramos o atributo como protected, que permite que ele seja acessado :
				
				de dentro da classe, e também de suas filhas, mas não de fora da classe. 
				
------------------------------------------------------------------------------------------------------
*/
    class Conta
{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;
        if ($saldo >= 0) {
            $this->saldo = $saldo;
        }
    }

    public function getInfo()
    {
        return "Agência: {$this->agencia}, Conta: {$this->conta}"; 
	}

    public function depositar($quantia)
    {
        if ($quantia > 0) {
            $this->saldo += $quantia;
        }
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}


/*
-------------------------------------------------------------
	7.1) A partir do momento em que temos a classe pai "Conta" criada, podemos aproveitá-la para criar classes derivadas(filhas) como 
			ContaCorrente e 
			ContaPoupanca. 
			
	Inicialmente criaremos a classe ContaPoupanca. 
	Para criar uma classe filha, usaremos o operador extends na declaração da classe. 
	O operador extends permite indicar que a classe que está sendo criada irá herdar as características da classe pai, 
	como atributos e métodos. 
	
	A classe ContaPoupanca terá uma implementação própria do método retirar(), que por sua vez é de simples implementação, 
	pois é preciso somente verificar se a conta contém saldo suficiente em relação à quantia a ser retirada. 
	Esse método retornará true (retirada ok) ou false (retirada não permitida).
-------------------------------------------------------------
*/

    class ContaPoupanca extends Conta 
{
    public function retirar($quantia)
    {
        if ($this->saldo >= $quantia) {
            $this->saldo -= $quantia;
            echo "Retirada permitida";
        } else {
            echo "Retirada não permitida";
        }
        
        
    }
}

/*---------------------------------------------------------------------------------------------------------------------
	7.2) Agora podemos declarar a classe ContaCorrente, que também é filha de Conta. 
	
	A classe ContaCorrente também contém um método retirar() diferente, visto que uma conta-corrente pode ter um limite, 
	além do seu saldo real. 
	
	Para definirmos o limite, recriaremos o método construtor, acrescentando um novo parâmetro ($limite). 
	
	Para não precisarmos definir totalmente o método construtor, vamos chamar o método construtor já existente 
	na classe pai com
			
			(parent::__construct()), 
			
	que tratará por sua vez de armazenar os atributos recebidos. 
	
	O método retirar() irá verificar se a retirada está dentro do saldo real, além de levar em consideração o limite da conta.
---------------------------------------------------------------------------------------------------------------------
*/ 

class ContaCorrente extends Conta
{
    protected $limite;

    public function __construct($agencia, $conta, $saldo, $limite)
    {
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
		
    }

    public function retirar($quantia)
    {
        if ( ($this->saldo + $this->limite) >= $quantia ) {
            $this->saldo -= $quantia;
            echo "Retirada permitida";
        } else {
            echo "Retirada não permitida";
        }

    }
	
}

$conta1 = new ContaPoupanca(1, 1, 2000);

echo '<h1>Conta poupança</h1>';
echo '<pre>';
var_dump($conta1);
echo '</pre>';

echo '<hr>';

$conta1 -> retirar(500);

echo '<pre>';
var_dump($conta1);
echo '</pre>';
echo '<hr>';

$conta2 = new ContaCorrente(2, 2, 500,500);

echo '<h1>Conta corrente</h1>';
echo '<pre>';
var_dump($conta2);
echo '</pre>';

echo '<hr>';

$conta2 -> retirar(1000);

echo '<pre>';
var_dump($conta2);
echo '</pre>';
echo '<hr>';




?>

