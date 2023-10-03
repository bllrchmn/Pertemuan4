<!DOCTYPE html>
<html>
<head>
    <title>Grade</title>
</head>
<body>
    <h1>Struktur Kendali Percabangan Switch</h1>
    <form method="post" action="">
        <label for="nilai">Masukkan Nilai Anda : </label>
        <input type="text" name="nilai" id="nilai" required>
        <input type="submit" name="proses" value="Proses">
    </form>
    
    <?php
    if(isset($_POST['proses'])) {
        $nilai = intval($_POST['nilai']);

        if($nilai >= 80) {
            $indeks = 'A';
        } elseif($nilai >= 60) {
            $indeks = 'B';
        } elseif($nilai >= 30) {
            $indeks = 'C';
        } elseif($nilai >= 10) {
            $indeks = 'D';
        } else {
            $indeks = 'E';
        }

        echo "<p>Nilai Anda adalah: $nilai</p>";
        echo "<p>Indeks Anda adalah: $indeks</p>";
    }
    ?>
</body>
</html>