



<div class="modal fade" id="modalNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="text-center"><span class="glyphicon glyphicon-th-list"></span> <b>Novo Item </b></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">

                <form action="../controller/adiciona-clientes.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nome</label>
                            <input type="text" class="form-control" name="txtNome" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Sobrenome</label>
                            <input type="text" class="form-control" name="txtSobrenome" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Fone</label>
                            <input type="text" class="form-control" id="txtFone" name="txtFone" placeholder="(00)99999-9999">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">CPF</label>
                            <input type="text" class="form-control" id="txtCPF" name="txtCPF" placeholder="000.000.000-00">
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" name="txtEmail" placeholder="bobss@gmail.com">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputAddress">Endereço</label>
                        <input type="text" class="form-control" name="txtEndereco" placeholder="Rua dos Bobos, nº 0">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputAddress2">Complemento</label>
                        <input type="text" class="form-control" name="txtComplemento" placeholder="Apartamento, hotel, casa, etc.">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputCity">Cidade</label>
                            <select name="optCidade" class="form-control">
                                <option selected>Escolher...</option>
                                <option>Candido Mota</option>
                                <option>Assis</option>
                                <option>Maracai</option>
                                <option>Presidente Prudente</option>
                                <option>Ourinhos</option>
                                <option>Mato Grosso</option>
                                <option>Mato Grosso do Sul</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputEstado">Estado</label>
                            <select name="optEstado" class="form-control">
                                <option selected>Escolher...</option>
                                <option>SP</option>
                                <option>AC</option>
                                <option>PR</option>
                                <option>SG</option>
                                <option>SC</option>
                                <option>MG</option>
                                <option>MS</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputCEP">CEP</label>
                            <input type="text" class="form-control" id="txtCEP" name="txtCEP">
                        </div>
                    </div>
                    <br>
                    <div class="modal-footer form-group text-center ">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                        <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Remover-->
<div class="modal fade" id="modalRem<?= $cli->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Deseja realmente excluir este cliente ?</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span>
                    <p><b>ID: </b> <?= $cli->id ?></p>
                    <p><b>Nome: </b> <?= $cli->nome ?></p>
                    <p><b>Email: </b> <?= $cli->email ?></p>
                    <p><b>Fone: </b> <?= $cli->telefone ?></p>
                    <p><b>CPF: </b> <?= $cli->cpf ?></p>
                    <p><b>Endereco: </b> <?= $cli->endereco ?></p>
                    <p><b>Complemento: </b> <?= $cli->complemento ?></p>
                    <p><b>Cidade: </b> <?= $cli->cidade ?></p>
                    <p><b>Estado: </b> <?= $cli->estado ?></p>
                    <p><b>CEP: </b> <?= $cli->cep ?></p>
                </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                <button type="button" class="btn btn-primary" onclick="javascript: location.href='../controller/remove-clientes.php?id=<?= $cli->id ?>'">Sim</button>
            </div>
        </div>
    </div>
</div>


<!-- MODAL ALTERA CLIENTE -->
<div class="modal fade" id="modalEdit<?= $cli->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3><span class="glyphicon glyphicon-th-list"></span> <b>Alterar Cliente </b></h3>
            </div>
            <div class="modal-body">
                <form action="../controller/altera-clientes.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Nome Completo</label>
                            <input type="text" class="form-control" name="txtNome" placeholder="" value="<?= $cli->nome ?>">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Fone</label>
                            <input type="text" class="form-control" id="txtFone" name="txtFone" placeholder="(00)99999-9999" value="<?= $cli->telefone ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">CPF</label>
                            <input type="text" class="form-control" id="txtCPF" name="txtCPF" placeholder="000.000.000-00" value="<?= $cli->cpf ?>">
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" name="txtEmail" placeholder="bobss@gmail.com" value="<?= $cli->email ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputAddress">Endereço</label>
                        <input type="text" class="form-control" name="txtEndereco" placeholder="Rua dos Bobos, nº 0" value="<?= $cli->endereco ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputAddress2">Complemento</label>
                        <input type="text" class="form-control" name="txtComplemento" placeholder="Apartamento, hotel, casa, etc." value="<?= $cli->complemento ?>">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Cidade</label>
                            <select name="optCidade" class="form-control">
                                <option selected><?= $cli->cidade ?></option>
                                <option>Candido Mota</option>
                                <option>Assis</option>
                                <option>Maracai</option>
                                <option>Presidente Prudente</option>
                                <option>Ourinhos</option>
                                <option>Mato Grosso</option>
                                <option>Mato Grosso do Sul</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEstado">Estado</label>
                            <select name="optEstado" class="form-control">
                                <option selected><?= $cli->estado ?></option>
                                <option>SP</option>
                                <option>AC</option>
                                <option>PR</option>
                                <option>SG</option>
                                <option>SC</option>
                                <option>MG</option>
                                <option>MS</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputCEP">CEP</label>
                        <input type="text" class="form-control" id="txtCEP" name="txtCEP" value="<?= $cli->cep ?>">
                    </div>
                    <br>
                    <div class="form-group text-center ">
                        <input type="hidden" name="txtID" value="<?= $cli->id ?>">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                        <button type="submit" class="btn btn-success btn-sm">Salvar Mudanças</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>