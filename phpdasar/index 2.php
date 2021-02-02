<?php
// koneksi ke database

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) tabel mahasiswa dari object result
// mysqli_fetch_row()
// mysqli_fetch_assoc()
// mysqli_fetch_array()
// mysqli_fetch_object()

// while ( $mhs = mysqli_fetch_assoc($result) ) { 
//   var_dump($mhs);

// }


?>


<!DOCTYPE html>
<html lang="en">

<head>

 
  <title>Halaman admin</title>

 
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <table border="1" cellpadding="10" cellspacing="0"> 

    <tr>
      <td>No.</td>
       <td>Aksi</td>
      <td>gambar</td>
      <td>nrp</td>
      <td>nama</td>
      <td>email</td>
      <td>jurusan</td>
     
    </tr>
<?php $i = 1; ?>
<?php while ($row = mysqli_fetch_assoc($result)) :  ?>

    <tr>
      <td><?= $i; ?></td>
      <td>
        <a href="">ubah</a> |
        <a href="">hapus</a>
      </td>
      <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
      <td><?= $row["nrp"]; ?></td>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["email"]; ?></td>
      <td><?= $row["jurusan"]; ?></td>

    </tr>
  <?php $i++;?>
    <?php endwhile; ?>

  </table>
</body>