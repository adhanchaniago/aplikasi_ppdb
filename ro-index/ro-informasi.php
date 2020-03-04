<body class="home">
    <!-- Color Bars (above header)-->
    <div class="container">

        <div class="row gallery-row"><!-- Begin Gallery Row --> 
           <div class="span12">
            <h5 class="title-bg">Informasi  
                <small></small>
            </h5>

        <!-- Gallery Thumbnails
            ================================================== -->

            <div class="row clearfix no-margin">
                <ul class="gallery-post-grid holder">
                   <?php 
                   include '../ro-databases/koneksi.php';    
                   $sql =mysqli_query($koneksi,"select * from ro_informasi order by id_informasi desc");
                   while ($data= $sql->fetch_assoc()) {

                    ?>
                    <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="#" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="detail" class="item-details-link"></a>
                            </span>
                        </span>

                        <img src="<?php echo "../file/".$data['image'] ?>" alt="Gallery">
                        <span class="project-details">
                            <a href="detail-<?php echo $data['id_informasi']?> "><?php echo $data['judul'];  ?></a>
                        </span>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>

</div><!-- End Gallery Row -->
</div>
</body>

