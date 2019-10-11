<?php
    function viewProduto($produto):string{
        $total=$produto->valor*$produto->quantidade;
        return <<<STR
            <tr>
                <th>{$produto->item}</th>
                <td>{$produto->valor}</td>
                <td>{$produto->quantidade}</td>
                <td>{$total}</td>
            </tr>
         STR;
    }
    function viewProdutos(array $produtos):string {
        return implode("",array_map("viewProduto",$produtos));
    }
