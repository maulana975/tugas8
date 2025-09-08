<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator EVAL</title>
    <?php include "style.php"; ?>
</head>
<body>
<div class="container">
<h2>Kalkulator EVAL</h2>
<form method="post">
    <input type="text" name="exp" placeholder="Masukkan ekspresi (contoh: 5+3*2)" required>
    <input type="submit" value="Hitung">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $exp = $_POST['exp'];
    eval("\$hasil = $exp;");
    echo "<div class='result'>Hasil = $hasil</div>";
}
?>
</div>
</body>
</html>