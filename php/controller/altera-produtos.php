<?php 

    include_once("../model/banco-produtos.php");
    include_once("../model/banco.php");

   $pdo = banco::Conectar();
   $id = $_POST['id'];
   $desc = $_POST['txtDescricao'] ;
   $qtd =  $_POST['txtQuantidade'] ;
   $un =  $_POST['unidade'];
   $categoria =  $_POST['categoria'];
   $valor =  $_POST['txtValor'];

   alteraProdutos($pdo,$id,$desc, $qtd,$un,$categoria,$valor);
   header("location: ../view/frm-lista-produtos.php");

?>