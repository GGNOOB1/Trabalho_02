<?php 

class Fornecedor {

    public $codigo;
    public $RazaoSocial;
    public $Contatos;

    function __construct($codigo, $RazaoSocial) {
        $this -> codigo = $codigo;
        $this -> RazaoSocial = $RazaoSocial;
    }

    function addContatos($nome, $telefone, $email) {
        $contato = new Contato;
        $contato -> Nome = $nome;
        $contato -> Telefone = $telefone;
        $contato -> Email = $email;
        $this -> Contatos[] = $contato;
    }

    function imprimeContatos() {
        foreach ($this -> Contatos as $key => $contato) {
            echo '<pre>';
            var_dump($contato);
            echo '</pre>';
        }
    }

}

class Contato {

    public $Nome;
    public $Telefone;
    public $Email;

}

$fornecedor1 = new Fornecedor(1, "Frutas");
$fornecedor1 -> addContatos("Geraldo", "11951202163", "animepiecegege@gmail.com");
$fornecedor1 -> imprimeContatos();

$fornecedor2 = new Fornecedor(2, "Verduras");
$fornecedor2 -> addContatos("Arthur", "1142322163", "arthur15@gmail.com");
$fornecedor2 -> imprimeContatos();

echo "<hr>";

echo '<pre>';
var_dump($fornecedor1);
echo '</pre>';

echo "<hr>";

echo '<pre>';
var_dump($fornecedor2);
echo '</pre>';
?>