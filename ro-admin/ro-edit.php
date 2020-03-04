<?php 
//panggil header, css, navigasi
include('../ro-includes/header-admin.php');
include('../ro-includes/css-admin.php');
include('../ro-databases/session.php');
include('../ro-includes/nav-admin.php');
?>
<?php 

include('../ro-databases/koneksi.php');
include('../ro-query/ro-edit-siswa.php');
?>
<div class="row">
<div class="col-lg-6">
<h2 class="page-header">Verifikasi Data Siswa </h2>
<p class="page-header"><a href="lihat"><button class="btn btn-default">Kembali</button></a></p>
<div class="panel panel-default">
<div class="panel-heading">
Form Edit dan Verifikasi siswa
</div>
                        <!-- /.panel-heading -->
<div class="panel-body">
<div class="table-responsive">
<form role="form" method="post" action="update-berhasil">
<table class="table table-striped table-bordered table-hover">
<tbody>
<td>Nama</td>
<td>
<fieldset disabled>
<input class="form-control" type="text" name="nama_siswa" id="nama_siswa" value="<?php echo"$nama_siswa";?>" required=""></fieldset><input class="form-control "  type="hidden" id="id" name="id" value="<?php echo"$id";?>"/>
</td>
</tr>
<tr>
<td>NISN</td>
<td>
<fieldset disabled>
<input class="form-control" type="text" name="nisn" id="nisn" value="<?php echo"$nisn";?>" required="" />
</fieldset>
</td>
</tr>
<tr>
<td>Status Siswa</td>
<td><select class="form-control" name="status_pendaftaran" id="status_pendaftaran" required="">
<option><?php echo "$status_pendaftaran";?></option>
<option>Belum diverifikasi</option>
<option>Diterima</option>
<option>Tidak Diterima</option>
</select>
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

<?php 
//footer
include('../ro-includes/footer-admin.php');
?>
