php<?php
$koneksi = mysqli_connect("localhost", "root", "", "crud_tugas");

if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $jurusan = $_POST["jurusan"];
    
    $query = mysqli_query($koneksi, "INSERT INTO siswa (nama, kelas, jurusan) VALUES ('$nama', '$kelas', '$jurusan')");
    
    if(!$query){
        die("Error: " . mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil ditambah');document.location.href='index.php'</script>";
    }
}
?>

<h2>Tambah Data Siswa</h2>
<form action="" method="post">
    Nama: <input type="text" name="nama" required><br><br>
    Kelas: <input type="text" name="kelas" required><br><br>
    Jurusan: <input type="text" name="jurusan" required><br><br>
    <button type="submit" name="submit">Tambah Data</button>
</form>
<br>
<a href="index.php">Kembali</a>
