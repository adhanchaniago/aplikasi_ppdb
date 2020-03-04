<!-- <div class="container">		
	<h5>Cetak Laporan Ya</h5>
	<form class="form-inline" method="post" action="cetak_laporan.php">
		<div class="form-group">
			<label for="nama">Dari Tanggal:</label>
			<input type="date" class="form-control" name="tgl1">
		</div>
		<div class="form-group">
			<label for="alamat">Sampai Tanggal:</label>
			<input type="date" class="form-control" id="alamat" name="tgl2">
		</div>	
		<div class="form-group">
			<label>Pilih Kategori:</label>
			<select class="form-control" name="kategori" id="kategori" required="">
			<option value="">Pilih Kategori</option>
			<option value="Belum Diverifikasi">Belum Diverifikasi</option>
			<option value="Diterima">Diterima</option>
			<option value="Tidak Diterima">Tidak Diterima</option>
			
			</select>
		</div>		
		<button type="submit" class="btn btn-primary" name="submit" target="_blank" value="submit" >Simpan</button>
	</form>
</div>
 -->

<div class="container">
 <div class="col-lg-4">  
  <div class="page-header">
   <h3>Cetak Laporan</h3>
  </div>

<form  method="post" action="cetak_laporan.php">
   <div class="form-group">
    <label>Dari Tanggal</label>
    <input type="date" class="form-control" name="tgl1">
   </div>
   <div class="form-group">
    <label>Sampai Tanggal</label>
    <input type="date" class="form-control" id="alamat" name="tgl2">
   </div>

    <div class="form-group">
    <label>Pilih Kategori</label>
		<select class="form-control" name="kategori" id="kategori" required="">
		<option value="">Pilih Kategori</option>
		<option value="Belum Diverifikasi">Belum Diverifikasi</option>
		<option value="Diterima">Diterima</option>
		<option value="Tidak Diterima">Tidak Diterima</option>
	</select>
   </div>
   <div class="form-group">
    <button type="submit" class="btn btn-primary" name="submit" target="_blank">Cetak</button>
    <button type="reset" class="btn btn-danger">Reset</button>
   </div>
  </form>
 </div>
</div>