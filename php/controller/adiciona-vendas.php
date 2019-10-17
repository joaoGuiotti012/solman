<?php
include_once('../model/banco.php');
include_once('../model/banco-vendas.php');
$id_cli = $_POST['optid_cli'];
$id_prod =  $_POST['optid_prod'];
$obs =  $_POST['txtObs'];
$quantidade =  $_POST['txtQuantidade'];



$pdo = banco::Conectar();

if (!empty($id_cli) && !empty($id_prod) && !empty($obs) && !empty($quantidade)) {
    subEstoque($pdo, $id_prod, $quantidade);
    insereVenda($pdo, $id_cli, $id_prod, $obs, $quantidade);
    subEstoque($pdo, $id_prod, $quantidade);
    header("location: ../view/frm-lista-vendas.php");
} else {
    header("location: ../view/frm-error.php"); //chama a pagina apos add
}
