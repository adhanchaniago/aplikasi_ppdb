<?php 
include('../ro-includes/head-ppdb.php'); 
include('../ro-includes/css-ppdb.php'); 
include('../ro-query/ro-print.php');
?>
<?php 
if(empty($no_pendaftaran)){
$no_pendaftaran="";
}
?>
<body>
<div class="container" role="main">
<section class="col-sm-12">
<div class="row">
<div class="col-lg-6">
<h3 class="page-header">Bukti Pendaftaran</h3>
<?php include('../ro-includes/variabel-siswa-error.php'); ?>
<div class="panel panel-default">
<div class="panel-heading">
Data Pendaftaran
</div>
              <!-- /.panel-heading -->
<div class="panel-body">
<div class="table-responsive">
<table class="table table-stdiped table-bordered table-hover">
<tbody>
<tr>
<td>Nomor Registrasi</td>
<td><b>00<?php echo $no_pendaftaran;?>/PNT-PPDB/<?php echo date("y");?></b></td>
</tr>
<tr>
<td colspan="3"><b>DATA SISWA</b></td>
</tr>
<tr>
<td>NISN</td>
<td><?php echo $nisn?></td>
</tr>
<tr>
<td>Nama Siswa</td>
<td><?php echo $nama_siswa;?></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td><?php echo $jenis_kelamin; ?></td>
</tr>
<tr>
<td>Tempat Lahir</td>
<td><?php echo $tempat_lahir;?></td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<td><?php echo $tanggal_lahir;?></td>
</tr>
<tr>
<td>Agama Siswa</td>
<td><?php echo $agama_siswa;?></td>
</tr>
<tr>
<td>Status Keluarga</td>
<td><?php echo $status_keluarga;?></td>
</tr>
<tr>
<td>Alamat Siswa</td>
<td><?php echo $alamat_siswa;?></td>
</tr>
<tr>
<td>HP</td>
<td><?php echo $hp_siswa;?></td>
</tr>
<tr>
<td colspan="3"><b>DATA ORANGTUA / WALI</b></td>
</tr>
<tr>
<td>Nama Ayah</td>
<td><?php echo $nama_ayah;?></td>
</tr>
<tr>
<td>Pendidikan Ayah</td>
<td><?php echo $pendidikan_ayah;?></td>
</tr>
<tr>
<td>Pekerjaan Ayah</td>
<td><?php echo $pekerjaan_ayah;?></td>
</tr>
<tr>
<td>Penghasilan Ayah</td>
<td><?php echo $penghasilan_ayah;?></td>
</tr>
<tr>
<td>Tlp/HP Ayah</td>
<td><?php echo $hp_ayah;?></td>
</tr>
<td>Nama Ibu</td>
<td><?php echo $nama_ibu;?></td>
</tr>
<tr>
<td>Pendidikan Ibu</td>
<td><?php echo $pendidikan_ibu;?></td>
</tr>
<tr>
<td>Pekerjaan Ibu</td>
<td><?php echo $pekerjaan_ibu;?></td>
</tr>
<tr>
<td>Penghasilan Ibu</td>
<td><?php echo $penghasilan_ibu;?></td>
</tr>
<tr>
<td>Tlp/HP Ibu</td>
<td><?php echo $hp_ibu;?></td>
</tr>
<td>Nama Wali</td>
<td><?php echo $nama_wali;?></td>
</tr>
<tr>
<td>Pendidikan Wali</td>
<td><?php echo $pendidikan_wali;?></td>
</tr>
<tr>
<td>Pekerjaan Wali</td>
<td><?php echo $pekerjaan_wali;?></td>
</tr>
<tr>
<td>Penghasilan Wali</td>
<td><?php echo $penghasilan_wali;?></td>
</tr>
<tr>
<td>Tlp/HP Wali</td>
<td><?php echo $hp_wali;?></td>
</tr>
<tr>
<td colspan="3"><b>DATA ASAL SEKOLAH</b></td>
</tr>
<tr>
<td>NPSN Sekolah</td>
<td><?php echo $npsn_sekolah; ?></td>
</tr>
<tr>
<td>Nama Sekolah</td>
<td><?php echo $nama_sekolah; ?></td>
</tr>
<tr>
<td>Status Sekolah</td>
<td><?php echo $status_sekolah; ?></td>
</tr>
<tr>
<td>Model Ujian</td>
<td><?php echo $model_ujian; ?></td>
</tr>
<td>Alamat Sekolah</td>
<td><?php echo $alamat_sekolah; ?></td>
</tr>
</tr>
<td>Tahun Lulus</td>
<td><?php echo $tahun_lulus; ?></td>
</tr>
<td>Tanggal Pendaftaran</td>
<td><?php echo $tanggal_pendaftaran; ?></td>
</tr>

</tbody>
</table></div>
<!-- /.table-responsive -->
</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
<p>
<a href="JavaSCript:window.print()"><button class="btn btn-primary"><i class="fa fa-print fa-fw"></i>PRINT</button></a></p>
</div>
<!-- /.col-lg-6 -->
</div>
</section>
</div>
</body>
</html>