<?php
 // Define relative path from this script to mPDF
 $dokumen='DATA SEMUA SISWA'; //Nama Dokumen
define('_MPDF_PATH','mpdf/'); //letak folder mpdf
include(_MPDF_PATH . "mpdf.php"); //panggil mpdf.php
$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
 
//Beginning Buffer to save PHP variables and HTML tags
ob_start();
?>
<!--Koding mulai, Anda bisa jalankan kode php,html, css pada baris ini.-->
<?php

//This code created by root93.co.id
//if you have any question
//contact me : myroot593@gmail.com
include('../ro-databases/koneksi.php');
$query="SELECT*FROM ro_formulir where status_pendaftaran='Diterima'";
$perintah=mysqli_query ($koneksi,$query) or die ("Gagal melakukan koneksi".mysqli_error());


?>
<html>
<head>
<style type="text/css">
    table{
        border: 1px solid #000;
        width: 100%;
        padding: 10px 10px;
        
       }
       body{
        font-size: 13px;

       }
</style>
</head>
<body>

<table align="center">
<tr>
<td colspan="2" align="center" style="font-size: 24px"><strong>BACKUP</strong></td>
</tr>
<tr>
 <td colspan="2" align="center" style="font-size: 18px"><strong>DATA SISWA DITERIMA</strong></td>
 </tr>
 </table>
 
<table>
<tbody> 
<?php while($data=mysqli_fetch_array($perintah)){

 ?>    
<tr>  
<td>Nama</td>
<td>: <?php echo $data['nama_siswa'];?></td>
</tr>
<tr>
<td>Nisnn</td>
<td>: <?php echo $data['nisn'];?></td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<td>: <?php echo $data['tanggal_lahir'];?></td>
</tr>
<tr>
<td>Asal Sekolah</td>
<td>: <?php echo $data['nama_sekolah'];?></td>
</tr>
<tr>
<td>No.Hp</td>
<td>: <?php echo $data['hp_siswa'];?></td>
</tr>
<tr>
<td>Alamat :</td>
<td>: <?php echo $data['alamat_siswa'];?></td>
 </tr>
 <tr>
<td>___________________________</td>
<td>_____________________________________________________________________________________</td>
 </tr>
<?php }?>           
</tbody>           
</table>

            </body>
            </html>
<?php
//batas kodingan 
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);

$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($dokumen.".pdf" ,'I');
exit;
?>