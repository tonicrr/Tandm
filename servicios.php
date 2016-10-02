<!DOCTYPE HTML>
<html>
    <!-- START INCLUDE HEAD -->
    <?php include 'html/head/head.html';?>
    <!-- INCLUDE IMAGE CACHE -->
    <?php 
        require 'php/imageCache/ImageCache.php';
        $image          = new ImageCache();
        $image->cached_image_directory = dirname(__FILE__) . '/images/cached';
        $image1         = $image->cache('images/servicios2.jpg');
        $image2         = $image->cache('images/servicios1.jpg');
    ?>
    <body class="landing">
	<!-- Page Wrapper -->
        <div id="page-wrapper">
            <!-- Header -->
            <?php include 'html/header/headerFixed.html';?>
            <!-- responsive header -->
            <?php include 'html/header/headerResponsive.html';?>
            <!-- end header -->
            <section class="wrapper style5 padding-bottom">
                    <div class="inner">
                        <section>					
                            <div class="box alt">
                                <div class="row uniform 50%" style="font-size: 13px;">
                                    <div class="6u">
                                        <h4 style="text-align: center;">Bodas</h4>
                                        <span class="image fit">
                                            <a href="boda.php">
                                                <img src="<?php echo $image1; ?>" alt="" />
                                            </a>
                                            <br />Encontrad el tipo de servicio que más se adapte a vuestras necesidades. He elaborado 4 tipos distintos de servicios para que podáis elegir o combinar el que necesitáis.
                                        </span>
                                    </div>
                                    <div class="6u">
                                        <h4 style="text-align: center;">Eventos</h4>
                                        <span class="image fit">
                                            <a href="eventos.php">
                                                <img src="<?php echo $image2; ?>" alt="" />
                                            </a>
                                            <br />Una organización al detalle y personalizada para vuestro evento sea cual sea, en el sitio que sea y del tema que queráis.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
            </section>
            <!-- Footer -->
            <?php include 'html/footer/footer.html';?>
	</div>
	<!-- Scripts -->
        <?php include 'html/scripts/scripts.html';?>
        <script type="text/javascript">
            $(function() {
                    jQuery('.header').click(function() {
                        jQuery('#menu').show();
                    });
            });
        </script>
    </body>
</html>