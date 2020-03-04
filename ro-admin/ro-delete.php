<?php
include('../ro-databases/session.php');
include('../ro-databases/koneksi.php');
//if(isset($_GET['id']) and $_GET['id']!=""){
$edit=$_GET['del'];
$sql=sprintf("delete from ro_formulir where id=%d",$edit);
$del=mysqli_query($koneksi,$sql);
if($del){
echo "<script>alert('Data berhasil dihapus!')</script>";			
echo "<script>window.open('lihat','_self')</script>";
}else{
	echo "Perubahan data gagal=<br/>".mysqli_error();
}
//}

?>

