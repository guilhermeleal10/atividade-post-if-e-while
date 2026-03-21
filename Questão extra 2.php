<form method="POST">
    Número: <input type="number" name="n">
    <input type="submit">
</form>
<?php
$N = $_POST["N"];
$i = 1;
$soma = 0;

while ($i <= $N) {
    $soma += $i;
    $i++;
}

$media = $soma / $N;
echo "Média: " . $media;
?>