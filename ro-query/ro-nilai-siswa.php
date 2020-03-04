<?php
include('../ro-includes/variabel-siswa.php');
if($_SERVER["REQUEST_METHOD"] == "GET"){
if(empty($_GET["nilai"])){
	//
}else{
$query_nilai=mysqli_prepare($koneksi,"select * from ro_nilai_un where nisn= ?") or die(mysqli_error());
$nilai=mysqli_real_escape_string($koneksi,$_GET["nilai"]);
//bind
mysqli_stmt_bind_param($query_nilai,"s",$nilai);
//execute
mysqli_stmt_execute($query_nilai);
//result
$result=mysqli_stmt_get_result($query_nilai);
//fetch
$dta_nilai=mysqli_fetch_array($result);
$nisn=$dta_nilai["nisn"];
$nama_siswa=$dta_nilai["nama_siswa"];
$ipa=$dta_nilai["ipa"];
$matematika=$dta_nilai["matematika"];
$bahasa_indonesia=$dta_nilai["bahasa_indonesia"];
$bahasa_ingris=$dta_nilai["bahasa_ingris"];
}
}
?>
