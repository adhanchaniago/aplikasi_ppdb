<?php 
//panggil header, css, navigasi
include('../ro-databases/session.php');
include('../ro-includes/header-admin.php');
include('../ro-includes/css-admin.php');
include('../ro-includes/nav-admin.php');

?>
<?php
//main page
$page=(isset($_GET['page']))?$_GET['page']:"main";
switch($page) {
case'beranda':include"ro-depan.php";break;
case'tambah':include"ro-tambah.php";break;
case'lihat':include"ro-lihat.php";break;
case'diterima':include"ro-diterima.php";break;
case'ditolak':include"ro-ditolak.php";break;
case'belum-verifikasi':include"ro-bverifikasi.php";break;
case'bukti-pendaftaran':include"ro-print-pendaftaran.php";break;
case'kartu-peserta':include"ro-print-kartu.php";break;
case'pengaturan-pendaftaran':include"ro-pengaturan-daftar.php";break;
case'pengaturan-pengumuman':include"ro-pengaturan-pengumuman.php";break;
case'identitas-sekolah':include"ro-identitas-sekolah.php";break;
case'update-berhasil':include"ro-update-berhasil.php";break;
case'user':include"ro-user-profile.php";break;
case'informasi':include"ro-informasi.php";break;
case'tampil':include"ro-edit-informasi.php";break;

case'laporan':include"ro-laporan.php";break;

//Old
case'diterima':include"psb-siswa-diterima.php";break;
case'ditolak':include"psb-siswa-ditolak.php";break;
case'verifikasi':include"psb-siswa-bverifikasi.php";break;
case'foto':include"psb-lihat-foto.php";break;
case'tambah-kunci':include"psb-kunci.php";break;
case'lihat-kunci':include"psb-lihat-kunci.php";break;
case'sambutan':include"psb-sambutan.php";break;
case'pengaturan-komentar':include"psb-tamu-control.php";break;
case'pengaturan-kunci':include"psb-kunci-kontrol.php";break;
case'tamu':include"psb-pesan-tamu.php";break;
case'tentang-sekolah':include"psb-web-tentang.php";break;
case'visi-misi':include"psb-web-visimisi.php";break;
case'header':include"psb-web-navhead.php";break;
case'fasilitas':include"psb-web-fasilitas.php";break;

case'keluar':include"psb-logout.php";break;
case 'main':
default:include"ro-depan.php";
}
?>

<?php 
//footer
include('../ro-includes/footer-admin.php');
?>
