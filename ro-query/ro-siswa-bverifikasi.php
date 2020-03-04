<?php
//penomoran dari satu

$awal=0;
$perintah="SELECT * FROM ro_formulir where status_pendaftaran='Belum Diverifikasi'";
$nom="$awal";
$nom2=sprintf("%s",$perintah,$nom);
$query=mysqli_query($koneksi,$nom2);
$jumlah_siswa=mysqli_num_rows($query);
?>