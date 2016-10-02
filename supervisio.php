<!DOCTYPE HTML>
<html>
    <!-- START INCLUDE HEAD -->
    <?php include 'html/head/head.html';?>
    <!-- INCLUDE IMAGE CACHE -->
    <?php 
        require 'php/imageCache/ImageCache.php';
        $image          = new ImageCache();
        $image->cached_image_directory = dirname(__FILE__) . '/images/cached';
        $image1         = $image->cache('images/deco_page3.jpg');
        $image2         = $image->cache('images/deco_page_3.png');
        $image3         = $image->cache('images/deco_page_5.jpg');
    ?>
    <body class="landing">
	<!-- Page Wrapper -->
        <div id="page-wrapper">
            <!-- Header -->
            <?php include 'html/header/headerFixed.html';?>
            <!-- responsive header -->
            <?php include 'html/header/headerResponsive.html';?>
            <!-- end header -->
            <article id="main">
		        <section class="wrapper style5 padding-bottom">
                    <div class="inner">
                        <section>
                            <p style="font-size: 13px;">
                                <span class="image right" style="max-width: 25%;">
                                    <img src="<?php echo $image1; ?>" alt="" />
                                </span>
                                <span><b>SUPERVISIÓN / ORGANIZACIÓN</b></span><br /><br />
                                Para que no estéis preocupados controlando a los proveedores, supervisándolo todo y podáis disfrutar del día de la boda me encargaré de todo para vosotros, ya que vuestro papel en ese día tan especial es disfrutar de vuestro día y no estar preocupados y pendientes de que todo salga como habíais previsto. Además, al ser una profesional del sector, estoy acostumbrada a resolver rápidamente cualquier imprevisto que pudiese surgir. 
                                Me pondré en contacto con los proveedores que habéis seleccionado y voy  a realizar un “timing” para coordinarlo todo; la llegada de los invitados, la entrada del novio y la novia, controlar los proveedores, ayudar en lo que sea necesario y gestionar los imprevistos que puedan surgir. 
                                Para ello, unas semanas antes del gran día, nos reuniremos y me explicaréis vuestra idea, entonces me pondré en contacto con cada servicio que hayáis contratado. 
                                A partir de ese momento os ayudaré a coordinarlo todo, y el día de la boda no os tendréis que preocupar de nada… Solo de disfrutar y dejarse llevar.
                            </p>                    
                            <div class="box alt">
                                <div class="row uniform 50%">
                                    <div class="6u">
                                        <span class="image fit">
                                            <img src="<?php echo $image2; ?>" alt="" />
                                        </span>
                                    </div>
                                    <div class="6u">
                                        <span class="image fit">
                                            <img src="<?php echo $image3; ?>" alt="" />
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
            </article>
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