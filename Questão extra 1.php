<form method="POST">
    Número: <input type="number" name="n">
    <input type="submit">
</form>
<?php
$N = $_POST["N"];
$i = 1;
$contador = 0;

while ($i <= $N) {
    $contador++;
    $i++;
}

echo "Quantidade: " . $contador;
?>