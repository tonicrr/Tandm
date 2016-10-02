<!DOCTYPE HTML>
<html>
    <!-- START INCLUDE HEAD -->
    <?php include 'html/head/head.html';?>
    <!-- INCLUDE IMAGE CACHE -->
    <?php 
        require 'php/imageCache/ImageCache.php';
        $image          = new ImageCache();
        $image->cached_image_directory = dirname(__FILE__) . '/images/cached';
        $image1         = $image->cache('images/org_completa.jpg');
        $image2         = $image->cache('images/Decoracio.jpg');
        $image3         = $image->cache('images/Supervisio.jpg');
        $image4         = $image->cache('images/Brainstorming.jpg');
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
                                    <h4>Pack Organización completa </h4>
                                    Organizar, planificar y coordinar todos los servicios antes y durante la boda, de principio a fin.
                                    <br />
                                    <span class="image fit" style="margin-top: 5%;">
                                        <a href="organizacion.php"><img src="<?php echo $image1; ?>" alt="" /></a>
                                    </span>
                                    <span class="image fit">
                                        <a href="decoracio.php"><img src="<?php echo $image2; ?>" alt="" /></a>
                                    </span>
                                    <h4>Servicio de decoración </h4>
                                    Diseño de la decoración de la boda y montaje de la misma.
                                </div>
                                <div class="6u">
                                    <h4>Supervisión / Coordinación </h4>
                                    El día de la boda coordinamos todos los servicios y detalles que habéis elegido.
                                    <br />
                                    <span class="image fit" style="margin-top: 5%;">
                                        <a href="supervisio.php"><img src="<?php echo $image3; ?>" alt="" /></a>
                                    </span>
                                    <span class="image fit">
                                        <a href="brainstorming.php"><img src="<?php echo $image4; ?>" alt="" /></a>
                                    </span>
                                    <h4>Brainstorming </h4>
                                    Asesoramiento del trabajo de organización que habréis preparado vosotros mismo. Consejos, trucos… 
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