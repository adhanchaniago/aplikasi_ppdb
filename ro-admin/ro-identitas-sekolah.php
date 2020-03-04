<?php 
include('../ro-databases/koneksi.php');
include('../ro-query/ro-identitas-update.php');

?>
<!-- CEGAH BY PASS PERHALAMAN -->
<?php include('ro-session-nobypass.php'); ?>

<?php include('../ro-function/function.js'); ?>
<div class="row">
<div class="col-lg-6">
<h2 class="page-header">Update Data Sekolah </h2>
<p class="page-header"><a href="beranda"><button class="btn btn-default">Kembali</button></a></p>
<div class="panel panel-default">
<div class="panel-heading">
Masukan Data/Identitas Sekolah
</div>
                        <!-- /.panel-heading -->
<div class="panel-body">
<div class="table-responsive">
<form role="form" method="post" action="identitas-sekolah">
<table class="table table-striped table-bordered table-hover">
<tbody>
<td>Nama Sekolah</td>
<td>
<input class="form-control" type="text" name="nama_sekolah" id="nama_sekolah" value="<?php echo"$row[nama_sekolah]";?>" required="" minwidth="3" maxwidth="30"><input class="form-control "  type="hidden" id="id" name="id" value="<?php echo"$row[id]";?>"/>
</td>
</tr>
<tr>
<td>Alamat Sekolah</td>
<td>
<input class="form-control" type="text" name="alamat_sekolah" id="alamat_sekolah" value="<?php echo"$row[alamat_sekolah]";?>" required="" minwidth="3" maxwidth="50" />
</td>
</tr>
<tr>
<td>Tlp/Hp Sekolah</td>
<td>
<input class="form-control" type="text" name="telephone_sekolah" id="telephone_sekolah" value="<?php echo"$row[telephone_sekolah]";?>"  onkeypress="return Angkasaja(event)" required="" minwidth="12" maxwidth="12" />
</td>
</tr>
</tbody>
</table><button type="submit" class="btn btn-primary" name="update" id="update">Update</button>
</form>

</div>
<!-- /.table-responsive -->
</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-6 -->
<div class="<?php echo $nama_sekolahClass; ?>" role="alert">
  <span class="<?php echo $nama_sekolahClass_icon;?>" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
<?php echo"$nama_sekolahErr";?>
</div>
<div class="<?php echo $alamat_sekolahClass; ?>" role="alert">
  <span class="<?php echo $alamat_sekolahClass_icon;?>" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
<?php echo"$alamat_sekolahErr";?>
</div>
<div class="<?php echo $telephone_sekolahClass; ?>" role="alert">
  <span class="<?php echo $telephone_sekolahClass_icon;?>" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
<?php echo"$telephone_sekolahErr";?>
</div>

<div class="<?php echo $berhasil_simpanClass; ?>" role="alert"><?php echo $berhasil_simpan; ?></div>
<div class="<?php echo $gagal_simpanClass; ?>" role="alert">
  <span class="<?php echo $gagal_simpanClass_icon;?>" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  <?php echo"$gagal_simpanErr";?>
</div>