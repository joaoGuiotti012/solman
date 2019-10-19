<?php
include_once('header.php');
include_once('../model/banco.php');
include_once('../model/banco-clientes.php');

$pdo = Banco::Conectar();
$clientes = selectByOrderNome($pdo);

?>
<div class="container">
<br><br>
<?php if(isset($_GET['msg'])){echo $_GET['msg'];}?>
<br><br>
    <h3><span><i class="fas fa-list"></i></span> <b> Listagem </b></h3>
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalNew"> New Item <i class="fas fa-plus-circle"></i></button>
    
    <table class="table-responsive table-striped  table-bordered table-hover ">
        <thead>
            <th class="text-center"><i class="fas fa-user-alt">#</i></th>
            <th class="text-center">Nome</th>
            <th class="text-center">Email</th>
            <th class="text-center">Fone</th>
            <th class="text-center">CPF</th>
            <th class="text-center">Cidade</th>
            <th class="text-center">Estado</th>
            <th class="text-center">Endereco</th>
            <th class="text-center">Complemento</th>
            <th class="text-center">CEP</th>
            <th class="text-center"><i class="fas fa-pencil-alt"></i></th>
            <th class="text-center"><i class="fas fa-backspace"></i></th>
        </thead>
        <?php foreach ($clientes as $cli) : ?>
            <tr>
                <th class="text-center"><?php echo $cli->id ?></th>
                <td class="text-center"><?php echo $cli->nome ?></td>
                <td class="text-center"><?php echo $cli->email ?></td>
                <td class="text-center"><?php echo $cli->telefone ?></td>
                <td class="text-center"><?php echo $cli->cpf ?></td>
                <td class="text-center"><?php echo $cli->cidade ?></td>
                <td class="text-center"><?php echo $cli->estado ?></td>
                <td class="text-center"><?php echo $cli->endereco ?></td>
                <td class="text-center"><?php echo $cli->complemento ?></td>
                <td class="text-center"><?php echo $cli->cep ?></td>
                <td class="text-center">
                    <button type="button" class="btn-lista btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEdit<?= $cli->id ?>">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                </td>
                <td class=text-center>
                    <button type="button" class="btn-lista btn btn-danger btn-sm" data-toggle="modal" data-target="#modalRem<?= $cli->id ?>">
                        <i class="fas fa-backspace"></i>
                    </button>
                </td>
            </tr>

            <?php include("modal-clientes.php"); ?>
        <?php endforeach; ?>
    </table>
</div>

<?php include('../view/footer.php'); ?>