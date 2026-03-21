<form method="POST">
    Número: <input type="number" name="n">
    <input type="submit">
</form>
<?php
if(isset($_POST["n"])){

    $n = $_POST["n"];

    $i = 1;
    $soma = 0;
    $quantidade = 0;

    while($i <= $n){
        $soma += $i;
        $quantidade++;
        $i++;
    }

    $media = $soma / $quantidade;

    echo "Quantidade de números: " . $quantidade . "<br>";
    echo "Média: " . $media;
}
?>