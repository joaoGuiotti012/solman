        <?php
        include_once('header.php');
        include_once('../model/banco.php');
        include_once('../model/banco-vendas.php');

        $pdo = Banco::Conectar();
        $clientes = selectCli($pdo);
        $contagem = 0;
        $Total = 0;
        $valorTotal = 0;

        function data($data)
        {
            return date("d/m/Y", strtotime($data));
        }
        // exemplo de utilização:

        ?>
        <style>

            .table tr {
                font-size: 13px;
                padding: 0px;
            }
        </style>
        <div class="container">

            <br><br>
            <?php
            if (isset($_GET['msg'])) {
                echo $_GET['msg'];
            }

            ?>
            <br><br>    
            <h3><span> <i class="text-primary fas fa-list-ol"></i></span> <b> Controle de Vendas </b></h3><br>
            <button type="button" id="btNovo" name="btNovo" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalNew"> New Item <i class="fas fa-plus-circle"></i></button>
            <a href="#ancPagos" type="button" class="btn btn-primary btn-sm">Pagos <i class="fas fa-funnel-dollar"></i> </a>
            <br> <br>
            <table class=" table-responsive table-striped  table-bordered table-hover">
                <thead class="thead-black">

                    <th class="text-center"><i class="fas fa-list-ol"></i></th>
                    <th class="text-center">Cliente</th>
                    <th class="text-center">Produto</th>
                    <th class="text-center">OBS</th>
                    <th class="text-center">Categoria</th>
                    <th class="text-center">Quantidade</th>
                    <th class="text-center">Unidade</th>
                    <th class="text-center">Data</th>
                    <th class="text-center">Total</th>
                    <th class="text-center">Pago</th>
                    <th class="text-center"><i class="fas fa-money-check-alt"></i></th>
                    <th class="text-center" hidden><i class="fas fa-pencil-alt"></i></th>
                    <th class="text-center"><i class="fas fa-trash-alt"></i></th>
                </thead>

                <?php foreach (select($pdo) as $venda) :
                    $Total = ($venda->valorUN * $venda->quantidade) ?>
                    <tr>
                        <th class="text-center"><?php echo $venda->id ?></th>
                        <td class="text-center"><?php echo substr($venda->clientes, 0, 20) ?>...</td>
                        <td class="text-center"><?php echo substr($venda->descricao, 0, 20) ?></td>
                        <td class="text-center"><?php echo substr($venda->obs, 0, 20) ?> ...</td>
                        <td class="text-center"><?php echo $venda->categoria ?></td>
                        <td class="text-center"><?php echo $venda->quantidade ?></td>
                        <td class="text-center"><?php echo $venda->unidade ?></td>
                        <td class="text-center"><?php echo data($venda->data) ?></td>
                        <td class="text-center">R$ <?php echo number_format($Total, 2, ',', '.') ?></td>
                        <td class="text-center"> <?= $venda->pago ?> </td>
                        <th class="text-center">
                            <form action="../controller/pagar-vendas.php" method="POST">
                                <button type="submit" class="btn-lista btn btn-success btn-sm" value="<?= $venda->id ?>">
                                    <i class="fas fa-money-check-alt"></i>
                                </button>
                                <input type="hidden" name="idPAG" value="<?= $venda->id ?>">
                                <input type="hidden" name="pago" value="<?= $venda->pago ?>">
                            </form>
                        </th>
                        <td class="text-center " hidden>
                            <form action="frm-altera-produtos.php" method="POST">
                                <button class="btn-lista btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></button>
                                <input type="hidden" name="id" value="<?= $venda->id ?>">
                            </form>
                        </td>
                        <td class=text-center>
                            <button type="button" class="btn-lista btn btn-danger btn-sm" data-toggle="modal" data-target="#modalRem<?= $venda->id ?>"><i class="fas fa-backspace"></i> </button>
                        </td>
                    </tr>
                <?php
                    include('modal-vendas.php');
                    $contagem += 1;
                    $valorTotal += $Total;
                endforeach; ?>
            </table>
            <div class=" div-contagem">
                <br>
                <h5> <b class="text-danger">Contagem: </b> <?= $contagem ?> </h5>
                <h5> <b class="text-success">Total R$: </b> <?= number_format($valorTotal, 2, ',', '.') ?> </h5>
            </div>
        </div>
        <div class="container">
            <br>
            <h3 id="ancPagos"><i class="text-success fas fa-money-check-alt"></i> <b> Itens Pagos </b></h3><br>
            <table class="table table-striped table-bordered table-hover ">
                <thead class="thead-black">
                    <th class="text-center">#<i class="fas fa-user-alt"></i></th>
                    <th class="text-center">Cliente</th>
                    <th class="text-center">Produto</th>
                    <th class="text-center">OBS</th>
                    <th class="text-center">Quantidade</th>
                    <th class="text-center">Data</th>
                    <th class="text-center">Total</th>
                    <th class="text-center"><i class="fas fa-eye"></i></th>
                </thead>
                <?php
                foreach (selectPagos($pdo) as $pago) :
                    include('modal-vendas.php')
                    ?>
                    <tr>
                        <th class="text-center"><?php echo $pago->id ?></th>
                        <td class="text-center"><?php echo $pago->clientes ?></td>
                        <td class="text-center"><?php echo  $pago->descricao ?></td>
                        <td class="teste text-center"><?php echo substr($pago->obs, 0, 20) ?> ...</td>
                        <td class="text-center"><?php echo $pago->quantidade ?></td>
                        <td class="text-center"><?php echo data($venda->data) ?></td>
                        <td class="text-center">R$ <?php echo number_format($pago->valorUN * $pago->quantidade, 2, ',', '.') ?></td>
                        <td class="text-center">
                            <a class="btn-lista btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#modalView<?= $pago->id ?>">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <br>
        </div>
        

        <?php include('../view/footer.php'); ?>