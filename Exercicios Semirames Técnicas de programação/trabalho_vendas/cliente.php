<?php 

    require_once('cidade.php');
    require_once('habilidade.php');
    require_once('itemVenda.php');
    require_once('produto.php');
    require_once('venda.php');
    

    class Cliente {

        private $nome;
        private $endereco;
        private $telefone;
        private $dataNascimento;
        private $status;
        private $email;
        private $genero; 
        private $cidade;
        private $habilidade;
        private $venda;

        public function __construct($nome, $endereco, $telefone, $dataNascimento, $status, $email, $genero) {
            $this -> nome = $nome;
            $this -> endereco = $endereco;
            $this -> telefone = $telefone;
            $this -> dataNascimento = $dataNascimento;
            $this -> status = $status;
            $this -> email = $email;
            $this -> genero = $genero;
        }

        public function setCidade(Cidade $cidade) {
            $this -> cidade = $cidade;
        }

        public function AddHabilidade(Habilidade $habilidade) {
            $this -> habilidade[] = $habilidade;
        }

        public function setVenda(Venda $venda) {
            $this -> venda = $venda;
        }

    }

?>