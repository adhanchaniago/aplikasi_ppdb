s<?php
//Use Prepare Data
$cek_nisn=mysqli_prepare($koneksi, "SELECT nisn FROM ro_formulir WHERE nisn = ?") or die(mysqli_error());
$nisnpost=mysqli_real_escape_string($koneksi,$_POST['nisn']);
//bind
mysqli_stmt_bind_param($cek_nisn,"s",$nisnpost);
//execute
mysqli_stmt_execute($cek_nisn);
//result
$result=mysqli_stmt_get_result($cek_nisn);
//fetch array
$data_nisn=mysqli_fetch_array($result);
?>
