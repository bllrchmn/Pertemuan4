<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
</head>
<body>
    <h1>Halaman Register</h1>
    <form action="done.php" method="post">

    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama"><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <label for="umur">Umur : </label>
    <input type="number" name="umur"><br><br>

    <label for="programstudi">Program Studi :</label>
    <select name="prodi" id="prodi">
        <option value="none">None</option>
        <option value="mi">Manajemen Informatika</option>
        <option value="ti">Teknik Informatika</option>
        <option value="si">Sistem Informasi</option>
        <option value="rpl">Rekayasa Perangkat Lunak</option>
        <option value="mm">Multimedia</option>
    </select>

    <br>
    <br>

    <label for="alamat">Alamat:</label><br>
    <textarea id="alamat" name="alamat" rows="7" cols="50"></textarea><br><br>

    <label>Jenis Kelamin: </label>
    <input type="radio" name="jenis_kelamin" value="laki">
    <label for="laki_laki">Laki-laki</label>
    <input type="radio" name="jenis_kelamin" value="Perempuan">
    <label for="perempuan">Perempuan</label><br><br>

    <label for="hobi">Hobi : </label><br>
    <input type="checkbox" name="hobi1" value="sepakbola">Sepak Bola<br>
    <input type="checkbox" name="hobi2" value="badminton">Badminton<br>
    <input type="checkbox" name="hobi3" value="renang">Renang<br>
    <input type="checkbox" name="hobi4" value="memasak">Memasak<br><br>

    <label for="username">Username: </label>
    <input type="text" name="username"><br><br>

    <label for="password">Password: </label>
    <input type="password" name="password"><br><br>

    <button type="submit">Simpan</button>
    </form>
</body>
</html>