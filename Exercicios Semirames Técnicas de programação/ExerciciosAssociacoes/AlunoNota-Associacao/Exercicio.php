<?php 

class Aluno {

    public $nome;
    public $idade;
    public $Detalhes;

    public function __construct($nome, $idade) {
        $this -> nome = $nome;
        $this -> idade = $idade;
    }

    public function setDetalhes(Detalhes $detalhes) {
        $this -> Detalhes = $detalhes;
    }

    public function getInfo() {
        echo "O nome do aluno é: " . $this -> nome . '<br>';
        echo "A idade do aluno é: " . $this -> idade . '<br>';
        echo "Detalhes do aluno: " . '<br>';
        echo "A nota final do aluno é: " . $this -> Detalhes -> nota . "<br>"; 
        echo "Situação do aluno: " . $this -> Detalhes -> situacao . "<br>";
    }
}





class Detalhes {
    public $nota;
    public $situacao; 
}

$aluno1 = new Aluno("Geraldo", 19);

$detalhesAluno1 = new Detalhes;

$detalhesAluno1 -> nota = 10;
$detalhesAluno1 -> situacao = "Aprovado!";

$aluno1 -> setDetalhes($detalhesAluno1);
$aluno1 -> getInfo();

?>