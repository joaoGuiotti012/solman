<?php 

include_once('../model/banco-clientes.php');
include_once('../model/banco.php');

$pdo = Banco::conectar();

$id = $_GET['id'];

removeCli($pdo, $id);

 header( "location: http://localhost/solman/php/view/frm-lista-clientes.php");

?>