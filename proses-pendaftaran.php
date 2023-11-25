<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['Daftar'])){
 // ambil data dari formulir
 $nama_santri = $_POST['nama_santri'];
 $nama_walisantri = $_POST['nama_walisantri'];
 $ttl = $_POST['ttl'];
 $jenis_kelamin = $_POST['jenis_kelamin'];
 $kelas = $_POST['kelas'];
 $no_hp_walisantri= $_POST['no_hp_walisantri'];
 $alamat = $_POST['alamat'];
 // buat query
 $sql = "INSERT INTO calon_santri (nama_santri, nama_walisantri, ttl, jenis_kelamin, kelas, no_hp_walisantri, alamat) VALUE ('$nama_santri', '$nama_walisantri','$ttl', '$jenis_kelamin', '$kelas', '$no_hp_walisantri', '$alamat')";
 $query = mysqli_query($conn, $sql);
 // apakah query simpan berhasil?
 if( $query ) {
 // kalau berhasil alihkan ke halaman index.php dengan status=sukses
 header('Location: index.php?status=sukses');
 } else {
 // kalau gagal alihkan ke halaman indek.php dengan status=gagal
 header('Location: daftar.php?status=gagal');
 }
} else {
die("Akses dilarang...");
}
?>