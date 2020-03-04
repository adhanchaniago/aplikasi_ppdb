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
<h3 class="page-header">Kartu Peserta</h3>
<?php include('../ro-includes/variabel-siswa-error.php'); ?>
<div class="panel panel-default">
<div class="panel-heading">
Kartu Peserta
</div>
              <!-- /.panel-heading -->
<div class="panel-body">
<div class="table-responsive">
<table class="table table-stdiped table-bordered table-hover">
<tbody>

<tr>
<td colspan="3"><h4>No.Pendafataran: 00<?php echo $no_pendaftaran;?>/PNT-PPDB/<?php echo date("y");?></h4></td>
</tr>
<tr>
<td>Nama Siswa</td>
<td><?php echo $nama_siswa;?></td>
</tr>
<tr>
<td>NISN</td>
<td><?php echo $nisn?></td>
</tr>
<tr>
<td>Asal Sekolah</td>
<td><?php echo $nama_sekolah?></td>
</tr>
<tr>
<td>Tanggal Pendaftaran</td>
<td><?php echo $tanggal_pendaftaran?></td>
</tr>
</tbody>
</table></div>
<!-- /.table-responsive -->
</div>

<!-- /.panel-body -->
</div>
<a href="JavaSCript:window.print()"><button class="btn btn-primary"><i class="fa fa-print fa-fw"></i>PRINT</button></a></p>
<!-- /.panel -->
</div>
<!-- /.col-lg-6 -->
</div>
</section>
</div>
</body>
</html>