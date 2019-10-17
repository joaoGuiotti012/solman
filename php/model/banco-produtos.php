

<?php

function addProduto($pdo,$desc, $qtd, $un, $categoria, $valor){
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert into produtos (descricao, quantidade, unidade, categoria, valorUN) values( ?, ?, ?, ?, ?)";
    $qry =  $pdo->prepare($sql);
    $qry->execute(array($desc, $qtd, $un, $categoria, $valor));
}


function removeProdutos($pdo,$idRem){
    $sql = "delete from produtos where id = :id";
    $stmt = $pdo->prepare($sql)->execute(['id' => $idRem]);
    return $stmt;
}

function selectOrderByID($pdo){
    $sql = 'select * from produtos order by id';
    $stmt = $pdo->query($sql);
    $res = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $res;
}


function alteraProdutos($pdo,$id,$desc, $qtd,$un,$categoria,$valor){
    $sql = "update produtos set descricao = ?, quantidade = ?, unidade = ?, categoria = ?, valorUN = ? where id = ?";
    $stmt = $pdo->prepare($sql)->execute(array($desc, $qtd,$un,$categoria,$valor,$id));
    return $stmt;
}

function selectByID($pdo, $id){
    $sql = "select * from produtos where id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]); 
    $res = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $res;
}

function selectByName($pdo){
    $sql = "select * from produtos order by descricao";
    $stmt = $pdo->query($sql);
    $res = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $res;
}