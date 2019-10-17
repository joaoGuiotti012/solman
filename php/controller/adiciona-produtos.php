<?php   

include_once('../model/banco.php');
include_once('../model/banco-produtos.php');
$desc = $_POST['txtDescricao'] ;
$qtd =  $_POST['txtQuantidade'] ;
$un =  $_POST['unidade'];
$categoria =  $_POST['categoria'];
$valor =  $_POST['txtValor'];
$pdo = banco::Conectar();

if(!empty($desc) && !empty($qtd) && !empty($un) && !empty($categoria) && !empty($valor)){
    addProduto($pdo,$desc, $qtd, $un, $categoria, $valor);
}
header("location: ../view/frm-lista-produtos.php");//chama a pagina apos add
?>