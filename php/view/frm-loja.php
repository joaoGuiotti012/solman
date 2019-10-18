<?php
include_once('header.php');
include_once("../model/banco.php");
include_once("../model/banco-produtos.php");
$pdo = Banco::conectar();
$produtos = selectOrderByID($pdo);
?>
<style>
    .card-body {
        padding: 0px 20px;
        height: auto;
        overflow-y: scroll;
        overflow-y: hidden;
    }

    .card {
        border-radius: 0px 0px 10px 10px;
        border: solid 1px black;

    }
</style>
<div class="container ">
    <h3><span class="glyphicon glyphicon-th-list"></span> <b> Loja </b></h3>
    <br><br>
    <div class="container">

        <div class="row">
            <?php foreach ($produtos as $produto) : ?>








                <div class="col-sm-4 py-2">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?= $produto->img ?>" width="100%" height="200px" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title"><b><?= substr($produto->descricao, 0, 20) ?></b>...</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"> <b>Valor R$:</b> <?= $produto->valorUN ?></li>
                            <li class="list-group-item"> <b>Categoria:</b> <?= $produto->categoria ?></li>
                            <li class="list-group-item"> <b>Unidade</b>: <?= $produto->unidade ?></li>
                        </ul>
                        <div class="card-body text-center">
                            <a href="#" class="card-link">Link do card</a>
                            <a href="#" class="card-link">Outro link</a>
                        </div>
                    </div>


                    
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <?php include_once('footer.php'); ?>