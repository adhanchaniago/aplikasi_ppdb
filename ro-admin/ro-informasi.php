<div class="col-sm-9">
  <h1><small>INFORMASI</small></h1>
  <hr>
  <form action="" class="form" enctype="multipart/form-data" id="form_informasi" method="post">

    <div class="form-group">
      <label>Judul</label>
      <input type="text" class="form-control" placeholder="-Judul-" name="judul">
    </div>

    <div class="form-group">
      <label>Gambar</label>
      <input type="file" class="" placeholder="" name="image">
      <label style="color: red;">*Gunakan ekstensi png atau jpg</label>
    </div>

    <div class="form-group">
      <label>Informasi</label>
      <textarea class="form-control" rows="15" id="detail_informasi"  name="detail_informasi"></textarea>
    </div>

    <div class="form-group" align="right">
      <input type="submit" class="btn btn-primary"  name="simpan" value="Upload">
    </div>
  </form>

  <?php

  include '../ro-databases/koneksi.php';

  $simpan =@$_POST['simpan'];

  if ($simpan) {

    $judul                 = @$_POST['judul'];
    $detail_informasi      = @$_POST['detail_informasi'];
    $tgl = Date('Y-m-d');

    $ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $nama = $_FILES['image']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];  

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){

      if($ukuran < 1044070){      
        move_uploaded_file($file_tmp, '../file/'.$nama);

        $query = mysqli_query($koneksi,"insert into ro_informasi values('','$judul','$detail_informasi','$tgl','$nama')");

        if($query){
          ?>
          <script type="text/javascript">
            alert('FILE BERHASIL DI UPLOAD');
          </script>
         <?php
        }else{
          ?>
          <script type="text/javascript">
            alert('GAGAL MENGUPLOAD GAMBAR');
          </script>
          <?php
        }
      }else{
        ?>
        <script type="text/javascript">
          alert('UKURAN FILE TERLALU BESAR');
        </script>
        <?php
      }
    }else{
      ?>
      <script type="text/javascript">
        alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');
      </script>
   <?php
    }
  }
  ?>
</div>
