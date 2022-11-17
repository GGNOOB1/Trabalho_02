<?php

date_default_timezone_set('America/Sao_Paulo');

/*-----------------------------------------------------------------------------------------------------------------------
 9) Criaremos uma associação entre as classes Produto e Fabricante. 
	
	A classe Fabricante terá como atributos nome, endereco e documento.	
	
	Em seu método construtor,  ela receberá via parâmetro esses dados para já ser inicializada com conteúdo.
	
	A associação entre as classes Produto e Fabricante se estabelece a partir da classe Produto. 
	
	A classe Produto terá como atributos: descricao, estoque, preco e fabricante. 
	
	O atributo fabricante é, na verdade, um objeto, ou seja, ele apontará para um objeto da classe Fabricante. 
	
	Para estabelecer o vínculo (associação) entre as duas classes, criaremos os métodos :
	
	setFabricante() //responsável por receber um objeto da classe Fabricante  e armazenar 
	                  internamente na propriedade $this->fabricante
	getFabricante(), // responsável por retornar a propriedade fabricante

-----------------------------------------------------------------------------------------------------------------------
*/

class Fabricante {
    private $nome;
    private $endereco;
    private $id;

    public function __construct($nome, $endereco, $id) {
        $this -> nome = $nome;
        $this -> endereco = $endereco;
        $this -> id = $id;
    }
} 

class Produto {

    private $nome;
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;
    private $caracteristica;

    public function __construct($nome, $descricao, $estoque, $preco) {
        $this -> nome = $nome;
        $this -> descricao = $descricao;
        $this -> estoque = $estoque;
        $this -> preco = $preco;
    }

    public function setFabricante(Fabricante $fabricante) {
        $this -> fabricante[] = $fabricante;
    }

    public function getFabricante() {
        foreach ($this -> fabricante as $key => $fabricante) {
            return $fabricante;
        } 
    }

    public function addCaracteristica($nome, $valor) {
        $this -> caracteristica[] = new Caracteristica($nome, $valor);
    }

    public function getCaracteristica() {
        return $this -> caracteristica;
    }

    public function getNome() { 
		
        return $this -> nome; 
        
    } 

    public function getPreco() {
        return $this -> preco;
    }

}

class Cesta {
    
    private $time;
    private $itens;

    public function __construct(){
        $this -> time = date('Y-m-d H:i:s');
        $this->itens = array(); 
    }

    public function addItem(Produto $produto) {
        $this -> itens[] = $produto;
    }

    public function getItens() {
        return $this -> itens;
    }

    public function getTime() {
        return "Tempo de criação da cesta: " . $this -> time . '<hr>';
    }

}

class Caracteristica {

    private $nome;
    private $valor;

    public function __construct($nome, $valor) {

        $this -> nome = $nome;
        $this -> valor = $valor;

    }

    public function getNome() {
        return $this -> nome;
    }

    public function getValor() {
        return $this -> valor;
    }


}

$fabricante1 = new Fabricante("Geraldo", "Rua pietro clissa", 1);
$produto1 = new Produto("Cotonete", "Usado para limpar ouvidos", 200, 1.50);
$produto1 -> setFabricante($fabricante1);
$produto1 -> addCaracteristica("Peso", "0.1g");
$produto1 -> addCaracteristica("Tamanho", "8cm");
$produto1 -> addCaracteristica("Cor", "Azul");


$produto2 = new Produto("Fone de ouvido", "Usado para escutar musicas", 50, 54.75);
$produto2 -> setFabricante($fabricante1);
$produto1 -> addCaracteristica("Peso", "500g");
$produto1 -> addCaracteristica("Tamanho", "5cm");
$produto1 -> addCaracteristica("Cor", "Preto com azul");

$produto3 = new Produto("Gelinho", "Sorvete com diversos sabores", 300, 0.70);
$produto3 -> setFabricante($fabricante1);
$produto1 -> addCaracteristica("Peso", "300g");
$produto1 -> addCaracteristica("Tamanho", "18cm");
$produto1 -> addCaracteristica("Sabor", "Chocolate, Gelo, Morango, Maracujá");

$cesta1 = new Cesta;
$cesta1 -> addItem($produto1);
$cesta1 -> addItem($produto2);
$cesta1 -> addItem($produto3);

echo '<h1>Cestas de itens: </h1>';
foreach($cesta1 -> getItens() as $item) {
    echo '<pre>';
    print $item -> getNome();
    print "<br>Preço: R$" . $item -> getPreco() . "reais";
    echo '<pre>';

    foreach($item -> getCaracteristica() as $c) {
        print "Caracteristica: " . $c->getNome() . ' - ' . $c -> getValor() . '<br>';
    }
    echo '<hr>';
}

echo $cesta1 -> getTime();

?>