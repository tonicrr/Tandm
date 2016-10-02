<!DOCTYPE HTML>
<html>
    <!-- START INCLUDE HEAD -->
    <?php include 'html/head/head.html';?>
    <!-- INCLUDE IMAGE CACHE -->
    <?php 
        require 'php/imageCache/ImageCache.php';
        $image          = new ImageCache();
        $image->cached_image_directory = dirname(__FILE__) . '/images/cached';
        $image1         = $image->cache('images/org_page3.jpg');
        $image2         = $image->cache('images/org_page2.jpg');
        $image3         = $image->cache('images/org_page1.jpg');
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
                                <span><b>ORGANIZACIÓN COMPLETA</b></span><br /><br />
                                Quiero organizaros el evento perfecto al detalle. En el que ambos os sintáis representados y todo sea como siempre habíais soñado. Contando siempre con el apoyo los mejores profesionales del sector para que todo salga según lo planeado.
                                Este servicio es el pack más completo porqué se adapta a vosotros y a vuestras necesidades. Os garantiza confianza y tranquilidad. 
                                Vais a contar con mi apoyo en todo momento y así podré ayudaros a transmitir lo que queráis para ese día tan especial. 
                                Olvidaos de los nervios y el estrés, solo divertíos y disfrutad. Sois los únicos protagonistas de este día. 
                                Voy a supervisar todos los preparativos, desde asesoraros con las invitaciones hasta el más mínimo detalle en la decoración. También voy a estar allí el día de la boda para prepararlo todo y así vosotros no tendréis que preocuparos de nada. 
                                Estaré a vuestro lado desde el minuto uno y durante todo el proceso.
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