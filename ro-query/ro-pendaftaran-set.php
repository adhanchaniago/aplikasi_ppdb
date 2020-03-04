<?php
$sql_pendaftaranset="SELECT * FROM ro_pengaturandaftar";
$perintah_pendaftaranset=mysqli_query($koneksi,$sql_pendaftaranset);
$row=mysqli_fetch_array($perintah_pendaftaranset);
?>
<?php
//Function Cek Angka dan Alphabet
include('../ro-function/function.php');
$class2="alert alert-success";
//
$pengaturan_pendaftaranErr=""; $pengaturan_pendaftaranClass = $pengaturan_pendaftaranClass_icon="";
$berhasil_simpan = $berhasil_simpanClass = $gagal_simpanErr ="";
$gagal_simpanClass = $gagal_simpanClass_icon = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
//set variabel
if(empty($_POST["pengaturan_pendaftaran"])){
$pengaturan_pendaftaranErr="Maaf Pengaturan Pendaftaran Masih Kosong";
$pengaturan_pendaftaranClass=$class1;
$pengaturan_pendaftaranClass_icon=$class2_icon;
}elseif(cek_alphabet($_POST["pengaturan_pendaftaran"])){
$pengaturan_pendaftaranErr="Data pengaturan pendaftaran tidak sesuai ketentuan, masukan hanya alphabet saja";
$pengaturan_pendaftaranClass=$class1;
$pengaturan_pendaftaranClass_icon=$class2_icon;
}elseif(strlen($_POST["pengaturan_pendaftaran"])>10){
$pengaturan_pendaftaranErr="Data pengaturan pendaftaran tidak sesuai ketentuan";
$pengaturan_pendaftaranClass=$class1;
$pengaturan_pendaftaranClass_icon=$class2_icon;
}else{
//fetch
$pengaturan_pendaftaran=test_input($_POST["pengaturan_pendaftaran"]);
$pengaturan_pendaftaran=mysqli_escape_string($koneksi,$pengaturan_pendaftaran);
$id=test_input($_POST["id"]);
$id=mysqli_escape_string($koneksi,$id);
}
$simpan_pengaturan="UPDATE ro_pengaturandaftar SET setdaftar='$pengaturan_pendaftaran' WHERE id='$id'";
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