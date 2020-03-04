<?php
$sql_pengumumanset="SELECT * FROM ro_pengaturanpengumuman";
$perintah_pengumumanset=mysqli_query($koneksi,$sql_pengumumanset);
$row=mysqli_fetch_array($perintah_pengumumanset);
?>
<?php
//Function Cek Angka dan Alphabet
include('../ro-function/function.php');
$class2="alert alert-success";
//
$pengaturan_pengumumanErr=""; $pengaturan_pengumumanClass = $pengaturan_pengumumanClass_icon="";
$berhasil_simpan = $berhasil_simpanClass = $gagal_simpanErr ="";
$gagal_simpanClass = $gagal_simpanClass_icon = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
//set variabel
if(empty($_POST["pengaturan_pengumuman"])){
$pengaturan_pengumumanErr="Maaf Pengaturan pengumuman Masih Kosong";
$pengaturan_pengumumanClass=$class1;
$pengaturan_pengumumanClass_icon=$class2_icon;
}elseif(cek_alphabet($_POST["pengaturan_pengumuman"])){
$pengaturan_pengumumanErr="Data pengaturan pengumuman tidak sesuai ketentuan, masukan hanya alphabet saja";
$pengaturan_pengumumanClass=$class1;
$pengaturan_pengumumanClass_icon=$class2_icon;
}elseif(strlen($_POST["pengaturan_pengumuman"])>10){
$pengaturan_pengumumanErr="Data pengaturan pengumuman tidak sesuai ketentuan";
$pengaturan_pengumumanClass=$class1;
$pengaturan_pengumumanClass_icon=$class2_icon;
}else{
//fetch
$pengaturan_pengumuman=test_input($_POST["pengaturan_pengumuman"]);
$pengaturan_pengumuman=mysqli_escape_string($koneksi,$pengaturan_pengumuman);
$id=test_input($_POST["id"]);
$id=mysqli_escape_string($koneksi,$id);
}
$simpan_pengaturan="UPDATE ro_pengaturanpengumuman SET setpengumuman='$pengaturan_pengumuman' WHERE id='$id'";
$simpan_pengaturan_query=mysqli_query($koneksi,$simpan_pengaturan);
if(!$simpan_pengaturan_query){
$gagal_simpanErr="Gagal menyimpan data".mysqli_error();
$gagal_simpanClass=$class1; $gagal_simpanClass_icon=$class2_icon;
}else{
$berhasil_simpan="Berhasil Menyimpan data";
$berhasil_simpanClass=$class2;
 echo "<meta http-equiv=\"refresh\"content=\"3;URL=beranda\"/>";
}
//
}



?>