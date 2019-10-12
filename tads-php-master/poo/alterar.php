<?php


            require "autoload.php";

            use Ifnc\Tads\Gateway\ProdutoGateway;

            $conn = new \PDO("sqlite:" . __DIR__ . "/database/tads.db");
            ProdutoGateway::setConnection($conn);
            $gw = new ProdutoGateway();
            $gw->find($_GET['id']);

                list (
                        "descricao" => $descricao,
                        "estoque"=> $estoque,
                        "preco_custo "=> $preco_custo,
                        "preco_venda"=> $preco_venda,
                        "codigo_barras"=> $codigo_barras,
                        "origem"=> $origem
                ) = $_POST;


    $data->id = "";
    $data->descricao = $descricao;
    $data->estoque = $estoque;
    $data->preco_venda = $preco_venda;
    $data->preco_custo = $preco_custo;
    $data->codigo_barras = $codigo_barras;
    $data->data_cadastro = date('Y-m-d');
    $data->origem = $origem;
    $gw->update($data);

            header("Location:index.php");
    ?>


</body>
</html>
