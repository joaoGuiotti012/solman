<?php



?>
<div class="modal fade" id="exampleModal<?= $produto->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3><span class="glyphicon glyphicon-th-list"></span> <b> Editar Item </b></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="page-header">

                    <form action="../controller/altera-produtos.php" method="POST">
                        <div class="row">

                            <input type="hidden" name="id" value="<?php echo $produto->id ?>">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Descrição</label>
                                <input type="text" class="form-control" name="txtDescricao" placeholder="Descricao" value="<?= $produto->descricao ?>">
                            </div>
                            <div class=" form-group col-md-3">
                                <label for="inputPassword4">Quantidade</label>
                                <input type="number" step="0.01" class="form-control" name="txtQuantidade" value="<?= $produto->quantidade ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState">Unidade</label>
                                <select name="unidade" class="form-control">
                                    <option selected> <?= $produto->unidade ?></option>
                                    <option> UN </option>
                                    <option> KG </option>
                                    <option> GR </option>
                                    <option> KM </option>
                                    <option> CM </option>
                                    <option> MM </option>
                                </select>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-md-4">
                                <label for="inputState">Categoria</label>
                                <select name="categoria" class="form-control">
                                    <option> <?= $produto->categoria ?> </option>
                                    <option> Motocicleta </option>
                                    <option> Conversivel </option>
                                    <option> Tricicolo </option>
                                    <option> Bicicleta </option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">Valor</label>
                                <input type="number" step="0.01" class="form-control" name="txtValor" value="<?= $produto->valorUN ?>">
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success ">Save <i class="fas fa-save"></i> </button>
                <button type="reset" class="btn btn-warning " data-dismiss="modal" aria-label="Close">Close <i class="fas fa-times"></i></button>
            </div>
            </form>
        </div>
    </div>
</div>



<!-- Modal Remover-->
<div class="modal fade" id="modalRem<?= $produto->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Deseja realmente excluir este item ?</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span>
                    <p><b>ID: </b> <?= $produto->id ?></p>
                    <p><b>Descricao: </b> <?= $produto->descricao ?></p>
                    <p><b>Quantidade: </b> <?= $produto->quantidade ?></p>
                    <p><b>Categoria: </b> <?= $produto->categoria ?></p>
                    <p><b>Unidade: </b> <?= $produto->unidade ?></p>
                    <p><b>Descricao: </b> <?= $produto->valorUN ?></p>
                </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="javascript: location.href='../controller/remove-produtos.php?id=<?= $produto->id ?>'">Sim</button>

            </div>
        </div>
    </div>
</div>


<!-- MODAL NOVO ITEM -->
<div class="modal fade" id="modalNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3><span class="glyphicon glyphicon-th-list"></span> <b>Novo Item </b></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../controller/adiciona-produtos.php" method="POST">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Descrição</label>
                            <input type="text" class="form-control" name="txtDescricao" placeholder="Descricao">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputPassword4">Quantidade</label>
                            <input type="number" step="0.01" class="form-control" name="txtQuantidade" placeholder="...">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputState">Unidade</label>
                            <select name="unidade" class="form-control">
                                <option selected> UN </option>
                                <option> KG </option>
                                <option> GR </option>
                                <option> KM </option>
                                <option> CM </option>
                                <option> MM </option>
                            </select>
                        </div>
                    </div>

                    <div class="row">

                        <div class="form-group col-md-4">
                            <label for="inputState">Categoria</label>
                            <select name="categoria" class="form-control">
                                <option selected> Motocicleta </option>
                                <option> Conversivel </option>
                                <option> Tricicolo </option>
                                <option> Bicicleta </option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputZip">Valor</label>
                            <input type="number" step="0.01" class="form-control" name="txtValor">
                        </div>
                    </div>
                    <button type="reset" class="btn btn-warning btn-sm">Clear <i class="fas fa-eraser"></i></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Não</button>
                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </div>
            </form>
        </div>
    </div>
</div>