<?php
session_start();
if (!isset($_SESSION['user'])) {
  session_destroy();
  header("location: http://localhost/solman/");
}

if (isset($_GET['deslogar'])) {
  session_destroy();
  header("location: http://localhost/solman/");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="/solman/css/style-nav.css" rel="stylesheet">


</head>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<body>




  <!------ Include the above in your HEAD tag ---------->

  <ul class="nav justify-content-center nav-menu">
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/solman/php/view/frm-principal.php">Home</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Controle</a>
      <div class="dropdown-menu bg-dark" >
        <a class="dropdown-item" href="http://localhost/solman/php/view/frm-lista-produtos.php">Produtos</a>
        <a class="dropdown-item" href="http://localhost/solman/php/view/frm-lista-clientes.php">Clientes</a>
        <a class="dropdown-item" hidden href="#">Usuários</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item " href="http://localhost/solman/php/view/frm-lista-vendas.php">Vendas</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/solman/php/view/frm-principal.php#ancSobreNos">Sobre nos</a>
    </li>
    <li class="nav-item " >
      <a class="nav-link " href="http://localhost/solman/php/view/frm-error.php">Loja</a>
    </li>

    <li class="nav-item">
      <a class="nav-link text-white " href="?deslogar="><i class="fas fa-sign-out-alt"></i></a>
    </li>
  </ul>