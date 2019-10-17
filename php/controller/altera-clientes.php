<?php
include_once("../model/banco-clientes.php");
include_once("../model/banco.php");

$id = $_POST['txtID'];
$nome = $_POST['txtNome'];
$fone = $_POST['txtFone'];
$cpf = $_POST['txtCPF'];
$end = $_POST['txtEndereco'];
$comp = $_POST['txtComplemento'];
$email = $_POST['txtEmail'];
$cidade = $_POST['optCidade'];
$estado = $_POST['optEstado'];
$cep = $_POST['txtCEP'];
$pdo = Banco::Conectar();
$test = alteraCli($pdo, $id, $nome, $fone, $cpf, $end, $comp, $email, $cidade, $estado, $cep);

if ($test > 0) {
    header("location: ../view/frm-lista-clientes.php");
} else { 
    header("location: ../view/frm-error.php");
}
