<?php 
//panggil header, css, navigasi
include('../ro-includes/header-admin.php');
include('../ro-includes/css-admin.php');
include('../ro-databases/session.php');
include('../ro-includes/nav-admin.php');

?>
<?php 
include('../ro-databases/koneksi.php');
include('../ro-query/ro-nilai-siswa.php');
?>
<div class="row">
<div class="col-lg-6">
<h2 class="page-header">Nilai Siswa</h2>
<p class="page-header"><a href="lihat"><button class="btn btn-default">Kembali</button></a></p>
<div class="panel panel-default">
<div class="panel-heading">
Nilai Siswa
</div>
                        <!-- /.panel-heading -->
<div class="panel-body">
<div class="table-responsive">
<table class="table table-stdiped table-bordered table-hover">
<tbody>
<tr>
<td>Nama Siswa</td>
<td><?php echo $nama_siswa;?></td>
</tr>
<tr>
<td>NISN</td>
<td><?php echo $nisn?></td>
</tr>
</tbody>
</table></div>
<!-- /.table-responsive -->
<div class="table-responsive">
<table class="table table-stdiped table-bordered table-hover">
<tbody>
<tr>
<td>IPA</td>
<td>Matematika</td>
<td>Bahasa Indonesia</td>
<td>Bahasa Ingris</td>
<td><b>Rata-Rata Nilai</b></td>
</tr>
<tr>
<td><?php echo $ipa;?></td>
<td><?php echo $matematika;?></td>
<td><?php echo $bahasa_indonesia;?></td>
<td><?php echo $bahasa_ingris;?></td>
<td><b><?php $jumlah=($ipa+$matematika+$bahasa_indonesia+$bahasa_ingris)/4 ; echo  $jumlah; ?></b></td>
</tr>
</tbody>
</table></div>
<!-- /.table-responsive -->
</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-6 -->
<?php 
//footer
include('../ro-includes/footer-admin.php');
?>