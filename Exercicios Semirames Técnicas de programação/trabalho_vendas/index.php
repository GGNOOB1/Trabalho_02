<?php 

    require_once('cidade.php');
    require_once('cliente.php');
    require_once('habilidade.php');
    require_once('itemVenda.php');
    require_once('produto.php');
    require_once('venda.php');

    $c1 = new Cliente("Geraldo", "rua fi", "115231", "15/04/2003", "Regular", "gafsaf@gmail.com", "m");

    $cidade1 = new Cidade("Osasco");

    $skill1 = new Habilidade("Adquirir");
    $skill2 = new Habilidade("Vender");

    $p1 = new Produto("Usado para escutar músicas", 10, 55.50, "Gege industries");
    $p2 = new Produto("Brinquedo redondo para crianças", 5, 20.23, "Tomas industries");
    $p3 = new Produto("Pc gamer full tunado", 2, 3954.50, "Pichau.com");
    
    $v1 = new Venda;
    $v1 -> addItemVenda()

    $c1 -> setCidade($cidade1);
    $c1 -> addHabilidade($skill1);
    $c1 -> addHabilidade($skill2);

    echo '<pre>';
    var_dump($c1);
    echo '</pre>';

?>