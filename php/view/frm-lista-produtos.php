<?php
include_once('header.php');
include_once("../model/banco.php");
include_once("../model/banco-produtos.php");
$pdo = Banco::conectar();
$produtos = selectOrderByID($pdo);

?>



<div class="container ">
    <br><br>
    <h3><span><i class="fas fa-list"></i></span> <b> Listagem </b></h3>
    <br>    
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalNew"> New Item <i class="fas fa-plus-circle"></i></button>
    <button type="button" class="btn btn-primary btn-sm" id="bscNome" name="bscNome" onclick="javascript: location.href = 'frm-lista-produtos.php?nome'"> busca por nome</button>
    
    <table class="table table-striped table-bordered table-hover ">
        <thead>
            <th class="text-center">#<i class="fas fa-user-alt"></i></th>
            <th class="text-center">Descricao</th>
            <th class="text-center">Categoria</th>
            <th class="text-center">Quantidade</th>
            <th class="text-center">UN</th>
            <th class="text-center">ValorUN</th>
            <th class="text-center"><i class="fas fa-pencil-alt"></i></th>
            <th class="text-center"><i class="fas fa-backspace"></i></th>
        </thead>

        <?php foreach ($produtos as $produto) :
            $total = number_format(($produto->valorUN * $produto->quantidade), 2, ',', ' ') ?>
            <tr class="lista-chamados">
                <th class="text-center"><?php echo $produto->id ?></th>
                <td class="text-center"><?php echo $produto->descricao ?></td>
                <td class="text-center"><?php echo $produto->categoria ?></td>
                <td class="text-center"><?php echo $produto->quantidade ?></td>
                <td class="text-center"><?php echo $produto->unidade ?></td>
                <td class="text-center">R$ <?php echo number_format($produto->valorUN, 2, ',', ' ') ?></td>

                <td class="text-center">
                    <button type="button" class="btn-lista btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal<?= $produto->id ?>">
                        <i class="fas fa-pencil-alt"></i>
                    </button>

                    <?php include("modal-produtos.php"); ?>

                </td>
                <td class=text-center>
                    <button type="button" class="btn-lista btn btn-danger btn-sm" data-toggle="modal" data-target="#modalRem<?= $produto->id ?>"><i class="fas fa-backspace"></i></button>
                </td>
            </tr>


        <?php endforeach; ?>
    </table>


   

    </div>

    <?php // include_once('modal-altera-produtos.php') 
    ?>
    <?php include_once('footer.php') ?>