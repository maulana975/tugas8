<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator FUNCTION</title>
    <?php include "style.php"; ?>
</head>
<body>
<div class="container">
<h2>Kalkulator FUNCTION</h2>
<form method="post">
    <input type="number" name="a" placeholder="Angka 1" required>
    <input type="number" name="b" placeholder="Angka 2" required>
    <input type="text" name="op" placeholder="Operator (+, -, *, /)" required>
    <input type="submit" value="Hitung">
</form>
<?php
function kalkulasi($a, $b, $op) {
    switch ($op) {
        case "+": return $a + $b;
        case "-": return $a - $b;
        case "*": return $a * $b;
        case "/": return $b != 0 ? $a / $b : "Tidak bisa dibagi 0";
        default: return "Operator tidak dikenali";
    }
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $hasil = kalkulasi($_POST['a'], $_POST['b'], $_POST['op']);
    echo "<div class='result'>Hasil = $hasil</div>";
}
?>
</div>
</body>
</html>