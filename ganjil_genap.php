<!DOCTYPE html>
<html>
<head>
    <title>Cek Ganjil atau Genap</title>
</head>
<body>
    <h2>Cek Ganjil atau Genap</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="angka" placeholder="Masukkan angka" required>
        <input type="submit" name="cek" value="Cek">
    </form>

    <?php
    if (isset($_POST['cek'])) {
        $angka = $_POST['angka'];

        // Memeriksa apakah angka ganjil atau genap
        if ($angka % 2 == 0) {
            echo "$angka adalah angka genap.";
        } else {
            echo "$angka adalah angka ganjil.";
        }
    }
    ?>
</body>
</html>