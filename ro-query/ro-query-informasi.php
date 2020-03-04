<?php
include '../ro-databases/koneksi.php';  
if($_SERVER["REQUEST_METHOD"] == "GET"){
if(empty($_GET["detail"])){
	//
}else{
$query_info=mysqli_prepare($koneksi,"select * from ro_informasi where id_informasi= ?") or die(mysqli_error());
$id_informasi=mysqli_real_escape_string($koneksi,$_GET["id_informasi"]);
//bind
mysqli_stmt_bind_param($query_info,"s",$id_informasi);
//execute
mysqli_stmt_execute($query_info);
//result
$result=mysqli_stmt_get_result($query_info);
//fetch
$dta_get=mysqli_fetch_array($result);
$id_informasi=$dta_get["id_informasi"];
$judul=$dta_get["judul"];
$detail_informasi=$dta_get["detail_informasi"];
}
}
?>
