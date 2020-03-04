<?php
include('../ro-databases/koneksi.php');
include('../ro-function/function.js');
include('../ro-query/ro-simpan-siswa.php');
?>
<!-- CEGAH BY PASS PERHALAMAN -->
<?php include('ro-session-nobypass.php'); ?>
<br/>
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title" style="text-transform: uppercase;">TAMBAH SISWA</h4>
</div>
<div class="panel-body">
<div class="row">
<div class="col-lg-6">
<?php include('../ro-includes/variabel-siswa-error.php'); ?>
<form role="form" method="post" action="<?php echo htmlspecialchars("tambah");?>">    
<div class="panel-group" id="accordion">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseSatu">DATA SISWA #1</a>
</h4>
</div>
<div id="collapseSatu" class="panel-collapse collapse in">
<div class="panel-body">
                                          
<div class="form-group">
<label>NISN :</label>
<input class="form-control" type="text" name="nisn" id="nisn" maxlength="10" minlength="10"  placeholder="Masukan NISN" onkeypress="return Angkasaja(event)" required="" value="<?php echo $nisn;?>" />
</div>
<div class="form-group">
<label>Nama Siswa :</label>
<input  class="form-control" placeholder="Nama siswa" id="nama_siswa" name="nama_siswa" maxlength="30" minlength="3" required="" value="<?php echo $nama_siswa; ?>" />
</div>
<div class="form-group">
<label> Jenis Kelamin : </label>
<select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required="">
<option value="Laki - laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select>
</div>
<div class="form-group">
<label>Tempat Lahir :</label>
<input class="form-control" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir" maxlength="20" minlength="3" required="" value="<?php echo $tempat_lahir;?>">
</div>
<div class="form-group">
<label>Tanggal Lahir :</label>
<input type="text" name="tanggal_lahir" id="tanggal_lahir" class="tanggal form-control" required="" placeholder="Contoh:1999-07-30" value="<?php echo $tanggal_lahir; ?>" />
</div>
<div class="form-group">
<label>Agama:</label>
<select class="form-control" name="agama_siswa" id="agama_siswa" required="">
<option value="">Pilih Agama</option>
<option value="Islam">Islam</option>
<option value="Kristen Katolik">Kristen Katolik</option>
<option value="Kristen Protestan">Kristen Protestan</option>
<option value="Hindu">Hindu</option>
<option value="Budha">Budha</option>
</select>
</div>
<div class="form-group">
<label>Status Dalam Keluarga:</label>
<select class="form-control" name="status_keluarga" id="status_keluarga" required="">
<option value="">Pilih</option>
<option value="Anak Kandung">Anak Kandung</option>
<option value="Anak Angkat">Anak Angkat</option>
</select>
</div>
<div class="form-group">
<label>Alamat Siswa : </label>
<textarea id="alamat_siswa" name="alamat_siswa" class="form-control" maxlength="100" minlength="3" rows="3" required="" placeholder="Masukan ALamat Siswa"><?php echo $alamat_siswa;?></textarea>
</div>
<div class="form-group">
<label>No. Hp Siswa : </label>
<input class="form-control" type="text" name="hp_siswa" id="hp_siswa" maxlength="12" min="12" placeholder="Masukan No Hp Siswa" onkeypress="return Angkasaja(event)" required="" value="<?php echo $hp_siswa;?>" />
</div>

</div>
</div>
</div>
 <!-- /.Batas Accordion per baris -->
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseDua">DATA ORANG TUA #2</a>
</h4>
</div>
<div id="collapseDua" class="panel-collapse collapse">
<div class="panel-body">

 <!-- /.Data Ayah -->
<div class="form-group">
<label>Nama Ayah : </label>
<input class="form-control" type="text" name="nama_ayah" id="nama_ayah" maxlength="30"  minlength="3" placeholder="Masukan Nama Ayah" required="" value="<?php echo $nama_ayah;?>" />
</div>
<div class="form-group">
<label>Pendidikan Ayah:</label>
<select class="form-control" name="pendidikan_ayah" id="pendidikan_ayah" maxlength="20" required="">
<option value="">Pilih</option>
<option value="Tidak Sekolah">Tidak Sekolah</option>
<option value="SD/MI">SD/MI</option>
<option value="SMP/MTs">SMP/MTs</option>
<option value="SMK/SMA/MA">SMK/SMA/MA</option>
<option value="Diploma">Diploma</option>
<option value="S1">S1</option>
<option value="S2">S2</option>
<option value="S3">S3</option>
</select>
</div>
<div class="form-group">
<label>Pekerjaan Ayah:</label>
<select class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" maxlength="20" required="">
<option value="">Pilih</option>
<option value="Buruh">Buruh</option>
<option value="Tani">Tani</option>
<option value="Wiraswasta">Wiraswasta</option>
<option value="PNS">PNS</option>
<option value="Polri/TNI">Polri/TNI</option>
<option value="Perangkat Desa">Perangkat Desa</option>
<option value="Nelayan">Nelayan</option>
<option value="Lainnya">Lainnya</option>
</select>
</div>
<div class="form-group">
<label>Penghasilan Ayah:</label>
<select class="form-control" name="penghasilan_ayah" id="penghasilan_ayah" maxlength="20" required="">
<option value="">Pilih</option>
<option value="-500rb">-500rb</option>
<option value="500-1jt">500-1jt</option>
<option value="1jt-3jt">1jt-3jt</option>
<option value="3jt-5jt">3jt-5jt</option>
<option value="5jt-10jt">5jt-10jt</option>
<option value="10jt+">10jt+</option>
</select>
</div>
<div class="form-group">
<label>No.Tlp/Hp Ayah : </label>
<input class="form-control" type="text" name="hp_ayah" id="hp_ayah" maxlength="12" min="11" placeholder="Masukan No Tlp. Ayah yang dapat dihubungi" onkeypress="return Angkasaja(event)" required="" value="<?php echo $hp_ayah;?>" />
</div>
 <!-- /.Data Ibu -->

 <div class="form-group">
<label>Nama Ibu : </label>
<input class="form-control" type="text" name="nama_ibu" id="nama_ibu" maxlength="30" placeholder="Masukan Nama Ibu" required="" value="<?php echo $nama_ibu;?>" />
</div>
<div class="form-group">
<label>Pendidikan Ibu:</label>
<select class="form-control" name="pendidikan_ibu" id="pendidikan_ibu" required="">
<option value="">Pilih</option>
<option value="Tidak Sekolah">Tidak Sekolah</option>
<option value="SD/MI">SD/MI</option>
<option value="SMP/MTs">SMP/MTs</option>
<option value="SMK/SMA/MA">SMK/SMA/MA</option>
<option value="Diploma">Diploma</option>
<option value="S1">S1</option>
<option value="S2">S2</option>
<option value="S3">S3</option>
</select>
</div>
<div class="form-group">
<label>Pekerjaan ibu:</label>
<select class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" required="">
<option value="">Pilih</option>
<option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
<option value="Buruh">Buruh</option>
<option value="Tani">Tani</option>
<option value="Wiraswasta">Wiraswasta</option>
<option value="PNS">PNS</option>
<option value="Polri/TNI">Polri/TNI</option>
<option value="Perangkat Desa">Perangkat Desa</option>
<option value="Nelayan">Nelayan</option>
<option value="Lainnya">Lainnya</option>
</select>
</div>
<div class="form-group">
<label>Penghasilan Ibu:</label>
<select class="form-control" name="penghasilan_ibu" id="penghasilan_ibu" required="">
<option value="">Pilih</option>
<option value="-500rb">-500rb</option>
<option value="500-1jt">500-1jt</option>
<option value="1jt-3jt">1jt-3jt</option>
<option value="3jt-5jt">3jt-5jt</option>
<option value="5jt-10jt">5jt-10jt</option>
<option value="10jt+">10jt+</option>
</select>
</div>
<div class="form-group">
<label>No.Tlp/Hp ibu : </label>
<input class="form-control" type="text" name="hp_ibu" id="hp_ibu" maxlength="12" min="11" placeholder="Masukan No Tlp. Ibu yang dapat dihubungi" onkeypress="return Angkasaja(event)" required="" value="<?php echo $hp_ibu;?>" />
</div>
</div>
</div>
</div>
 <!-- /.Batas Accordion per baris -->
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseTiga">DATA WALI #3</a>
</h4>
</div>
<div id="collapseTiga" class="panel-collapse collapse">
<div class="panel-body">
Data wali diisi jika memang ada wali, jika tidak ada tidak perlu diisi. Pilihan ini bersifat optional
<div class="form-group">
<label>Nama Wali : </label>
<input class="form-control" type="text" maxlength="30" name="nama_wali" id="nama_wali" placeholder="Masukan Nama Wali" value="<?php echo $nama_wali;?>" />
</div>
<div class="form-group">
<label>Pendidikan Wali:</label>
<select class="form-control" name="pendidikan_wali" id="pendidikan_wali">
<option value="">Pilih</option>
<option value="Tidak Sekolah">Tidak Sekolah</option>
<option value="SD/MI">SD/MI</option>
<option value="SMP/MTs">SMP/MTs</option>
<option value="SMK/SMA/MA">SMK/SMA/MA</option>
<option value="Diploma">Diploma</option>
<option value="S1">S1</option>
<option value="S2">S2</option>
<option value="S3">S3</option>
</select>
</div>
<div class="form-group">
<label>Pekerjaan Wali:</label>
<select class="form-control" name="pekerjaan_wali" id="pekerjaan_wali">
<option value="">Pilih</option>
<option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
<option value="Buruh">Buruh</option>
<option value="Tani">Tani</option>
<option value="Wiraswasta">Wiraswasta</option>
<option value="PNS">PNS</option>
<option value="Polri/TNI">Polri/TNI</option>
<option value="Perangkat Desa">Perangkat Desa</option>
<option value="Nelayan">Nelayan</option>
<option value="Lainnya">Lainnya</option>
</select>
</div>
<div class="form-group">
<label>Penghasilan Wali:</label>
<select class="form-control" name="penghasilan_wali" id="penghasilan_wali">
<option value="">Pilih</option>
<option value="-500rb">-500rb</option>
<option value="500-1jt">500-1jt</option>
<option value="1jt-3jt">1jt-3jt</option>
<option value="3jt-5jt">3jt-5jt</option>
<option value="5jt-10jt">5jt-10jt</option>
<option value="10jt+">10jt+</option>
</select>
</div>
<div class="form-group">
<label>No.Tlp/Hp Wali : </label>
<input class="form-control" type="text" name="hp_wali" id="hp_wali" maxlength="12" min="11" placeholder="Masukan No Tlp. Ayah yang dapat dihubungi" onkeypress="return Angkasaja(event)" value="<?php echo $hp_wali;?>" />
</div>
</div>
</div>
</div>
 <!-- /.Batas Accordion per baris -->
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseEmpat">DATA SEKOLAH #4</a>
</h4>
</div>
<div id="collapseEmpat" class="panel-collapse collapse">
<div class="panel-body">
<div class="form-group">
<label>NPSN Sekolah : </label>
<input class="form-control" type="text" maxlength="8" minlength="5" name="npsn_sekolah" id="npsn_sekolah" placeholder="Masukan No NPSN Sekolah" required="" value="<?php echo $npsn_sekolah;?>" />
</div>
<div class="form-group">
<label>Asal Sekolah: </label>
<input class="form-control" type="text" maxlength="30" minlength="5" name="nama_sekolah" id="nama_sekolah" placeholder="Masukan Nama Sekolah" required="" value="<?php echo $nama_sekolah;?>" />
</div>
<div class="form-group">
<label>Status Sekolah</label>
<select class="form-control" name="status_sekolah" id="status_sekolah" minlength="3" maxlength="20" required="">
<option value="">Pilih</option>
<option value="Negeri">Negeri</option>
<option value="Swasta">Swasta</option>
</select>
</div>

<div class="form-group">
<label>Model Ujian Nasional </label>
<select class="form-control" name="model_ujian" id="model_ujian" maxlength="4" minlength ="4" required="">
<option value="">Pilih</option>
<option value="UNBK">UNBK</option>
<option value="UNKP">UNKP</option>
</select>
</div>

<div class="form-group">
<label>Alamat Sekolah : </label>
<textarea id="alamat_sekolah" name="alamat_sekolah" class="form-control" maxlength="100" minlength="20" rows="3" required="" placeholder="Masukan Alamat Sekolah"><?php echo $alamat_sekolah;?></textarea>
</div>

<div class="form-group">
<label>Tahun Lulus: </label>
<input class="form-control" type="text" maxlength="4" minlength="4" name="tahun_lulus" id="tahun_lulus" placeholder="Masukan Tahun Lulus" onkeypress="return Angkasaja(event)" required="" value="<?php echo $tahun_lulus;?>" />
</div>

</div>
</div>
</div>
 <!-- /.Batas Accordion per baris -->                                                           
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseLima">DATA NILAI UNBK/UNKP #5</a>
</h4>
</div>
<div id="collapseLima" class="panel-collapse collapse">
<div class="panel-body">
<div class="form-group">
<label>IPA: </label>
<input class="form-control" maxlength="2" minlength="2" name="ipa" id="ipa" placeholder="Masukan Nilai" required="" value="<?php echo $ipa;?>" />
</div>
<div class="form-group">
<label>Matematika: </label>
<input class="form-control" maxlength="2" minlength="2" name="matematika" id="matematika" placeholder="Masukan Nilai" required="" value="<?php echo $matematika;?>" />
</div>
<div class="form-group">
<label>Bahasa Indonesia: </label>
<input class="form-control" maxlength="2" minlength="2" name="bahasa_indonesia" id="bahasa_indonesia" placeholder="Masukan Nilai" required="" value="<?php echo $bahasa_indonesia;?>" />
</div>
<div class="form-group">
<label>Bahasa Ingris: </label>
<input class="form-control" maxlength="2" minlength="2" name="bahasa_ingris" id="bahasa_ingris" placeholder="Masukan Nilai" required="" value="<?php echo $bahasa_ingris;?>" />
</div>
<input type="hidden" maxlength="18" minlength="18" name="status_pendaftaran" id="status_pendaftaran" value="Belum Diverifikasi" />
<input type="hidden" name="tanggal_pendaftaran" id="tanggal_pendaftaran" value="<?php echo date("y-m-d");?>" />
</div>
</div>
</div>

 <!-- /.Batas Accordion per baris -->  

 <!-- /.Nilai Raport 
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseEnam">DATA NILAI RAPORT #5</a>
</h4>
</div>
<div id="collapseEnam" class="panel-collapse collapse">
<div class="panel-body">
 <div class="form-group">
  <div class="col-xs-2">
    <label for="ipa">IPA Semester I</label>
    <input class="form-control" id="r_ipa_1" name="r_ipa_1" type="text" maxlength="2" minlength="2" required="">
  </div>
  <div class="col-xs-2">
    <label for="ipa">Ipa Semester II</label>
    <input class="form-control" id="r_ipa_2" name="r_ipa_2" maxlength="2" minlength="2" type="text" required="">
  </div>
  <div class="col-xs-2">
    <label for="ipa">IPA Semester III</label>
    <input class="form-control" id="r_ipa_3" name="r_ipa_3" maxlength="2" minlength="2" required="" type="text">
  </div>
  <div class="col-xs-2">
    <label for="ipa">IPA Semester IV</label>
    <input class="form-control" id="r_ipa_4" name="r_ipa_4" maxlength="2" minlength="2" required="" type="text">
  </div>
    <div class="col-xs-2">
    <label for="ipa">IPA Semester V</label>
    <input class="form-control" id="r_ipa_5" name="r_ipa_5" maxlength="2" minlength="2" required="" type="text">
  </div>
</div> 
</div>
</div>
</div>
-->  

 <!-- /.Panel Group accordion Batas Akhir -->
</div>

<button type="submit" class="btn btn-primary" name="kirim" id="kirim">Kirim</button>
<button type="reset" class="btn btn-default">Batal</button>
</form>
</div>
</div>
<!-- /.row (nested) -->
</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-12 -->



 
