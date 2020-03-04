<?php
$sql_identitasset="SELECT * FROM ro_identitas_sekolah";
$perintah_identitasset=mysqli_query($koneksi,$sql_identitasset);
$row=mysqli_fetch_array($perintah_identitasset);
?>
<?php
//Function Cek Angka dan Alphabet
include('../ro-function/function.php');
$class2="alert alert-success"; $class1="alert alert-danger"; $class2_icon="glyphicon glyphicon-exclamation-sign";
//
$nama_sekolah = $nama_sekolahClass = $nama_sekolahClass_icon="";
$alamat_sekolah = $alamat_sekolahClass = $alamat_sekolahClass_icon ="";
$telephone_sekolah = $telephone_sekolahClass = $telephone_sekolahClass_icon ="";
//err
$nama_sekolahErr = $alamat_sekolahErr = $telephone_sekolahErr="";
//ber-gal
$berhasil_simpan = $berhasil_simpanClass ="";
$gagal_simpanErr = $gagal_simpanClass = $gagal_simpanClass_icon ="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
//set variabel
//Cek Nama Sekolah
if(empty($_POST["nama_sekolah"])){
$nama_sekolahErr=" Nama Asal sekolah tidak boleh kosong";
$nama_sekolahClass=$class1;
$nama_sekolahClass_icon=$class2_icon;
}elseif(strlen($_POST["nama_sekolah"])<5){
$nama_sekolahErr="Nama Asal Sekolah Data tidak boleh kurang dari 5 Karakter";
$nama_sekolahClass=$class1;
$nama_sekolahClass_icon=$class2_icon;
}elseif(strlen($_POST["nama_sekolah"])>30){
$nama_sekolahErr="Nama Asal Sekolah tidak boleh lebih dari 30 karakter";
$nama_sekolahClass=$class1;
$nama_sekolahClass_icon=$class2_icon;
}else{
$nama_sekolah=test_input($_POST["nama_sekolah"]);
$nama_sekolah=mysqli_escape_string($koneksi,$nama_sekolah);
}
if(empty($_POST["alamat_sekolah"])){
$alamat_sekolahErr="Data Alamat Sekolah tidak boleh kosong";
$alamat_sekolahClass=$class1;
$alamat_sekolahClass_icon=$class2_icon;
}elseif(strlen($_POST["alamat_sekolah"])<3){
$alamat_sekolahErr="Data Alamat sekolah tidak boleh kurang dari 3 karakter";
$alamat_sekolahClass=$class1;
$alamat_sekolahClass_icon=$class2_icon;
}elseif(strlen($_POST["alamat_sekolah"])>50){
$alamat_sekolahErr="Data alamat sekolah tidak boleh lebih dari 100 karakter";
$alamat_sekolahClass=$class1;
$alamat_sekolahClass_icon=$class2_icon;
}else{
$alamat_sekolah=test_input($_POST["alamat_sekolah"]);
$alamat_sekolah=mysqli_escape_string($koneksi,$alamat_sekolah);
}
if(empty($_POST["telephone_sekolah"])){
$telephone_sekolahErr=" Data hp tidak boleh kosong";
$telephone_sekolahClass=$class1;
$telephone_sekolahClass_icon=$class2_icon;
}elseif(strlen($_POST["telephone_sekolah"])!=12){
$telephone_sekolahErr=" Data hp tidak boleh lebih atau kurang dari 12 Karakter";
$telephone_sekolahClass=$class1;
$telephone_sekolahClass_icon=$class2_icon;
}else{
$telephone_sekolah=test_input($_POST["telephone_sekolah"]);
$telephone_sekolah=mysqli_escape_string($koneksi,$telephone_sekolah);
$id=test_input($_POST["id"]);
$id=mysqli_escape_string($koneksi,$id);
}
//mulai penyimpanan
$simpan_identitas="UPDATE ro_identitas_sekolah SET 
nama_sekolah='$nama_sekolah',
alamat_sekolah='$alamat_sekolah',
telephone_sekolah='$telephone_sekolah' 
WHERE id='$id'";
$simpan_identitas_query=mysqli_query($koneksi,$simpan_identitas);
if(!$simpan_identitas_query){
$gagal_simpanErr="Gagal menyimpan data".mysqli_error();
$gagal_simpanClass=$class1; $gagal_simpanClass_icon=$class2_icon;
}else{
$berhasil_simpan="Berhasil Menyimpan data";
$berhasil_simpanClass=$class2;
 echo "<meta http-equiv=\"refresh\"content=\"3;URL=identitas-sekolah\"/>";
}
//
}
?>
