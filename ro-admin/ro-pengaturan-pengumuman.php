<!-- CEGAH BY PASS PERHALAMAN -->
<?php
include('../ro-databases/koneksi.php');
include('../ro-query/ro-pengumuman-set.php');
?>

<!-- CEGAH BY PASS PERHALAMAN -->
<?php include('ro-session-nobypass.php'); ?>
<div class="row">
<div class="col-lg-6">
<h2 class="page-header">Pengaturan Buka Tutup Pengumuman</h2>
<div class="panel panel-default">
<div class="panel-heading">
Atur aktif dan non aktif Pengumuman
</div>
<!-- /.panel-heading -->
<div class="panel-body">
<form role="form" method="post" action="pengaturan-pengumuman">    
<div class="form-group">
<input type="hidden" name="id" value="<?php echo "$row[id]"; ?>">
</div>
<div class="form-group">
<label>Pengaturan Buka Tutup Pengumuman</label>
<select class="form-control" name="pengaturan_pengumuman" id="pengaturan_pengumuman" required="">
<option><?php echo $row['setpengumuman'];?></option>
<option>Buka</option>
<option>Tutup</option>
</select>
</div>
<button type="submit" class="btn btn-primary" name="simpan" id="simpan">Simpan</button>
</form>
</div>
</div>
</div>
</div>
<div class="<?php echo $pengaturan_pengumumanClass; ?>" role="alert">
  <span class="<?php echo $pengaturan_pengumumanClass_icon;?>" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
<?php echo"$pengaturan_pengumumanErr";?>
</div>
<div class="<?php echo $berhasil_simpanClass; ?>" role="alert"><?php echo $berhasil_simpan; ?></div>
<div class="<?php echo $gagal_simpanClass; ?>" role="alert">
  <span class="<?php echo $gagal_simpanClass_icon;?>" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  <?php echo"$gagal_simpanErr";?>
</div>