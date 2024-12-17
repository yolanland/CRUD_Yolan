<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>  
    <h2>Tambah Data Mahasiswa</h2>
    <form action="proses_tambah.php" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" require><br>

        <label>NIM:</label>
        <input type="text" name="nim" require><br>

        <label>Email:</label>
        <input type="email" name="email" require><br>

        <label>Nomor:</label>
        <input type="text" name="nomor" require><br>

        <label>Jurusan:</label>
        <select name="jurusan">
            <option value="1">ITK</option>
            <option value="2">KDG</option>
            <option value="3">ADM</option>
        </select>

        <input type="submit" value="Tambah">
    </form>
</body>

</html>