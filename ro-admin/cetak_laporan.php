


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css">

<style>
#header{
	width:100%;
	background:#252525;
	text-align: justify-all;
}
#content{
	position:relative;
	background:#eee;
	margin:0px 20px;
}

#footer{
	position:relative;
	background:#000;
	height:40px;
	line-height:40px;
	color:#fff;
	text-align:center;
}

/*CONTENT SECTION*/
a.title{
	color:#f0f0f0; 
	font-weight:bold; 
	text-decoration:none; 
	font-size:30px; 
	line-height:60px; 
	padding:20px;
}
p{
	padding:.5em 1em;
	font-size:20px;
	text-align:justify;
}
</style>

<!-- 	<link rel="stylesheet" href="css.css" type="text/css"> -->
</head>
<body>
<div id="header">
	<a href="" class="title">Rekap Data Laporan Pendaftaran</a>
</div>
<div id="content">
	<table class="table table-bordered">
  <thead>
    <tr>
    <th>No</th>
	<th>NISN</th>
	<th>Nama siswa</th>
	<th>Jenis Kelamin</th>
	<th>Tanggal Lahir</th>
	<th>Alamat</th>
	<th>Sekolah Asal</th>
	<th>Status Pendaftaran</th>
    </tr>
  </thead>
  <tbody>
<?php //Perulangan 
include '../ro-databases/koneksi.php';
$no=1;

$tgl1=$_POST['tgl1'];
$tgl2=$_POST['tgl2'];
$kategori=$_POST['kategori'];


// $tgl1='2019-07-01';
//  $tgl2='2019-07-31';
//  $kategori='Belum Diverifikasi';

$sql =mysqli_query($koneksi,"SELECT * FROM ro_formulir WHERE (tanggal_pendaftaran BETWEEN '$tgl1' AND '$tgl2') and status_pendaftaran='$kategori'");
while ($data= $sql->fetch_assoc()) {
?>

    <tr>
     <!--  <th scope="row">1</th> -->
     <td><?php echo $no++;?></td>
		<td><?php echo $data['nisn'];?></td>
		<td><?php echo $data['nama_siswa'];?></td>
		<td><?php echo $data['jenis_kelamin'];?></td>
		<td><?php echo $data['tanggal_lahir'];?></td>
		<td><?php echo $data['alamat_siswa'];?></td>
		<td><?php echo $data['nama_sekolah'];?></td>
		<td><?php echo $data['status_pendaftaran'];?></td>
    </tr>
     <?php $no+=1;  } ?>
  </tbody>
</table>
</div>
<div id="footer">
	Copyright 2019 SMK MUHAMMADIYAH BERBAH. Designed by Pogung.co Design All rights reserved
</div>

</body>
</html>
<script>
	window.print();
</script>