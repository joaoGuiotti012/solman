<?php
session_start();
if (!isset($_SESSION['user'])) {
  session_destroy();
  header("location: http://localhost/projeto_solman/");
}

if (isset($_GET['deslogar'])) {
  session_destroy();
  header("location: http://localhost/projeto_solman/");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="/projeto_solman/css/style-nav.css" rel="stylesheet">
</head>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<body>




  <!------ Include the above in your HEAD tag ---------->

  <div class="row affix-row">
    <div class="col-sm-3 col-md-2 affix-sidebar">
      <div class="sidebar-nav">
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <span class="visible-xs navbar-brand">Sidebar menu</span>
          </div>
          <div class="navbar-collapse collapse sidebar-navbar-collapse">

            <ul class="nav navbar-nav" id="sidenav01">
              <li class="active">
                <a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed">
                  <h4>
                    Bem vindo!
                    <b><br> <?= $_SESSION['user'] ?> </b>
                    <br> <br>
                    <small>IOSDSV <span class="caret"></span></small>

                  </h4>
                </a>
              </li>
              <li class="#">
                <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
                  <span class="glyphicon glyphicon-inbox"></span> Controle <span class="caret pull-right"></span>
                </a>
                <div class="collapse" id="toggleDemo2" style="height: 0px;">
                  <ul class="nav nav-list">
                    <li><a href="frm-lista-produtos.php">Itens</a></li>
                    <li><a href="frm-lista-clientes.php">Clientes</a></li>
                    <li><a href="http://localhost/projeto_solman/php/view/frm-error.php">Usuarios</a></li>
                    <li><a href="frm-lista-vendas.php">Vendas</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="http://localhost/projeto_solman/php/view/frm-loja.php"><span class="glyphicon glyphicon-lock"></span> Loja</a></li>
              <li><a href="http://localhost/projeto_solman/php/view/frm-error.php"><span class="glyphicon glyphicon-calendar"></span> WithBadges <span class="badge pull-right">42</span></a></li>
              <li><a href="http://localhost/projeto_solman/php/view/frm-error.php"><span class="glyphicon glyphicon-cog"></span> PreferencesMenu</a></li>
              <li><a href="?deslogar"><i class="fas fa-sign-out-alt"></i></span> Sing Out</a></li>
            </ul>
          </div>
          <!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="col-sm-9 col-md-10 affix-content">

      <nav class="navbar-top">
        <div class="container-fluid text-center">
          <img src="../../img/slack-logo.png" alt="slack-logo-top" class="logo-top" width="150" height="50">
          <br>

          <hr class="tr-top">
        </div>
      </nav>
      <br><br><br><br>