<?php


include_once('../model/banco.php');
include_once('../model/banco-clientes.php');

$nome = $_POST['txtNome']." ". $_POST['txtSobrenome'];
$fone = $_POST['txtFone'];
$cpf = $_POST['txtCPF'];
$end = $_POST['txtEndereco'];
$comp = $_POST['txtComplemento'];
$email = $_POST['txtEmail'];
$cidade = $_POST['optCidade'];
$estado = $_POST['optEstado'];
$cep = $_POST['txtCEP'];


$pdo = Banco::Conectar();

if( !empty($fone) && !empty($cpf) && !empty($end) && !empty($comp) && !empty($email) && !empty($cidade)
    && !empty($estado) && !empty($cep)){
    if(addCli($pdo,$nome, $fone, $cpf, $end, $comp, $email, $cidade, $estado, $cep) > 0){
        $msg = '<div class="alert alert-success" ><h5> <b> CADASTRAMENTO </b><h5>Cadastro realizado com sucesso. <b> Cliente: </b> '.$nome.'</div>';
    }else{
        $msg = '<div class="alert alert-danger" ><h5> <b> CADASTRAMENTO </b><h5>Falha ao realizar cadastro do <b> Cliente: </b>  '.$nome.'</div>';

    }
}else{$msg = '<div class="alert alert-danger" ><h5> <b> PREENCHIMENTO OBRIGATÓRIO </b><h5>Preencha todos os campos obrigatórios deste cadastro !</div>';}

header("location: http://localhost/solman/php/view/frm-lista-clientes.php?msg=".$msg);
