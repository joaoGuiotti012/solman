<?php 
    $msg = null;
    $user = $_POST['user'];
    $pwd = $_POST['password'];
    $pwd = md5($pwd);
    include_once('../model/banco.php');
    include_once('../model/banco-login.php');
    $pdo = banco::Conectar();
    $password = Logar($pdo,$user);
    banco::desconectar();

    if($pwd == $password){
        session_start();
        $_SESSION['user']=$user;
        header("location: ../view/frm-principal.php");

    }else{
        $msg = "<div class='formContent alert alert-danger text-center' role='alert'><b><i> Usuário </i></b> ou <b><i>senha</i></b> não correspondem !</div>";
        header('location: http://localhost/solman?msg='.$msg);
       
    }
?>