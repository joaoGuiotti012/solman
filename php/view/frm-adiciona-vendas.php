<?php


?>



<div class="page-header">
    <h3><span class="glyphicon glyphicon-th-list"></span> <b> New Item </b></h3>
    <br><br>
    <form action="../controller/adiciona-produtos.php" method="POST">
        <div class="row">
            <div class="form-group col-md-3">
                <label for="inputState">Cliente</label>
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
        <div class="form-group col-md-3">
            <label for="inputPassword4">Quantidade</label>
            <input type="number" class="form-control" name="txtQuantidade" placeholder="Numeric">
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
            <div class="form-group col-md-2">
                <label for="inputZip">Valor</label>
                <input type="number" class="form-control" name="txtValor">
            </div>
        </div>
        <div class="container-fluid row">
            <button type="submit" class="btn btn-success btn-sm">Save <i class="fas fa-save"></i></button>
            <button type="reset" class="btn btn-warning btn-sm">Clear <i class="fas fa-eraser"></i></button>
        </div>
    </form>
</div>

<?php include_once('footer.php'); ?>