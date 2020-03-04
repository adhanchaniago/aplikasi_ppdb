<?php
//Function Cek Angka dan Alphabet
include('../ro-function/function.php');
//Definisikan Variabel Ketika Dalam Kondisi Kosong
include('../ro-includes/variabel-siswa.php');
//Cek Data Ketika Ada Request POST

if($_SERVER["REQUEST_METHOD"] == "POST"){
/* DATA SISWA */
include('ro-cek-nisn.php');
//Cek NISN
if(empty($_POST["nisn"])){
$nisnErr="Data NISN masih kosong";
$nisnClass=$class1;
$nisnClass_icon=$class2_icon;
}elseif(cek_angka($_POST["nisn"])){
$nisnErr="Data NISN tidak sesuai ketentuan, masukan hanya jenis angka saja";
$nisnClass=$class1;
$nisnClass_icon=$class2_icon;
}elseif(strlen($_POST["nisn"])!=10){
$nisnErr="Data NISN Tidak boleh lebih atau kurang dari 10 karakter";
$nisnClass=$class1;
$nisnClass_icon=$class2_icon;
}elseif($data_nisn>1){
$nisnErr="Maaf Data NISN yang Anda masukan sudah digunakan";
$nisnClass=$class1;
$nisnClass_icon=$class2_icon;
}else{
$nisn=test_input($_POST["nisn"]);
$nisn=mysqli_escape_string($koneksi,$nisn);
}

//Cek Nama Siswa
if(empty($_POST["nama_siswa"])){
$nama_siswaErr="Data nama siswa tidak boleh kosong";
$nama_siswaClass=$class1;
$nama_siswaClass_icon=$class2_icon;
}elseif(cek_alphabet($_POST["nama_siswa"])){
$nama_siswaErr="Masukan Nama Siswa Dengan Benar Masukan hanya karakter Alphabet saja";
$nama_siswaClass=$class1;
$nama_siswaClass_icon=$class2_icon;
}elseif(strlen($_POST["nama_siswa"])>40){
$nama_siswaErr="Nama tidak boleh lebih dari 40 Karakter";
$nama_siswaClass=$class1;
$nama_siswaClass_icon=$class2_icon;
}elseif(strlen($_POST["nama_siswa"])<3){
$nama_siswaErr="Nama Siswa tidak boleh kurang dari 3 karakter";
$nama_siswaClass=$class1;
$nama_siswaClass_icon=$class2_icon;
}else{
$nama_siswa=test_input($_POST["nama_siswa"]);
$nama_siswa=mysqli_escape_string($koneksi,$nama_siswa);
}

//Cek Jenis Kelamin
if(empty($_POST["jenis_kelamin"])){
$jenis_kelaminErr="Data jenis kelamin tidak boleh Kosong";
$jenis_kelaminClass=$class1;
$jenis_kelaminClass_icon=$class2_icon;
}elseif(strlen($_POST["jenis_kelamin"])>20){
$jenis_kelaminErr=" Data Jenis Kelamin tidak boleh lebih dari 10 Karakter";
$jenis_kelaminClass=$class1;
$jenis_kelaminClass_icon=$class2_icon;
}elseif(strlen($_POST["jenis_kelamin"])<3){
$jenis_kelaminErr="Data Jenis Kelamin tidak boleh kurang dari 3 karakter";
$jenis_kelaminClass=$class1;
$jenis_kelaminClass_icon=$class2_icon;
}else{
$jenis_kelamin=test_input($_POST["jenis_kelamin"]);
$jenis_kelamin=mysqli_escape_string($koneksi,$jenis_kelamin);	
} 

//Cek Tempat Lahir
if(empty($_POST["tempat_lahir"])){
$tempat_lahirErr="Data tempat lahir tidak boleh kosong";
$tempat_lahirClass=$class1;
$tempat_lahirClass_icon=$class2_icon;
}elseif(cek_alphabet($_POST["tempat_lahir"])){
$tempat_lahirErr="Data Tempat lahir salah, masukan hanya alphabet saja";
$tempat_lahirClass=$class1;
$tempat_lahirClass_icon=$class2_icon;
}elseif(strlen($_POST["tempat_lahir"])>30){
$tempat_lahirErr="Data Tempat lahir tidak boleh lebih dari 30 Karakter";
$tempat_lahirClass=$class1;
$tempat_lahirClass_icon=$class2_icon;
}elseif(strlen($_POST["tempat_lahir"])<3){
$tempat_lahirErr="Data tempat lahir tidak boleh kurang dari 3 karakter";
$tempat_lahirClass=$class1;
$tempat_lahirClass_icon=$class2_icon;
}else{
$tempat_lahir=test_input($_POST["tempat_lahir"]);
$tempat_lahir=mysqli_escape_string($koneksi,$tempat_lahir);
}

//Cek Tanggal Lahir
if(empty($_POST["tanggal_lahir"])){
$tanggal_lahirErr="Data tanggal lahir tidak boleh kosong";
$tanggal_lahirClass=$class1;
$tanggal_lahirClass_icon=$class2_icon;
}elseif(strlen($_POST["tanggal_lahir"])>20){
$tanggal_lahirErr=" Data tanggal lahir tidak boleh lebih dari 20 Karakter";
$tanggal_lahirClass=$class1;
$tanggal_lahirClass_icon=$class2_icon;
}elseif(strlen($_POST["tanggal_lahir"])<3){
$tanggal_lahirErr=" Data tanggal lahir tidak boleh kurang dari 3 karakter";
$tanggal_lahirClass=$class1;
$tanggal_lahirClass_icon=$class2_icon;
}else{
$tanggal_lahir=test_input($_POST["tanggal_lahir"]);
$tanggal_lahir=mysqli_escape_string($koneksi,$tanggal_lahir);
}

//Cek Agama Siswa
if(empty($_POST["agama_siswa"])){
$agama_siswaErr="Data agama siswa tidak boleh kosong";
$agama_siswaClass=$class1;
$agama_siswaClass_icon=$class2_icon;
}elseif(cek_alphabet($_POST["agama_siswa"])){
$agama_siswaErr="Masukan data agama siswa dengan benar, masukan hanya karakter Alphabet saja";
$agama_siswaClass=$class1;
$agama_siswaClass_icon=$class2_icon;
}elseif(strlen($_POST["agama_siswa"])>20){
$agama_siswaErr="Data Agama Siswa tidak boleh lebih dari 20 Karakter";
$agama_siswaClass=$class1;
$agama_siswaClass_icon=$class2_icon;
}elseif(strlen($_POST["agama_siswa"])<3){
$agama_siswaErr="Data Agama Siswa tidak boleh kurang dari 3 karakter";
$agama_siswaClass=$class1;
$agama_siswaClass_icon=$class2_icon;
}else{
$agama_siswa=test_input($_POST["agama_siswa"]);
$agama_siswa=mysqli_escape_string($koneksi,$agama_siswa);
} 

//Cek Status Dalam Keluarga
if(empty($_POST["status_keluarga"])){
$status_keluargaErr="Data status dalam keluarga tidak boleh kosong";
$status_keluargaClass=$class1;
$status_keluargaClass_icon=$class2_icon;
}elseif(cek_alphabet($_POST["status_keluarga"])){
$status_keluargaErr="Status Keluarga Salah, masukan hanya karakter Alphabet saja";
$status_keluargaClass=$class1;
$status_keluargaClass_icon=$class2_icon;
}elseif(strlen($_POST["status_keluarga"])>20){
$status_keluargaErr="Data tidak boleh lebih dari 20 Karakter";
$status_keluargaClass=$class1;
$status_keluargaClass_icon=$class2_icon;
}elseif(strlen($_POST["status_keluarga"])<3){
$status_keluargaErr=" Data Status Keluarga tidak boleh kurang dari 3 karakter";
$status_keluargaClass=$class1;
$status_keluargaClass_icon=$class2_icon;
}else{
$status_keluarga=test_input($_POST["status_keluarga"]);
$status_keluarga=mysqli_escape_string($koneksi,$status_keluarga);
} 

//Cek Alamat Siswa
if(empty($_POST["alamat_siswa"])){
$alamat_siswaErr="Data alamat siswa tidak boleh kosong";
$alamat_siswaClass=$class1;
$alamat_siswaClass_icon=$class2_icon;
}elseif(strlen($_POST["alamat_siswa"])>100){
$alamat_siswaErr="Data Alamat Siswa tidak boleh lebih dari 60 Karakter";
$alamat_siswaClass=$class1;
$alamat_siswaClass_icon=$class2_icon;
}elseif(strlen($_POST["alamat_siswa"])<3){
$alamat_siswaErr="Data Alamat Siswa tidak boleh kurang dari 3 karakter";
$alamat_siswaClass=$class1;
$alamat_siswaClass_icon=$class2_icon;
}else{
$alamat_siswa=test_input($_POST["alamat_siswa"]);
$alamat_siswa=mysqli_escape_string($koneksi,$alamat_siswa);
}

//Cek No HP Siswa
if(empty($_POST["hp_siswa"])){
$hp_siswaErr="Data HP Siswa tidak boleh kosong";
$hp_siswaClass=$class1;
$hp_siswaClass_icon=$class2_icon;
}elseif(cek_angka($_POST["hp_siswa"])){
$hp_siswaErr="Masukan hanya karakter Angka saja";
$hp_siswaClass=$class1;
$hp_siswaClass_icon=$class2_icon;
}elseif(strlen($_POST["hp_siswa"])!=12){
$hp_siswaErr="Data HP Siswa tidak boleh lebih atau kurang dari 12 Karakter";
$hp_siswaClass=$class1;
$hp_siswaClass_icon=$class2_icon;
}else{
$hp_siswa=test_input($_POST["hp_siswa"]);
$hp_siswa=mysqli_escape_string($koneksi,$hp_siswa);
}

/* DATA AYAH */
//Cek Nama Ayah
if(empty($_POST["nama_ayah"])){
$nama_ayahErr=" Data Nama Ayah Tidak Boleh Kosong";
$nama_ayahClass=$class1;
$nama_ayahClass_icon=$class2_icon;
}elseif(cek_alphabet($_POST["nama_ayah"])){
$nama_ayahErr="Nama Ayah Salah, masukan hanya karakter Alphabet saja";
$nama_ayahClass=$class1;
$nama_ayahClass_icon=$class2_icon;
}elseif(strlen($_POST["nama_ayah"])>40){
$nama_ayahErr="Data Nama Ayah tidak boleh lebih dari 40 Karakter";
$nama_ayahClass=$class1;
$nama_ayahClass_icon=$class2_icon;
}elseif(strlen($_POST["nama_ayah"])<3){
$nama_ayahErr="Data Nama Ayah tidak boleh kurang dari 3 karakter";
$nama_ayahClass=$class1;
$nama_ayahClass_icon=$class2_icon;
}else{
$nama_ayah=test_input($_POST["nama_ayah"]);
$nama_ayah=mysqli_escape_string($koneksi,$nama_ayah);
}

//Cek Pendidikan Ayah
if(empty($_POST["pendidikan_ayah"])){
$pendidikan_ayahErr="Data pendidikan tidak boleh kosong";
$pendidikan_ayahClass=$class1;
$pendidikan_ayahClass_icon=$class2_icon;
}elseif(strlen($_POST["pendidikan_ayah"])>20){
$pendidikan_ayahErr="Data Pendidikan ayah tidak boleh lebih dari 20 Karakter";
$pendidikan_ayahClass=$class1;
$pendidikan_ayahClass_icon=$class2_icon;
}elseif(strlen($_POST["pendidikan_ayah"])<2){
$pendidikan_ayahErr=" Data Pendidikan ayah tidak boleh kurang dari 2 karakter";
$pendidikan_ayahClass=$class1;
$pendidikan_ayahClass_icon=$class2_icon;
}else{
$pendidikan_ayah=test_input($_POST["pendidikan_ayah"]);
$pendidikan_ayah=mysqli_escape_string($koneksi,$pendidikan_ayah);
}

//Cek Pekerjaan Ayah
if(empty($_POST["pekerjaan_ayah"])){
$ppekerjaan_ayahErr="Data Pekerjaan tidak boleh kosong";
$pekerjaan_ayahClass=$class1;
$pekerjaan_ayahClass_icon=$class2_icon;
}elseif(strlen($_POST["pekerjaan_ayah"])>20){
$pekerjaan_ayahErr="Data Pekerjaan tidak boleh lebih dari 20 Karakter";
$pekerjaan_ayahClass=$class1;
$pekerjaan_ayahClass_icon=$class2_icon;
}elseif(strlen($_POST["pekerjaan_ayah"])<2){
$pekerjaan_ayahErr="Data pekerjaan Ayah tidak boleh kurang dari 2 karakter";
$pekerjaan_ayahClass=$class1;
$pekerjaan_ayahClass_icon=$class2_icon;
}else{
$pekerjaan_ayah=test_input($_POST["pekerjaan_ayah"]);
$pekerjaan_ayah=mysqli_escape_string($koneksi,$pekerjaan_ayah);
}

//cek Penghasilan Ayah
if(empty($_POST["penghasilan_ayah"])){
$penghasilan_ayahErr=" Data penghasilan tidak boleh kosong";
$penghasilan_ayahClass=$class1;
$penghasilan_ayahClass_icon=$class2_icon;
}elseif(strlen($_POST["penghasilan_ayah"])>20){
$penghasilan_ayahErr=" Data penghasilan tidak boleh lebih dari 20 karakter";
$penghasilan_ayahClass=$class1;
$penghasilan_ayahClass_icon=$class2_icon;
}else{
$penghasilan_ayah=test_input($_POST["penghasilan_ayah"]);
$penghasilan_ayah=mysqli_escape_string($koneksi,$penghasilan_ayah);
}

//Cek No HP Ayah
if(empty($_POST["hp_ayah"])){
$hp_ayahErr="Data HP Ayah tidak boleh kosong";
$hp_ayahClass=$class1;
$hp_ayahClass_icon=$class2_icon;
}elseif(cek_angka($_POST["hp_ayah"])){
$hp_ayahErr="Masukan hanya karakter Angka saja";
$hp_ayahClass=$class1;
$hp_ayahClass_icon=$class2_icon;
}elseif(strlen($_POST["hp_ayah"])!=12){
$hp_ayahErr=" Data HP Ayah tidak boleh lebih atau kurang dari 12 Karakter";
$hp_ayahClass=$class1;
$hp_ayahClass_icon=$class2_icon;
}else{
$hp_ayah=test_input($_POST["hp_ayah"]);
$hp_ayah=mysqli_escape_string($koneksi,$hp_ayah);
}

/* DATA IBU */
//cek Nama Ibu
if(empty($_POST["nama_ibu"])){
$nama_ibuErr="Data nama iu tidak boleh kosong";
$nama_ibuClass=$class1;
$nama_ibuClass_icon=$class2_icon;
}elseif(cek_alphabet($_POST["nama_ibu"])){
$nama_ibuErr="Nama ibu Salah, masukan hanya karakter Aplphabet saja";
$nama_ibuClass=$class1;
$nama_ibuClass_icon=$class2_icon;
}elseif(strlen($_POST["nama_ibu"])>40){
$nama_ibuErr="Data Nama tidak boleh lebih dari 40 karakter";
$nama_ibuClass=$class1;
$nama_ibuClass_icon=$class2_icon;
}elseif(strlen($_POST["nama_ibu"])<5){
$nama_ibuErr="Data Nama tidak boleh kurang dari 5 karakter";
$nama_ibuClass=$class1;
$nama_ibuClass_icon=$class2_icon;
}else{
$nama_ibu=test_input($_POST["nama_ibu"]);
$nama_ibu=mysqli_escape_string($koneksi,$nama_ibu);
}

//Cek Pendidikan Ibu
if(empty($_POST["pendidikan_ibu"])){
$pendidikan_ibuErr=" Data Pendidikan Tidak Boleh Kosong";
$pendidikan_ibuClass=$class1;
$pendidikan_ibuClass_icon=$class2_icon;
}elseif(strlen($_POST["pendidikan_ibu"])>20){
$pendidikan_ibuErr=" Data Pendidikan tidak boleh lebih dari 20 Karakter";
$pendidikan_ibuClass=$class1;
$pendidikan_ibuClass_icon=$class2_icon;
}elseif(strlen($_POST["pendidikan_ibu"])<2){
$pendidikan_ibuErr=" Data Pendidikan Ibu tidak boleh kurang dari 2 karakter";
$pendidikan_ibuClass=$class1;
$pendidikan_ibuClass_icon=$class2_icon;
}else{
$pendidikan_ibu=test_input($_POST["pendidikan_ibu"]);
$pendidikan_ibu=mysqli_escape_string($koneksi,$pendidikan_ibu);
}

//Cek Pekerjaan Ibu
if(empty($_POST["pekerjaan_ibu"])){
$pekerjaan_ibuErr=" Data pekerjaan ibu tidak boleh kosong";
$pekerjaan_ibuClass=$class1;
$pekerjaan_ibuClass_icon=$class2_icon;
}elseif(strlen($_POST["pekerjaan_ibu"])>20){
$pekerjaan_ibuErr=" Data pekerjaan ibu tidak boleh lebih dari 20 Karakter";
$pekerjaan_ibuClass=$class1;
$pekerjaan_ibuClass_icon=$class2_icon;
}elseif(strlen($_POST["pekerjaan_ibu"])<3){
$pekerjaan_ibuErr="Data Pekerjaan Ibu tidak boleh kurang dari 3 karakter";
$pekerjaan_ibuClass=$class1;
$pekerjaan_ibuClass_icon=$class2_icon;
}else{
$pekerjaan_ibu=test_input($_POST["pekerjaan_ibu"]);
$pekerjaan_ibu=mysqli_escape_string($koneksi,$pekerjaan_ibu);
}

//Cek Penghasilan Ibu
if(empty($_POST["penghasilan_ibu"])){
$penghasilan_ibuErr="Data penghasilan ibu tidak boleh kosong";
$penghasilan_ibuClass=$class1;
$penghasilan_ibuClass_icon=$class2_icon;
}elseif(strlen($_POST["penghasilan_ibu"])>20){
$penghasilan_ibuErr="Data penghasilan ibu tidak boleh lebih dari 20 karakter";
$penghasilan_ibuClass=$class1;
$penghasilan_ibuClass_icon=$class2_icon;
}else{
$penghasilan_ibu=test_input($_POST["penghasilan_ibu"]);
$penghasilan_ibu=mysqli_escape_string($koneksi,$penghasilan_ibu);
}

//Cek No HP Ibu
if(empty($_POST["hp_ibu"])){
$hp_ibuErr="Data HP Ibu Masih Kosong";
$hp_ibuClass=$class1;
$hp_ibuClass_icon=$class2_icon;
}elseif(cek_angka($_POST["hp_ibu"])){
$hp_ibuErr="Data Hp ibu salah, Masukan hanya karakter Angka saja";
$hp_ibuClass=$class1;
$hp_ibuClass_icon=$class2_icon;
}elseif(strlen($_POST["hp_ibu"])!=12){
$hp_ibuErr="Data HP Ibu tidak boleh lebih atau kurang dari 12 Karakter";
$hp_ibuClass=$class1;
$hp_ibuClass_icon=$class2_icon;
}else{
$hp_ibu=test_input($_POST["hp_ibu"]);
$hp_ibu=mysqli_escape_string($koneksi,$hp_ibu);
}

/* DATA WALI */
//Cek Data Wali Optional = Data Boleh kosong
//Namun jika diisi datanya harus sesuai ketentutan
if(cek_alphabet($_POST["nama_wali"])){
$nama_waliErr="Nama Wali salah, masukan hanya karakter Aplphabet saja";
$nama_waliClass=$class1;
$nama_waliClass_icon=$class2_icon;
}elseif(strlen($_POST["nama_wali"])>40){
$nama_waliErr="Data Nama tidak boleh lebih dari 40 karakter";
$nama_waliClass=$class1;
$nama_waliClass_icon=$class2_icon;
}else{
$nama_wali=test_input($_POST["nama_wali"]);
$nama_wali=mysqli_escape_string($koneksi,$nama_wali);
}

//Cek Pendidikan Wali
if(strlen($_POST["pendidikan_wali"])>20){
$pendidikan_waliErr="Data Pendidikan tidak boleh lebih dari 20 Karakter";
$pendidikan_waliClass=$class1;
$pendidikan_waliClass_icon=$class2_icon;
}else{
$pendidikan_wali=test_input($_POST["pendidikan_wali"]);
$pendidikan_wali=mysqli_escape_string($koneksi,$pendidikan_wali);
}

//Cek Pekerjaan Wali
if(strlen($_POST["pekerjaan_wali"])>20){
$pekerjaan_waliErr=" Data pekerjaan Wali tidak boleh lebih dari 20 Karakter";
$pekerjaan_waliClass=$class1;
$pekerjaan_waliClass_icon=$class2_icon;
}else{
$pekerjaan_wali=test_input($_POST["pekerjaan_wali"]);
$pekerjaan_wali=mysqli_escape_string($koneksi,$pekerjaan_wali);
}

//Cek Penghasilan Wali
if(strlen($_POST["penghasilan_wali"])>20){
$penghasilan_waliErr=" Data penghasilan tidak boleh lebih dari 20 karakter";
$penghasilan_waliClass=$class1;
$penghasilan_waliClass_icon=$class2_icon;
}else{
$penghasilan_wali=test_input($_POST["penghasilan_wali"]);
$penghasilan_wali=mysqli_escape_string($koneksi,$penghasilan_wali);
}

//Cek No HP Wali
if(cek_angka($_POST["hp_wali"])){
$hp_waliErr="Masukan hanya karakter Angka saja";
$hp_waliClass=$class1;
$hp_waliClass_icon=$class2_icon;
}elseif(strlen($_POST["hp_wali"])>12){
$hp_waliErr="Data hp wali tidak boleh lebih dari 12 karakter";
$hp_waliClass=$class1;
$hp_waliClass_icon=$class2_icon;
}else{
$hp_wali=test_input($_POST["hp_wali"]);
$hp_wali=mysqli_escape_string($koneksi,$hp_wali);
}

/* DATA SEKOLAH */
//Cek Nomor NPSN sekolah
if(empty($_POST["npsn_sekolah"])){
$npsn_sekolahErr=" Data NPSN tidak boleh kosong";
$npsn_sekolahClass=$class1;
$npsn_sekolahClass_icon=$class2_icon;
}elseif(strlen($_POST["npsn_sekolah"])>30){
$npsn_sekolahErr=" Data npsn tidak boleh lebih atau kurang dari 30 Karakter";
$npsn_sekolahClass=$class1;
$npsn_sekolahClass_icon=$class2_icon;
}else{
$npsn_sekolah=test_input($_POST["npsn_sekolah"]);
$npsn_sekolah=mysqli_escape_string($koneksi,$npsn_sekolah);
}

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
//Cek Status Sekolah
if(empty($_POST["status_sekolah"])){
$status_sekolahErr="Data status sekolah tidak boleh kosong";
$status_sekolahClass=$class1;
$status_sekolahClass_icon=$class2_icon;
}elseif(strlen($_POST["status_sekolah"])<3){
$status_sekolahErr="Data tidak boleh lebih dari 3 karakter";
$status_sekolahClass=$class1;
$status_sekolahClass_icon=$class2_icon;
}elseif(strlen($_POST["status_sekolah"])>20){
$status_sekolahErr="Data tidak boleh lebih dari 20 karakter";
$status_sekolahClass=$class1;
$status_sekolahClass_icon=$class2_icon;
}else{
$status_sekolah=test_input($_POST["status_sekolah"]);
$status_sekolah=mysqli_escape_string($koneksi,$status_sekolah);
}
//Cek Model Ujian Nasional
if(empty($_POST["model_ujian"])){
$model_ujianErr="Data model ujian tidak boleh kosong";
$model_ujianClass=$class1;
$model_ujianClass_icon=$class2_icon;
}elseif(cek_alphabet($_POST["model_ujian"])){
$model_ujianErr="Data model ujian salah, masukan hanya karakter Alphabet saja";
$model_ujianClass=$class1;
$model_ujianClass_icon=$class2_icon;
}elseif(strlen($_POST["model_ujian"])!=4){
$model_ujianErr="Data Model Ujian tidak boleh lebih atau kurang dari 4 karakter";
$model_ujianClass=$class1;
$model_ujianClass_icon=$class2_icon;
}else{
$model_ujian=test_input($_POST["model_ujian"]);
$model_ujian=mysqli_escape_string($koneksi,$model_ujian);
}
//Cek Alamat Sekolah
if(empty($_POST["alamat_sekolah"])){
$alamat_sekolahErr="Data Alamat Sekolah tidak boleh kosong";
$alamat_sekolahClass=$class1;
$alamat_sekolahClass_icon=$class2_icon;
}elseif(strlen($_POST["alamat_sekolah"])<3){
$alamat_sekolahErr="Data Alamat sekolah tidak boleh kurang dari 3 karakter";
$alamat_sekolahClass=$class1;
$alamat_sekolahClass_icon=$class2_icon;
}elseif(strlen($_POST["alamat_sekolah"])>100){
$alamat_sekolahErr="Data alamat sekolah tidak boleh lebih dari 100 karakter";
$alamat_sekolahClass=$class1;
$alamat_sekolahClass_icon=$class2_icon;
}else{
$alamat_sekolah=test_input($_POST["alamat_sekolah"]);
$alamat_sekolah=mysqli_escape_string($koneksi,$alamat_sekolah);
}
//Cek Tahun Lulus
if(empty($_POST["tahun_lulus"])){
$tahun_lulusErr=" Data tahun lulus tidak boleh kosong";
$tahun_lulusClass=$class1;
$tahun_lulusClass_icon=$class2_icon;
}elseif(cek_angka($_POST["tahun_lulus"])){
$tahun_lulusErr="Masukan hanya karakter angka saja";
$tahun_lulusClass=$class1;
$tahun_lulusClass_icon=$class2_icon;
}elseif(strlen($_POST["tahun_lulus"])!=4){
$tahun_lulusErr="Data tahun lulus tidak boleh lebih atau kurang dari 4 karakter";
$tahun_lulusClass=$class1;
$tahun_lulusClass_icon=$class2_icon;
}else{
$tahun_lulus=test_input($_POST["tahun_lulus"]);
$tahun_lulus=mysqli_escape_string($koneksi,$tahun_lulus);
}

//Cek Nilai UNBK/UNKP
//Cek Nilai IPA
if(empty($_POST["ipa"])){
$ipaErr="Data Nilai IPA masih kosong";
$ipaClass=$class1; $ipaClass_icon=$class2_icon;
}elseif(cek_angka($_POST["ipa"])){
$ipaErr="Masukan hanya karakter angka";
$ipaClass=$class1; $ipaClass_icon=$class2_icon;
}elseif(strlen($_POST["ipa"])!=2){
$ipaErr="Nilai Hanya boleh dua karakter angka";
$ipaClass=$class1; $ipaClass_icon=$class2_icon;
}else{
$ipa=test_input($_POST["ipa"]);
$ipa=mysqli_escape_string($koneksi,$ipa);
}

//Cek Nilai Matematika
if(empty($_POST["matematika"])){
$matematikaErr="Data Nilai matematika masih kosong";
$matematikaClass=$class1; $matematikaClass_icon=$class2_icon;
}elseif(cek_angka($_POST["matematika"])){
$matematikaErr="Masukan hanya karakter angka";
$matematikaClass=$class1; $matematikaClass_icon=$class2_icon;
}elseif(strlen($_POST["matematika"])!=2){
$matematikaErr="Nilai Hanya boleh dua karakter angka";
$matematikaClass=$class1; $matematikaClass_icon=$class2_icon;
}else{
$matematika=test_input($_POST["matematika"]);
$matematika=mysqli_escape_string($koneksi,$matematika);
}

//Cek Nilai Bahasa Indonesia
if(empty($_POST["bahasa_indonesia"])){
$bahasa_indonesiaErr="Data Nilai bahasa_indonesia masih kosong";
$bahasa_indonesiaClass=$class1; $bahasa_indonesiaClass_icon=$class2_icon;
}elseif(cek_angka($_POST["bahasa_indonesia"])){
$bahasa_indonesiaErr="Masukan hanya karakter angka";
$bahasa_indonesiaClass=$class1; $bahasa_indonesiaClass_icon=$class2_icon;
}elseif(strlen($_POST["bahasa_indonesia"])!=2){
$bahasa_indonesiaErr="Nilai Hanya boleh dua karakter angka";
$bahasa_indonesiaClass=$class1; $bahasa_indonesiaClass_icon=$class2_icon;
}else{
$bahasa_indonesia=test_input($_POST["bahasa_indonesia"]);
$bahasa_indonesia=mysqli_escape_string($koneksi,$bahasa_indonesia);
}

if(empty($_POST["bahasa_ingris"])){
$bahasa_ingrisErr="Data Nilai bahasa_ingris masih kosong";
$bahasa_ingrisClass=$class1; $bahasa_ingrisClass_icon=$class2_icon;
}elseif(cek_angka($_POST["bahasa_ingris"])){
$bahasa_ingrisErr="Masukan hanya karakter angka saja";
$bahasa_ingrisClass=$class1; $bahasa_ingrisClass_icon=$class2_icon;
}elseif(strlen($_POST["bahasa_ingris"])!=2){
$bahasa_ingrisErr="Nilai Hanya boleh dua karakter angka saja";
$bahasa_ingrisClass=$class1; $bahasa_ingrisClass_icon=$class2_icon;
}else{
$bahasa_ingris=test_input($_POST["bahasa_ingris"]);
$bahasa_ingris=mysqli_escape_string($koneksi,$bahasa_ingris);
}

//Status Pendaftaran
if(empty($_POST["status_pendaftaran"])){
$status_pendaftaranEr="Data status pendaftaran tidak boleh kosong";
$status_pendaftaranClass=$class1; $status_pendaftaranClass_icon=$class2_icon;
}elseif(cek_alphabet($_POST["status_pendaftaran"])){
$status_pendaftaranErr="Masukan hanya karakter Alphabet saja";
$status_pendaftaranClass=$class1; $status_pendaftaranClass_icon=$class2_icon;
}elseif(strlen($_POST["status_pendaftaran"])!=18){
$status_pendaftaranErr="Data tidak boleh lebih atau kurang dari 18 karakter";
$status_pendaftaranClass=$class1; $status_pendaftaranClass_icon=$class2_icon;
}elseif($_POST["status_pendaftaran"]!="Belum Diverifikasi"){
$status_pendaftaranErr="Maaf pertama mendaftar status siswa hanya boleh dalam kedaan Belum Diverifikasi";
$status_pendaftaranClass=$class1; $status_pendaftaranClass_icon=$class2_icon;
}else{
$status_pendaftaran=test_input($_POST["status_pendaftaran"]);
$status_pendaftaran=mysqli_escape_string($koneksi,$status_pendaftaran);
}

if(empty($_POST["tanggal_pendaftaran"])){
$tanggal_pendaftaranEr="Tanggal pendaftaran tidak boleh kosong";
$tanggal_pendaftaranClass=$class1; $tanggal_pendaftaranClass_icon=$class2_icon;
}elseif(strlen($_POST["tanggal_pendaftaran"])!=8){
$tanggal_pendaftaranErr="Data tidak boleh lebih atau kurang dari 8 karakter";
$tanggal_pendaftaranClass=$class1; $tanggal_pendaftaranClass_icon=$class2_icon;
}else{
$tanggal_pendaftaran=test_input($_POST["tanggal_pendaftaran"]);
$tanggal_pendaftaran=mysqli_escape_string($koneksi,$tanggal_pendaftaran);
}

// jurusan 
if(empty($_POST["jurusan_1"])){
$jurusan_1Err="Data jurusan tidak boleh Kosong";
$jurusan_1Class=$class1;
$jurusan_1Class_icon=$class2_icon;
}elseif(strlen($_POST["jurusan_1"])>30){
$jurusan_1Err=" Data jurusan tidak boleh lebih dari 5 Karakter";
$jurusan_1Class=$class1;
$jurusan_1Class_icon=$class2_icon;
}elseif(strlen($_POST["jurusan_1"])<3){
$jurusan_1Err="Data jurusan tidak boleh kurang dari 3 karakter";
$jurusan_1Class=$class1;
$jurusan_1Class_icon=$class2_icon;
}else{
$jurusan_1=test_input($_POST["jurusan_1"]);
$jurusan_1=mysqli_escape_string($koneksi,$jurusan_1);	
} 

if(empty($_POST["jurusan_2"])){
$jurusan_2Err="Data jurusan tidak boleh Kosong";
$jurusan_2Class=$class1;
$jurusan_2Class_icon=$class2_icon;
}elseif(strlen($_POST["jurusan_2"])>30){
$jurusan_2Err=" Data jurusan tidak boleh lebih dari 5 Karakter";
$jurusan_2Class=$class1;
$jurusan_2Class_icon=$class2_icon;
}elseif(strlen($_POST["jurusan_2"])<3){
$jurusan_2Err="Data jurusan tidak boleh kurang dari 3 karakter";
$jurusan_2Class=$class1;
$jurusan_2Class_icon=$class2_icon;
}else{
$jurusan_2=test_input($_POST["jurusan_2"]);
$jurusan_2=mysqli_escape_string($koneksi,$jurusan_2);	
} 

// if(empty($_POST["kirim"])){
// $jurusan_1 = $_POST['jurusan_1'];
// $jurusan_2 = $_POST['jurusan_2']; 
// }


// Cek Ulang Data, Bila ada data yang kosong karena terjadi error, jangan lakukan query
// if(empty($nisn&&$nama_siswa&&$jenis_kelamin&&$tempat_lahir&&$tanggal_lahir&&$agama_siswa&& $status_keluarga&&$alamat_siswa&&$hp_siswa&&$nama_ayah&&$pendidikan_ayah&& $pekerjaan_ayah && $penghasilan_ayah&&$hp_ayah && $nama_ibu && $pendidikan_ibu&&$pekerjaan_ibu&&$penghasilan_ibu&&$hp_ibu&&$npsn_sekolah&&$nama_sekolah&&$status_sekolah&&$model_ujian&&$alamat_sekolah&&$tahun_lulus&&$ipa&&$matematika&&$bahasa_indonesia&&$bahasa_ingris&&$status_pendaftaran&&$tanggal_pendaftaran)){

// }else{
//Ketika Semua Data Sudah Diperiksa, Jalankan Query
//perintah 1
$simpan_siswa=sprintf("INSERT INTO ro_formulir VALUES('null','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$nisn,$nama_siswa,$jenis_kelamin,$tempat_lahir,$tanggal_lahir,$agama_siswa, $status_keluarga,$alamat_siswa,$hp_siswa,$nama_ayah,$pendidikan_ayah, $pekerjaan_ayah , $penghasilan_ayah,$hp_ayah ,$nama_ibu,$pendidikan_ibu,$pekerjaan_ibu,$penghasilan_ibu,$hp_ibu,$nama_wali,$pendidikan_wali,$pekerjaan_wali,$penghasilan_wali,$hp_wali,$npsn_sekolah,$nama_sekolah,$status_sekolah,$model_ujian,$alamat_sekolah,$tahun_lulus,$status_pendaftaran,$tanggal_pendaftaran);

//perintah 2
$simpan_nilai=sprintf("INSERT INTO ro_nilai_un VALUES('null','%s','%s','%d','%d','%d','%d')",$nisn,$nama_siswa,$ipa,$matematika,$bahasa_indonesia,$bahasa_ingris);

//perintah 3
$simpan_jurusan=sprintf("INSERT INTO ro_jurusan VALUES('null','%s','%s','%s')",$nisn,$jurusan_1,$jurusan_2);

//Query 
$simpan_siswa_query=mysqli_query($koneksi,$simpan_siswa);
mysqli_query($koneksi,$simpan_nilai);
mysqli_query($koneksi,$simpan_jurusan);

//Jalankan
// if(!$simpan_siswa_query){
// $gagal_simpanErr="Gagal menyimpan data".mysqli_error();
// $gagal_simpanClass=$class1; $gagal_simpanClass_icon=$class2_icon;
// }else{
// $berhasil_simpan="Berhasil Menyimpan data";
// $berhasil_simpanClass=$class2;
// }
// }
//Request POST 
}

?>