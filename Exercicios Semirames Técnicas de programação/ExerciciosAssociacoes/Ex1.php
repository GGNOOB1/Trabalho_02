<?php 

class Pessoa {

    public string $nome;
    public int $idade;
    public float $altura;

    public function __construct($nome, $idade, $altura) {
        $this -> nome = $nome;
        $this -> idade = $idade;
        $this -> altura = $altura;
    }

    public function getPessoa() {
        echo $this -> nome;
        echo "<br>";
        echo $this -> idade;
        echo "<br>";
        echo $this -> altura;
        echo "<br>";
    }

}

$pessoa1 = new Pessoa("Geraldo", 19, 1.60);

echo "<pre>";
$pessoa1 -> getPessoa();
echo "</pre>";


?>