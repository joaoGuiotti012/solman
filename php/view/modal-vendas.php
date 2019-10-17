<?php
include_once('../model/banco.php');
include_once('../model/banco-vendas.php');
include_once('../model/banco-clientes.php');
include_once('modal-vendas.php');
$pdo = Banco::Conectar();
$clientes = selectCli($pdo);
$produtos = selectProd($pdo);
?>


<div class="modal fade" id="modalRem<?= $venda->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="exampleModalLabel">Deseja realmente remover este item ?</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span>
                    <p><b>ID: </b> <?= $venda->id ?></p>
                    <p><b>Cliente: </b> <?= $venda->clientes ?> <b> COD: </b> <?= $venda->id_cli ?> </p>
                    <p><b>Produto: </b> <?= $venda->descricao ?> <b> COD: </b> <?= $venda->id_prod ?> </p>
                    <p><b>Observação: </b> <?= $venda->obs ?></p>
                    <p><b>Quantidade: </b> <?= $venda->quantidade ?></p>
                    <p><b>Unidade: </b> <?= $venda->unidade ?></p>
                    <p><b>Data Compra: </b> <?= $venda->data ?></p>
                    <p><b>Total: </b> R$ <?php echo number_format($venda->valorUN * $venda->quantidade, 2, ',', '.') ?></p>

                </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">não</button>
                <button type="button" class="btn btn-secondary" onclick="javascript: location.href='../controller/remove-vendas.php?id=<?= $venda->id ?>?qtd=<?= $venda->quantidade ?>'">Sim</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalView<?= $pago->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="exampleModalLabel">Visualização</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span>
                    <p><b>ID: </b> <?= $pago->id ?></p>
                    <p><b>Cliente: </b> <?= $pago->clientes ?> <b> COD: </b> <?= $pago->id_cli ?> </p>
                    <p><b>Produto: </b> <?= $pago->descricao ?> <b> COD: </b> <?= $pago->id_prod ?> </p>
                    <p><b>Observação: </b> <?= $pago->obs ?></p>
                    <p><b>Quantidade: </b> <?= $pago->quantidade ?></p>
                    <p><b>Data: </b> <?= $pago->data ?></p>
                    <p><b>Total: </b> R$ <?php echo number_format($pago->valorUN * $pago->quantidade, 2, ',', '.') ?></p>

                </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!--- MODAL NEW ---->


<div class="modal fade" id="modalNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3><i class="fas fa-shopping-basket"></i> <b>Nova Compra </b></h3>
            </div>
            <div class="modal-body">
                <div class="page-header">
                    <form action="../controller/adiciona-vendas.php" method="POST">
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="inputState">Cliente</label>
                                <select name="optid_cli" class="form-control">
                                    <?php foreach ($clientes as $c) : ?>
                                        <option value="<?php echo $c->id_cli ?>"> <?php echo $c->nome ?> - <?php echo $c->id_cli ?> </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="inputState">Produto</label>
                                <select name="optid_prod" class="form-control">
                                    <?php foreach ($produtos as $prod) : ?>
                                        <option value="<?php echo $prod->id_prod ?>"> <?= $prod->categoria ?> - <?= $prod->nome ?> - <?= $prod->unidade ?> </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Quantidade</label>
                                <input type="number" class="form-control" name="txtQuantidade" placeholder="Numeric">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="inputPassword4">Observação Compra</label>
                                <input type="text" class="form-control" name="txtObs" placeholder="Numeric">
                            </div>
                        </div>

                        

                        <div class="modal-footer text-center">
                            <button type="submit" class="btn btn-success btn-sm">Save <i class="fas fa-save"></i></button>
                            <button type="reset" class="btn btn-warning btn-sm">Clear <i class="fas fa-eraser"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>