<?php


require "autoload.php";

use Ifnc\Tads\Gateway\ProdutoGateway;

$conn = new \PDO("sqlite:" . __DIR__ . "/database/tads.db");
ProdutoGateway::setConnection($conn);
$gw = new ProdutoGateway();
$gw->find($_GET['id']);
//header("Location:index.php");

$coisa = $data-> descrição;

$sql = <<<SQL
                <label>Descricao</label>
                <input type="impu" class="form-control" name="descricao" placeholder="{$coisa}">
        SQL;
?>