<?php
session_start();
include('../ro-databases/koneksi.php');
if(isset($_POST['login'])){
//prepare
$sql= mysqli_prepare($koneksi,"SELECT * FROM ro_user WHERE username=? AND password=?") or die(mysqli_error());
$username = $_POST['username'];
$password = md5($_POST['password']);
//bind param
mysqli_stmt_bind_param($sql,"ss",$username,$password);
//eksekusi
mysqli_stmt_execute($sql);
//result
$result=mysqli_stmt_get_result($sql);

if(mysqli_num_rows($result) == 0){
echo '<script language="javascript">alert("Gagal login!"); document.location="login";</script>';
}else{
$row = mysqli_fetch_assoc($result);
if($row['level'] == 1){
//jika login dengan level 1 buat session user
$_SESSION['admin']=$user;
echo '<script language="javascript">alert("Berhasil login!"); document.location="beranda";</script>';
}
}
//
}


?>
