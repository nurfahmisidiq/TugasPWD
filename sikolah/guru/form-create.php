<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
    button {
        margin-left : 90px;
    }
    </style>
</head>
<body>
    <form action="create.php" method="post">
        <h1>
            Tambah Data Dosen
        </h1>
            <label for="">Nama guru :</label>
            <input type="text" class="form-input" name="nama_guru" >
            <br>
            <br>
            <label for="">Jumlah Jam :</label>
            <input type="number" class="form-input" name="jumlah_jam" >
            <br>
            <br>
            <label for="">Alamat :</label>
            <input type="text" name="alamat" class="form-input" value="">
            <br>
            <br>
            <label for="">Telepon :</label>
            <input type="text" class="form-input" name="telp" >
            <br>
            <br>
            <label for="">Email :</label>
            <input type="email" class="form-input" name="email" >
            <br>
            <br>
            <button type="submit" name="btnSimpan" onclick="return validasiDosen()">Simpan</button>
        </p>
    </form>
</body>
</html>
