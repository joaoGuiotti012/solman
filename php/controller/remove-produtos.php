<?php 

include_once('../model/banco-produtos.php');
include_once('../model/banco.php');

$pdo = Banco::conectar();

$id = $_GET['id'];


removeProdutos($pdo, $id);

 header( "location: ../view/frm-lista-produtos.php");

?>
