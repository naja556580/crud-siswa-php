<?php
$koneksi = mysqli_connect("localhost", "root", "", "crud_tugas");
$result = mysqli_query($koneksi, "SELECT * FROM siswa");
?>

<h2>Data Siswa</h2>
<a href="tambah.php">Tambah Data</a>
<br><br>
<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["kelas"]; ?></td>
        <td>
            <a href="edit.php?id=<?= $row["id"]; ?>">Edit</a> | 
            <a href="hapus.php?id=<?= $row["id"]; ?>">Hapus</a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>
</table>