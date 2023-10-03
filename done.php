<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        echo "<h1>Data yang di kirimkan:</h1>";

        $nama = $_POST["nama"];
        echo "<p>Nama: $nama</p>";

        $email = $_POST["email"];
        echo "<p>Email: $email</p>";

        $umur = $_POST["umur"];
        echo "<p>Umur: $umur</p>";

        $prodi = $_POST["prodi"];
        echo "<p>Program Studi: $prodi</p>";

        $alamat = $_POST["alamat"];
        echo "<p>Alamat: $alamat</p>";

        $jenis_kelamin = $_POST["jenis_kelamin"];
        echo "<p>Jenis Kelamin: $jenis_kelamin</p>";

        $hobi = isset($_POST["hobi1"]) ? "Sepak Bola, " : "";
        $hobi .= isset($_POST["hobi2"]) ? "Badminton, " : "";
        $hobi .= isset($_POST["hobi3"]) ? "Renang, " : "";
        $hobi .= isset($_POST["hobi4"]) ? "Memasak, " : "";
        echo "<p>Hobi: $hobi</p>";
        
        $username = $_POST["username"];
        echo "<p>Username: $username</p>";

        $password = $_POST["password"];
        echo "<p>Password: $password</p>";

    } else {
        echo "<p>Data tidak dikirimkan melalui formulir.</p>";
    }
    ?>