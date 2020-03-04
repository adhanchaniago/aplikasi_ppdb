

<?php
include('../ro-databases/koneksi.php');
include('../ro-query/ro-siswa-bverifikasi.php');
?>
<!-- CEGAH BY PASS PERHALAMAN -->
<?php include('ro-session-nobypass.php'); ?>

<div class="row">
<div class="col-lg-12">
<h2 class="page-header">Siswa Belum Diverifikasi</h2>
<div class="panel panel-default">
<div class="panel-heading">
Data siswa yang belum diverifikasi</div>
<!-- /.panel-heading -->
<div class="panel-body">
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<tr>
<th colspan="2">JUMLAH PENDAFTAR</th>
<th><?php echo $jumlah_siswa; ?></th>
<th></th>                                      
</tr>
<tr>
<th>No</th>
<th>Nama siswa</th>
<th>NISN</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php //Perulangan 
$no=$awal+1;
while($data=mysqli_fetch_array($query)) {                     
                            
    ?>
<tr class="odd gradeX">
<td><?php echo $no;?></td>
<td><?php echo $data['nama_siswa'];?></td>
<td><?php echo $data['nisn'];?></td>
<td>
<a href="detail-<?php echo $data['nisn']?>"><i  class="fa fa-eye fa-fw" alt="detail" title="View Detail"></i></a>
<a href="nilai-<?php echo $data['nisn']?>" target="_blank"><i  class="fa fa-book fa-fw" alt="nilai" title="Lihat Nilai"></i></a>
<a href="edit-<?php echo $data['nisn']?>" target="_blank"><i class="fa fa-edit fa-fw" alt="verifikasi" title="Verifikasi"></i></a>
<a href="ro-delete.php?del=<?php echo $data['id']?>"><i class="fa fa-trash-o fa-fw" alt="delete" title="Delete"></i></a>
</td>
</tr>
 <?php $no+=1;  } ?>
</tbody>
</table>
</div><div class="panel-footer">
Pogung.co
</div>
</div>
</div>
</div>

       
            <!-- /.row -->
