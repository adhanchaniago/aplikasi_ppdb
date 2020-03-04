<?php
$perintah_kunci="SELECT * FROM ro_pengaturanpengumuman"; 
$query_kunci=mysqli_query($koneksi,$perintah_kunci); 
$data_kunci=mysqli_fetch_array($query_kunci); 
$status_pengumuman="Tutup"; 
if($data_kunci['setpengumuman']==$status_pengumuman){ 
   echo '<script language="javascript">document.location="pengumuman";</script>';
}else //aktif
?>