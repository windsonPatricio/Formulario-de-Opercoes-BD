<!DOCTYPE HTML>
<html>
<head>
    <title>Exemplo</title>
</head>
<body>

<?php
    $idade = (int)$_GET["idade"];
    if($_GET["idade"]>=18){
        echo "Maior Idade!". PHP_EOL;
    }else{
        echo "Menor Idade!". PHP_EOL;
    }

    for($i=0;$i<$_GET["numero"];$i++){
        echo "<p>".($_GET["numero"]-$i)."</p>";
    }



?>

<?php for($i=0;$i<$_GET["numero"];$i++){?>
    <p><?=$_GET["numero"]-$i?></p>
<?php }?>



</body>
</html>