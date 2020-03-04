<?php
include('../ro-includes/variabel-siswa.php');
if($_SERVER["REQUEST_METHOD"] == "GET"){
if(empty($_GET["edit"])){

}else{
$query_edit=mysqli_prepare($koneksi,"select * from ro_formulir where nisn= ?") or die(mysqli_error());
$edit=mysqli_real_escape_string($koneksi,$_GET["edit"]);
//bind
mysqli_stmt_bind_param($query_edit,"s",$edit);
//execute
mysqli_stmt_execute($query_edit);
//result
$perintah=mysqli_stmt_get_result($query_edit);
//fetch
$dta_sws=mysqli_fetch_array($perintah);
$id=$dta_sws['id'];
$nama_siswa=$dta_sws['nama_siswa'];
$nisn=$dta_sws['nisn'];
$status_pendaftaran=$dta_sws['status_pendaftaran'];
}
}
?>

