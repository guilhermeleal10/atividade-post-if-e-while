<form method="POST">
    Número: <input type="number" name="n">
    <input type="submit" value="Enviar">
</form>

<?php
if(isset($_POST["n"])){

    $n = $_POST["n"];

    $i = 1;
    $soma = 0;

    while($i <= $n){
        $soma += $i;
        $i++;
    }

    $media = $soma / $n;

    echo "Média dos números de 1 até $n: $media";

}
?>