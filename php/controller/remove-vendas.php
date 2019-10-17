<?php 

include_once('../model/banco-vendas.php');
include_once('../model/banco.php');

$pdo = Banco::conectar();

$id = $_GET['id'];
//$quantidade = -1 * $_GET['qtd'];

if( remVenda($pdo,$id) > 0){
    //subEstoque($pdo, $id,$quantidade );//volta a quantidade de estoque cancelado na venda
    $msg = '<div class="alert alert-success" ><h5> <b> Removido com sucesso !<b><h5> Venda de cod: '.$id.'</div>';
} else
{
    $msg = '<div class="alert alert-danger" > Falha ao remover esta Venda !</div>';
}
header( 'location: ../view/frm-lista-vendas.php?msg='.$msg);




?>
