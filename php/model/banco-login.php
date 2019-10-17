<?php
function Logar($pdo, $user){
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "Select * from login WHERE login=?";
    $q = $pdo->prepare($sql);
    $q->execute(array($user));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $password = $data['senha'];
    return $password;
}


?>