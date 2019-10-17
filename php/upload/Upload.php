<?php
include("../model/banco.php");

$pdo = Banco::Conectar();


$SQL = "select * from arquivo";
$mostrar = $pdo->query($SQL)->fetchAll(PDO::FETCH_OBJ);


$msg = false;
if (isset($_FILES['arquivo'])) {
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $dir = "C:/xampp/htdocs/upload/";

    move_uploaded_file($_FILES['arquivo']['name'], $dir . $novo_nome);

    $sql = "INSERT INTO arquivo (cod, arquivo, data) VALUE ( null, '$novo_nome', NOW())";
    if ($pdo->query($sql))
        $msg = "Arquivo enviado com sucesso. !";
    else
        $msg = "Erro ao subir o arquivo. !";
}
?>
<form action="Upload.php" method="POST" enctype="multipart/form-data">
    <label for="inputPassword4">Upload Arquivo </label>
    <input type="file" class="form-control" name="arquivo">
    <button type="submit"> Salvar</button>
</form>


<?php echo '<h3>  ';

foreach($mostrar as $m){

    echo 'cod => '. $m->cod. '<br>';
    echo 'nome => '.$dir.$m->arquivo .'<br>';
    echo 'data => '.$m->data .'<br>';
    $aq = $m->arquivo;
    echo '<img src="'.$dir.$aq.'" alt="" width="30%" height="200px"> ' ;
}


?>
