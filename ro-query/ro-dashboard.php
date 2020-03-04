<?php
//query siswa
$query_depan="SELECT SUM(IF(status_pendaftaran='Diterima',1,0)) AS jml_diterima,
SUM(IF(status_pendaftaran='Belum Diverifikasi',1,0)) AS jml_verifikasi, SUM(IF(status_pendaftaran='Tidak Diterima',1,0)) AS jml_ditolak  from ro_formulir";
$perintah=mysqli_query($koneksi,$query_depan);
$data=mysqli_fetch_array($perintah);
//query tamu

?>