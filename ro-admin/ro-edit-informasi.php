<div class="col-sm-9">
<h2><small>INFORMASI</small></h2>
<hr>
<div class="panel panel-default">
    <div class="panel-heading">
         <h4>Data Informasi</h4>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Detail Informasi</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
               <tbody>
                  <?php
                  include '../ro-databases/koneksi.php';
                    $no=1;
                    $sql =mysqli_query($koneksi,"select * from ro_informasi");
                    while ($data= $sql->fetch_assoc()) {
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td> 
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['detail_informasi']; ?></td>
                    <td><?php echo $data['tgl_post']; ?></td>
                   
                    <td align="center">
                      <a href="" class="btn btn-info" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                      <a href=""class="btn btn-danger" title="Hapus"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                  </tr>
                  <?php }
                  ?>
                </tbody>
             </table>
         </div>
     </div>
  </div>
 </div>
