<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator IF ELSE IF</title>
    <?php include "style.php"; ?>
</head>
<body>
<div class="container">
<h2>Kalkulator IF ELSE IF</h2>
<form method="post">
    <input type="number" name="a" placeholder="Angka 1" required>
    <input type="number" name="b" placeholder="Angka 2" required>
    <input type="text" name="op" placeholder="Operator (+, -, *, /)" required>
    <input type="submit" value="Hitung">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $op = $_POST['op'];
    if ($op == "+") {
        $hasil = $a + $b;
    } elseif ($op == "-") {
        $hasil = $a - $b;
    } elseif ($op == "*") {
        $hasil = $a * $b;
    } elseif ($op == "/") {
        $hasil = ($b != 0 ? $a / $b : "Tidak bisa dibagi 0");
    } else {
        $hasil = "Operator tidak dikenali";
    }
    echo "<div class='result'>Hasil = $hasil</div>";
}
?>
</div>
</body>
</html>