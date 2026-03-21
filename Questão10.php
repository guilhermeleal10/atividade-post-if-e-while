<form method="POST">
    Número: <input type="number" name="n">
    <input type="submit">
</form>
<?php
if(isset($_POST["n"])){
    $n = $_POST["n"];

    if($n < 20){
        echo "Baixo";
    } elseif($n <= 50){
        echo "Médio";
    } else {
        echo "Alto";
    }
}
?>