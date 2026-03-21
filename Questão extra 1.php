<form method="POST">
    Número: <input type="number" name="n">
    <input type="submit" value="Enviar">
</form>

<?php
if(isset($_POST["n"])){

    $n = $_POST["n"];

    $quantidade = $n;

    echo "Quantidade de números: $quantidade";

}
?>