 <body>
 <div class="container" role="main" style="margin-top: 20px;">
<div class="row">
<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="beranda"><i class="fa fa-home fa-fw"></i> <?php echo "$row[nama_sekolah]";?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--
        <li class="active"><a href="beranda">Beranda <span class="sr-only">(current)</span></a></li>
      -->
        <!--
        <li><a href="#"><i class="fa fa-edit fa-fw"></i>Buku Tamu</a></li>
      -->
      </ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="beranda">Beranda <span class="sr-only">(current)</span></a></li>
        <li><a href="pengumuman-kelulusan"><i class="fa fa-microphone fa-fw"></i>Pengumuman</a></li>
        <li><a href="daftar"><i class="fa fa-edit fa-fw"></i>Daftar</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-print fa-fw"></i>Print<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="bukti-pendaftaran">Bukti Pendaftaran</a></li>
            <li><a href="kartu-peserta">Kartu Peserta</a></li>
          </ul>
        </li>
        <li><a href="../ro-admin/ro-login.php">Login<span class="sr-only">(current)</span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

