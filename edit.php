php<?php
$koneksi = mysqli_connect("localhost", "root", "", "crud_tugas");

$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    
    mysqli_query($koneksi, "UPDATE siswa SET nama='$nama', kelas='$kelas' WHERE id=$id");
    echo "<script>alert('Data berhasil diubah');document.location.href='index.php';</script>";
}
?>

<h2>Edit Data Siswa</h2>
<form action="" method="post">
    Nama: <input type="text" name="nama" value="<?= $row['nama']; ?>" required><br><br>
    Kelas: <input type="text" name="kelas" value="<?= $row['kelas']; ?>" required><br><br>
    <button type="submit" name="submit">Update Data</button>
</form>
<br>
<a href="index.php">Kembali</a>