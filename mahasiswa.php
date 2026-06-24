<?php

    $koneksi = mysqli_connect("localhost", "root", "", "flrweeklyB-TI");

    $query = "SELECT * FROM mahasiswa";

   $result = mysqli_query($koneksi, $query); ///object 

    /// mysqli_fetch_row array numeric
    /// mysqli_fetch_assoc array associative
    /// mysqli_fetch_array array numeric/associative                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
    /// mysqli_fetch_object


?>

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

    <?php
    
        while ($mhs = mysqli_fetch_assoc($result)) {
    
    ?>
    <tr>
        <td><?php echo $mhs['id']; ?></td>
        <td><?php echo $mhs['nama']; ?></td>
        <td><?php echo $mhs['nim']; ?></td>
        <td><?php echo $mhs['prodi']; ?></td>
        <td><?php echo $mhs['email']; ?></td>
        <td><?php echo $mhs['no_hp']; ?></td>
        <td><img src="aset/logo.png" <?php echo $mhs['foto']; ?> alt="Foto Floura" width="20px"></td>
        <td>
            <a href="editdata.php"><button>Edit</button></a> |
            <a href="hapusdata.php"><button>Hapus</button></a> |
        </td>

    </tr>
    <?php
       }
    ?>
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