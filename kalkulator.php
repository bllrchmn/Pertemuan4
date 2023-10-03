<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="angka1" placeholder="Masukkan angka pertama" required>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="angka2" placeholder="Masukkan angka kedua" required>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];

        // Melakukan perhitungan berdasarkan operator yang dipilih
        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    echo "Pembagian dengan nol tidak diperbolehkan.";
                }
                break;
            default:
                echo "Operator tidak valid.";
        }

        // Menampilkan hasil perhitungan
        echo "Hasil: $angka1 $operator $angka2 = $hasil";
    }
    ?>
</body>
</html>