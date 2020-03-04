<?php
//Definisikan Variabel Ketika Dalam Kondisi Kosong
include('../ro-includes/variabel-siswa.php');
//Cek Data Ketika Ada Request POST
if($_SERVER["REQUEST_METHOD"] == "GET"){
if(empty($_GET["detail"])){
$nisnErr="Data NISN Kosong";
$nisnClass=$class1;
$nisnClass_icon=$class2_icon;
}else{
$query_print=mysqli_prepare($koneksi,"select * from ro_formulir where nisn= ?") or die(mysqli_error());
$print=mysqli_real_escape_string($koneksi,$_GET["detail"]);
mysqli_stmt_bind_param($query_print,"s",$print);
mysqli_stmt_execute($query_print);
$result=mysqli_stmt_get_result($query_print);
$data_siswa=mysqli_fetch_array($result);
$no_pendaftaran=$data_siswa["id"];
$nisn=$data_siswa["nisn"];
$nama_siswa=$data_siswa["nama_siswa"];
$jenis_kelamin=$data_siswa["jenis_kelamin"];
$tempat_lahir=$data_siswa["tempat_lahir"];
$tanggal_lahir=$data_siswa["tanggal_lahir"];
$agama_siswa=$data_siswa["agama_siswa"]; 
$status_keluarga=$data_siswa["status_keluarga"];
$alamat_siswa=$data_siswa["alamat_siswa"];
$hp_siswa=$data_siswa["hp_siswa"];
$nama_ayah=$data_siswa["nama_ayah"];
$pendidikan_ayah=$data_siswa["pendidikan_ayah"]; 
$pekerjaan_ayah =$data_siswa["pekerjaan_ayah"]; 
$penghasilan_ayah=$data_siswa["penghasilan_ayah"];
$hp_ayah =$data_siswa["hp_ayah"];
$nama_ibu=$data_siswa["nama_ibu"];
$pendidikan_ibu=$data_siswa["pendidikan_ibu"];
$pekerjaan_ibu=$data_siswa["pekerjaan_ibu"];
$penghasilan_ibu=$data_siswa["penghasilan_ibu"];
$hp_ibu=$data_siswa["hp_ibu"];
$nama_wali=$data_siswa["nama_wali"];
$pendidikan_wali=$data_siswa["pendidikan_wali"];
$pekerjaan_wali=$data_siswa["pekerjaan_wali"];
$penghasilan_wali=$data_siswa["penghasilan_wali"];
$hp_wali=$data_siswa["hp_wali"];
$npsn_sekolah=$data_siswa["npsn_sekolah"];
$nama_sekolah=$data_siswa["nama_sekolah"];
$status_sekolah=$data_siswa["status_sekolah"];
$model_ujian=$data_siswa["model_ujian_nasional"];
$alamat_sekolah=$data_siswa["alamat_sekolah"];
$tahun_lulus=$data_siswa["tahun_lulus"];
$tanggal_pendaftaran=$data_siswa["tanggal_pendaftaran"];

}
//
}
mysqli_stmt_close($query_print);
mysqli_close($koneksi);
?>




