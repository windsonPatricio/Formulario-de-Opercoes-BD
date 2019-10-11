<?php
    $nome = "Ana";
    echo '$nome'.PHP_EOL;
    echo "$nome".PHP_EOL;

    $fruta = "uva";

    echo "temos quatro ${fruta}s".PHP_EOL;

    $nomes = array("ana","bia","carol",1,2,3);

    echo "$nomes[0]".PHP_EOL;

    $estoque = [
        "caneta"=>100,
        "borracha"=>50,
        "caderno"=>20
    ];

    echo "$estoque[caneta]".PHP_EOL;

class people {
    public $john = "John Smith";
    public $jane = "Jane Smith";
    public $robert = "Robert Paulsen";

    public $smith = "Smith";
}

$people = new people();

echo "$people->jane".PHP_EOL;

echo "Inicial:{$people->jane[0]}".PHP_EOL;

$var = "fruta";

echo "$var:{${$var}}".PHP_EOL;

$nome = "jane";
echo $people->{$nome};

$str = <<<EOD
Exemplo de uma string
distribuída em várias linhas
utilizando a sintaxe heredoc.
EOD;
echo $str;

/* Exemplo mais complexo, com variáveis */
class foo
{
    var $foo;
    var $bar;

    function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'Meu nome';

echo <<<EOT
Meu nome é "$name". Eu estou imprimindo $foo->foo.
Agora, eu estou imprimindo {$foo->bar[1]}.
Isto deve imprimir um 'A' maiúsculo: \x41
EOT;
