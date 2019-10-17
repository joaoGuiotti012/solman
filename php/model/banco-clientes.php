<?php

function selectByOrderNome($pdo){
    $sql = "select * from clientes order by nome";
    $stmt = $pdo->query($sql);
    $result = $stmt->fetchALL(PDO::FETCH_OBJ);
    return $result;
}


function addCli($pdo,$nome, $fone, $cpf, $end, $comp, $email, $cidade, $estado, $cep){
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert into clientes (nome, telefone, cpf, endereco, complemento, email, cidade, estado, cep) values( ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt =  $pdo->prepare($sql);
    $stmt = $stmt->execute(array($nome, $fone, $cpf, $end, $comp, $email, $cidade, $estado, $cep));
    return $stmt;
}

function removeCli($pdo, $id){
    $sql = "delete from clientes where id = :id";
    $stmt = $pdo->prepare($sql)->execute(['id' => $id]);
    return $stmt;
}

function alteraCli($pdo,$id,$nome, $fone, $cpf, $end, $comp, $email, $cidade, $estado, $cep){
    $sql = "update clientes set nome = ?, telefone = ?, cpf = ?, endereco = ?, complemento = ?, email = ?, cidade = ?, estado = ?,
            cep = ? where id = ?";
    $stmt = $pdo->prepare($sql)->execute(array($nome, $fone, $cpf, $end, $comp, $email, $cidade, $estado, $cep,$id));
    return $stmt;
}
function selectByNameCli($pdo,$nome){
    $sql= "SELECT * FROM clientes WHERE nome LIKE '%:nome%'";
    $result = $pdo->prepare($sql)->execute(array(':nome' => $nome ));
    return $result;
    
}
?>