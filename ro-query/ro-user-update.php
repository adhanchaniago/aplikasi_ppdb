<?php
$perintah="SELECT * FROM ro_user";
$query=mysqli_query($koneksi,$perintah)or die ("Gagal melakukan koneksi".mysqli_error());
$tampil=mysqli_fetch_array($query);
$id=$tampil['id'];
$username=$tampil['username'];
$password=$tampil['password'];
$nama=$tampil['nama'];
$email=$tampil['email'];
$level=$tampil['level'];
?>
<?php
//Function Cek Angka dan Alphabet
include('../ro-function/function.php');
$class2="alert alert-success"; $class1="alert alert-danger"; $class2_icon="glyphicon glyphicon-exclamation-sign";
//
$username1 = $email1 = $nama1 = $password1 = "";
$usernameClass = $emailClass = $namaClass = $passwordClass ="";
$usernameClass_icon = $emailClass_icon = $namaClass_icon = $passwordClass_icon ="";
//err
$usernameErr = $emailErr = $namaErr = $passwordErr ="";
//ber-gal
$berhasil_simpan = $berhasil_simpanClass ="";
$gagal_simpanErr = $gagal_simpanClass = $gagal_simpanClass_icon ="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
//set variabel
//Cek Nama Sekolah
if(empty($_POST["username"])){
$usernameErr=" Nama username tidak boleh kosong";
$usernameClass=$class1;
$usernameClass_icon=$class2_icon;
}elseif(strlen($_POST["username"])>30){
$usernameErr="Nama username tidak boleh lebih dari 30 karakter";
$usernameClass=$class1;
$usernameClass_icon=$class2_icon;
}else{
$username1=test_input($_POST["username"]);
$username1=mysqli_escape_string($koneksi,$username1);
}
if(empty($_POST["password"])){
$passwordErr="Data Password tidak boleh kosong";
$passwordClass=$class1;
$passwordClass_icon=$class2_icon;
}else{
$password1=test_input($_POST["password"]);
$password1=mysqli_escape_string($koneksi,$password1);
$password1=md5($password1);
}
//
if(empty($_POST["nama"])){
$namaErr=" Nama tidak boleh kosong";
$namaClass=$class1;
$namaClass_icon=$class2_icon;
}elseif(strlen($_POST["nama"])>30){
$namaErr="Nama tidak boleh lebih dari 30 karakter";
$namaClass=$class1;
$namaClass_icon=$class2_icon;
}elseif(cek_alphabet($_POST["nama"])){
$namaErr="Nama harus berupa Alphabet";
$namaClass=$class1;
$namaClass_icon=$class2_icon;
}else{
$nama1=test_input($_POST["nama"]);
$nama1=mysqli_escape_string($koneksi,$nama1);
}
//
if(empty($_POST["email"])){
$emailErr="Data email tidak boleh kosong";
$emailClass=$class1;
$emailClass_icon=$class2_icon;
}else{
$email1=test_input($_POST["email"]);
$email1=mysqli_escape_string($koneksi,$email1);
}
//id
$id=test_input($_POST["id"]);
$id=mysqli_escape_string($koneksi,$id);
//level
$level=test_input($_POST["level"]);
$level=mysqli_escape_string($koneksi,$level);
//mulai penyimpanan
$simpan_user="UPDATE ro_user SET 
username='$username1',
password='$password1',
nama='$nama1',
email='$email1',
level='$level'
WHERE id='$id'";
$simpan_user_query=mysqli_query($koneksi,$simpan_user);
if(!$simpan_user_query){
$gagal_simpanErr="Gagal menyimpan data".mysqli_error();
$gagal_simpanClass=$class1; $gagal_simpanClass_icon=$class2_icon;
}else{
$berhasil_simpan="Berhasil Menyimpan data";
$berhasil_simpanClass=$class2;
 echo "<meta http-equiv=\"refresh\"content=\"1;URL=user\"/>";
}
//
}
?>