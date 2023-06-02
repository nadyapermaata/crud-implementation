<?php
include("config.php");

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    move_uploaded_file($tmp, $path);

    $sql = "Insert into daftar_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) value ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
}
else{
    die("Akses dilarang...");
}