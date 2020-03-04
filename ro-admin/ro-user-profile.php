<?php 
include('../ro-databases/koneksi.php');
include('../ro-query/ro-user-update.php');
?>
<!-- CEGAH BY PASS PERHALAMAN -->
<?php include('ro-session-nobypass.php'); ?>
<div class="row">
<div class="col-lg-6">
<h2 class="page-header">Administrator</h2>
<div class="panel panel-default">
<div class="panel-heading">
User Profile 
</div>
<!-- /.panel-heading -->
<div class="panel-body">
<div class="table-responsive">
<form role="form" method="post" action="user">
<table class="table table-striped table-bordered table-hover">
<tbody>
                 

            <tr>  
                                            
                    <td>Username</td>
                    <td><input class="form-control" type="text" name="username" value="<?php echo"$username";?>" required="">
                    <input class="form-control" type="hidden" name="id" value="<?php echo"$id";?>"></td>
                    </tr>

                    <tr>
                    <td>Password</td>
                    <td><input class="form-control" type="password" name="password" id="password" required=""></td>
                    </tr>
                    <tr>
                    <td>Nama</td>
                    <td><input class="form-control" type="nama" name="nama" id="nama" value="<?php echo"$nama";?>" required=""></td>
                    </tr>

                    <tr>
                    <td>Email</td>
                    <td><input class="form-control" type="text" name="email" value="<?php echo"$email";?>" required="">
                    <input type="hidden" name="level" id="level" value="<?php echo"$level";?>">
                    </td>
                    </tr>
        </tbody>
        </table>
        <button type="submit" class="btn btn-primary" name="update" id="update">Update</button>
        </form>
</div>
<!-- /.table-responsive -->
</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-6 -->
</div>
<div class="<?php echo $usernameClass; ?>" role="alert">
  <span class="<?php echo $usernameClass_icon;?>" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
<?php echo"$usernameErr";?>
</div>
<div class="<?php echo $passwordClass; ?>" role="alert">
  <span class="<?php echo $passwordClass_icon;?>" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
<?php echo"$passwordErr";?>
</div>
<div class="<?php echo $namaClass; ?>" role="alert">
  <span class="<?php echo $namaClass_icon;?>" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
<?php echo"$namaErr";?>
</div>
<div class="<?php echo $emailClass; ?>" role="alert">
  <span class="<?php echo $emailClass_icon;?>" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
<?php echo"$emailErr";?>
</div>
<div class="<?php echo $berhasil_simpanClass; ?>" role="alert"><?php echo $berhasil_simpan; ?></div>
<div class="<?php echo $gagal_simpanClass; ?>" role="alert">
  <span class="<?php echo $gagal_simpanClass_icon;?>" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  <?php echo"$gagal_simpanErr";?>
</div>