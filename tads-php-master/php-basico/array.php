<?php
    $nomes = array("ana","bia","carol",1,2,3);
    print_r($nomes);
    $frutas = ["uva","laranja"];
    print_r($frutas);
    echo count($frutas).PHP_EOL;;
    for($i=0;$i<count($frutas);$i++){
        echo $frutas[$i].PHP_EOL;
    }
    $frutas[]="banana";
    array_push($frutas,"graviola","maça");
    print_r($frutas);
    //unset($frutas[1]);
    array_splice($frutas,1,1);
    print_r($frutas);

    $estoque = [
        "caneta"=>100,
        "borracha"=>50,
        "caderno"=>20
    ];

    print_r($estoque);
    echo $estoque["caneta"].PHP_EOL;

    foreach($estoque as $produto => $qt){
        echo "$produto:$qt".PHP_EOL;
    }

    $cars = array
    (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );
    echo $cars[0][0].PHP_EOL;


    $aluno = [
        "mat"=>"123",
        "nome"=>"Ana",
        "idade"=>17,
        "curso"=>"adm"
    ];

    list("mat"=>$mat,"nome"=>$nome)=$aluno;

    echo "<tr><td>mat:$mat</td><td>nome:$nome</td></tr>";
