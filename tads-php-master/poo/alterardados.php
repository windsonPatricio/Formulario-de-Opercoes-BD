
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form  class="well form-horizontal" action="atualizar.php" method="post">
    <?php
    require "autoload.php";
    use Ifnc\Tads\Gateway\ProdutoGateway;
    $conn = new \PDO("sqlite:" . __DIR__ . "/database/tads.db");
    ProdutoGateway::setConnection($conn);
    $gw = new ProdutoGateway();
    $produtos = $gw->find($_GET['id']);
    $produto = $produtos[0];
    ?>
    <div class="col-sm-70">
        <div class="col-sm-6">
            <div class = "container" >
            <label>Descricao</label>
            <input type="hidden" name ="id" value="<?=$id=$_GET['id']?>">
            <input type="imput" class="form-control" name="descricao" value= "<?=$produto->descricao?>" >
            <label>Estoque</label>
            <input type="imput" class="form-control" name="estoque" value= "<?=$produto->estoque?>" >
            <label>Preco de Custo</label>
            <input type="imput" class="form-control" name="preco_custo" value= "<?=$produto->preco_custo?>" >
            <label>Preco de Vendas</label>
            <input type="imput" class="form-control" name="preco_venda" value= "<?=$produto->preco_venda?>" >
            <label>Codigo de Barras</label>
            <input type="imput" class="form-control" name="codigo_barras" value= "<?=$produto->codigo_barras?>" >
            <label>Origem</label>
            <input type="imput" class="form-control" name="origem" value= "<?=$produto->origem?>" >
        </div>
        </div>
       <input class="btn btn-primary" type="submit" value="atualizar" id="tbn">
    </div>


</form>

</html>




