<?php
//Function Cek Angka dan Alphabet
include('../ro-function/function.php');
//Definisikan Variabel Ketika Dalam Kondisi Kosong
include('../ro-includes/variabel-siswa.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
/* DATA SISWA */
//Cek Status Pendaftaran
if(empty($_POST["status_pendaftaran"])){
$status_pendaftaranEr="Data status pendaftaran tidak boleh kosong";
$status_pendaftaranClass=$class1; $status_pendaftaranClass_icon=$class2_icon;
}elseif(cek_alphabet($_POST["status_pendaftaran"])){
$status_pendaftaranErr="Masukan hanya karakter Alphabet saja";
$status_pendaftaranClass=$class1; $status_pendaftaranClass_icon=$class2_icon;
}else{
$status_pendaftaran=test_input($_POST["status_pendaftaran"]);
$status_pendaftaran=mysqli_escape_string($koneksi,$status_pendaftaran);
}
//
$id=test_input($_POST["id"]);
$id=mysqli_escape_string($koneksi,$id);
$simpan_pendaftaran="UPDATE ro_formulir SET status_pendaftaran='$status_pendaftaran' WHERE id='$id'";
$simpan_pendaftaran_query=mysqli_query($koneksi,$simpan_pendaftaran);
if(!$simpan_pendaftaran_query){
$gagal_simpanErr="Gagal menyimpan data".mysqli_error();
$gagal_simpanClass=$class1; $gagal_simpanClass_icon=$class2_icon;
}else{
$berhasil_simpan="Berhasil Menyimpan data";
$berhasil_simpanClass=$class2;
echo "<meta http-equiv=\"refresh\"content=\"1;URL=belum-verifikasi\"/>";
}
//
}
?>