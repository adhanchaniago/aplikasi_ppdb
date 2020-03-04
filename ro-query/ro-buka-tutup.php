<?php
$perintah_kunci="SELECT * FROM ro_pengaturandaftar"; 
$query_kunci=mysqli_query($koneksi,$perintah_kunci); 
$data_kunci=mysqli_fetch_array($query_kunci); 
$status_kunci="Tutup"; 
if($data_kunci['setdaftar']==$status_kunci){ 
   echo '<script language="javascript">document.location="tutup";</script>';
}else //aktif
?>