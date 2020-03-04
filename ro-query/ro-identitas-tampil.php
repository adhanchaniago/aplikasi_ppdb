<?php
$sql_identitasset="SELECT * FROM ro_identitas_sekolah";
$perintah_identitasset=mysqli_query($koneksi,$sql_identitasset);
$row=mysqli_fetch_array($perintah_identitasset);
?>