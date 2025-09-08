<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator ARRAY MAP</title>
    <?php include "style.php"; ?>
</head>
<body>
<div class="container">
<h2>Kalkulator ARRAY MAP</h2>
<form method="post">
    <input type="text" name="data" placeholder="Angka dipisah koma (2,4,6)" required>
    <input type="text" name="op" placeholder="Operator (+5, *2, dll)" required>
    <input type="submit" value="Proses">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $data = explode(",", $_POST['data']);
    $op = $_POST['op'];
    $hasil = array_map(function($n) use ($op) {
        eval("\$res = $n$op;");
        return $res;
    }, $data);
    echo "<div class='result'>Hasil Array: " . implode(", ", $hasil) . "</div>";
}
?>
</div>
</body>
</html>