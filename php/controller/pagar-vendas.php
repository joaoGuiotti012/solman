<?php

include_once('../model/banco.php');
include_once('../model/banco-vendas.php');

$pdo = Banco::conectar();
$idPAG = $_POST['idPAG'];
$pago = $_POST['pago'];

if( $pago == "sim" || pagarVenda($pdo, $idPAG) < 1){
    $msgPAG = '<div class="alert alert-danger" ><h5> <b> ERRO: <\b><h5> <br> Tentiva de Pagamento falho.<b> ID: </b>'.$idPAG.' este item já esta pago.</div>';
}else{
    pagarVenda($pdo, $idPAG);
    $msgPAG = '<div class="alert alert-success" ><h5> <b> PAGAMENTO </b><h5>Pagamento realizado com sucesso. cod de venda: '.$idPAG.'</div>';
}

header( 'location: ../view/frm-lista-vendas.php?msg='.$msgPAG);