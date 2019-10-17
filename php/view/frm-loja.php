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
<div class="page-header ">
    <h3><span class="glyphicon glyphicon-th-list"></span> <b> Loja </b></h3>
    <br><br>
<div class="container">

<div class="row">
    <?php foreach ($produtos as $produto) : ?>
        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white bg-primary">
               <a href="#"><img src="<?= $produto->img ?>" alt="" width="100%" height="200px"></a> 
                <div class="card-body text-center">
                    <h4 class="card-title"><b><?= substr($produto->descricao, 0, 25 )?></b></h4>
                    <a class="btn btn-outline-primary  " href="#" role="button">Link</a> 
                    
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</div>

<?php include_once('footer.php');?>