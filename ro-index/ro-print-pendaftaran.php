
<?php
include('../ro-function/function.js');
?>
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title" style="text-transform: uppercase;">CETAK BUKTI PENDAFTARAN</h4>
</div>
<div class="panel-body">
<div class="row">
<div class="col-lg-6">
<form role="form" method="post" action="<?php echo htmlspecialchars("print-bukti");?>">                          
<div class="form-group">
<label>NISN :</label>
<input class="form-control" type="text" name="nisn" id="nisn" maxlength="10" minlength="10"  placeholder="Masukan NISN" onkeypress="return Angkasaja(event)" required="" />
</div>
<button type="submit" class="btn btn-primary" name="kirim" id="kirim">Cetak</button>
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



 
