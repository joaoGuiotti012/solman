<?php

function select($pdo)
{
    $sql = "SELECT vendas.*,c.nome AS clientes, p.descricao, p.valorUN, p.unidade, p.categoria FROM vendas INNER JOIN clientes AS c ON 
    vendas.id_cli = c.id INNER JOIN produtos AS p ON vendas.id_prod=p.id ORDER BY vendas.data ASC";
    //select p.*,c.nome as categoria_nome from produtos as p join categorias as c on c.id=p.categoria_id";
    $stmt = $pdo->query($sql);
    $result = $stmt->fetchALL(PDO::FETCH_OBJ);
    return $result;
}

function selectPrecoUn($pdo, $idP)
{
    $sql = "select * from produtos where id = ?";
    $stmt = $pdo->prepare($sql)->execute(array($idP));
    $result = $stmt->fetchALL(PDO::FETCH_OBJ);
    return $result;
}

function selectPagos($pdo)
{
    $sql = "SELECT vendas.*,c.nome AS clientes, p.descricao, p.valorUN FROM vendas INNER JOIN clientes AS c ON 
    vendas.id_cli = c.id INNER JOIN produtos AS p ON vendas.id_prod=p.id WHERE vendas.pago = 'sim' ORDER BY vendas.data ASC";
    $stmt = $pdo->query($sql);
    $pagos = $stmt->fetchALL(PDO::FETCH_OBJ);
    return $pagos;
    ;
}

function selectCli($pdo){
    $sql = "SELECT clientes.id as id_cli, clientes.nome FROM clientes";
    $cli = $pdo->query($sql)->fetchALL(PDO::FETCH_OBJ);
    return $cli;
}

function selectProd($pdo){
    $sql = "SELECT produtos.id as id_prod, produtos.descricao as nome, produtos.unidade, produtos.categoria FROM produtos";
    $prod = $pdo->query($sql)->fetchALL(PDO::FETCH_OBJ);
    return $prod;
}

function insereVenda($pdo,$id_cli,$id_prod,$obs,$quantidade){
    $sql = "INSERT INTO vendas ( id_cli, id_prod, obs, quantidade ) VALUES ( ?,?,?,?)";
    $qry =  $pdo->prepare($sql);
    $qry->execute(array($id_cli,$id_prod,$obs,$quantidade));
}

function subEstoque($pdo,$id_prod, $quantidade){
    $sql = "UPDATE produtos set quantidade = quantidade-:newQtd WHERE id = :id_prod";
    $sub = $pdo->prepare($sql);
    $sub->execute(array( ':newQtd' => $quantidade , 'id_prod' => $id_prod));
}

function remVenda($pdo, $idRem){
    $sql = "DELETE FROM vendas Where id = :id ";
    $rem = $pdo->prepare($sql);
    $rem = $rem->execute(array(":id" => $idRem));
    return $rem; 
}
function pagarVenda($pdo, $idPAG){
    $sql = "UPDATE vendas set pago = 'sim' WHERE id = :id";
    $rem = $pdo->prepare($sql);
    $rem = $rem->execute(array(":id" => $idPAG));
    return $rem; 
}