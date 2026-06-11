<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
      <link rel="stylesheet" href="aset/css/style.css">
</head>
<body>
    <h1 align = "center" >
   DATA MAHASISWA
</h1>
<table border = "1" align = "center" cellspacing = "0" cellpadding = "10px">
  <tr>
    <td><a href = "index.php" > home</a></td>
    <td><a href = "profil.php" > profil</a></td>
    <td><a href = "Deskripsi.php" > deskripsi</a></td>
    <td><a href = "mahasiswa.php" > data mahasiswa</a></td>
    <td><a href = "tambahdata.php" > tambah data</a></td>
  </tr>
</table>
    <h2>Data Mahasiswa
    <a href="tambahdata.php"><button>Tambah Data</button></a></h2>
<table border="1"cellpadding="5px"
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Program Studi</th>
        <th>Email</th>
        <th>Nomor Whatsapp</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Floura Fauziyah Husen</td>
        <td>13242520045</td>
        <td>Teknologi Informasi</td>
        <td>fauziyahfloura@gmail.com</td>
        <td>085150704675</td>
        <td><img src="aset/logo.png" alt="Foto Floura" width="20px"></td>
        <td>
            <a href="editdata.php"><button>Edit</button></a> |
            <a href="hapusdata.php"><button>Hapus</button></a> |
        </td>

    </tr>
</table>
<h2>Latihan</h2>
<table border="1"cellpadding="5px"
    <tr>
        <td> Baris 1,kolom 1</td>
        <td> Baris 1,kolom 2</td>
        <td> Baris 1,kolom 3</td>
        <td> Baris 1,kolom 4</td>
    </tr>
    <tr>
        <td> Baris 2,kolom 1</td>
        <td rowspan="2" colspan="2" align = "center"> ? </td>
        <!-- <td> Baris 2,kolom 3</td> -->
        <td> Baris 2,kolom 4</td>
    </tr>
    <tr>
        <td> Baris 3, kolom 1</td>
        <td> Baris 3, kolom 4</td>
        <!-- <td> Baris 3, kolom 3</td>
        <td> Baris 3, kolom 4</td> -->
    </tr>
    <tr>
        <td> Baris 4, kolom 1</td>
        <td> Baris 4, kolom 2</td>
        <td> Baris 4, kolom 3</td>
        <td> Baris 4, kolom 4</td>
    </tr>
</table>
</body>
</html>