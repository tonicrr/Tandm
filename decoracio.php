<!DOCTYPE HTML>
<html>
    <!-- START INCLUDE HEAD -->
    <?php include 'html/head/head.html';?>
    <!-- INCLUDE IMAGE CACHE -->
    <?php 
        require 'php/imageCache/ImageCache.php';
        $image          = new ImageCache();
        $image->cached_image_directory = dirname(__FILE__) . '/images/cached';
        $image2         = $image->cache('images/photocall2.jpg');
        $image3         = $image->cache('images/palla_rustic.jpg');
    ?>
    <body class="landing">
	<!-- Page Wrapper -->
        <div id="page-wrapper">
            <!-- Header -->
            <?php include 'html/header/headerFixed.html';?>
            <!-- responsive header -->
            <?php include 'html/header/headerResponsive.html';?>
            <!-- header -->
            <article id="main">
		        <section class="wrapper style5 padding-bottom">
                    <div class="inner">
                        <section>
                            <p style="font-size: 13px;">
                                <span class="image right" style="max-width: 35%;">
                                    <img src="images/decoracion_1.jpg" alt="" />
                                </span>
                                <span><b>SERVICIO DE DECORACIÓN</b></span><br /><br />
                                Vamos a cuidar todos los pequeños detalles, sin olvidar ningún rincón especial; coordinaremos los colores, las luces, conseguiremos emocionar a los invitados…
                                Puede parecer complicado cuando no eres un profesional, son muchas cosas a tener en cuenta, pero para eso estamos aquí; para ayudaros con todo el tema de la decoración del espacio que habéis elegido y plasmar vuestra idea y hacerla realidad. 
                                Cualquier espacio puede ser transformado en un lugar único, adaptándose a vuestros deseos. Podemos personalizarlo al 100% y hacerlo tan especial como vosotros siempre habéis soñado. 
                                Flores, velas, luces y música. Son algunos de los detalles que marcarán la diferencia. 
                                Decorar el espacio dónde tendrá lugar la ceremonia, el espacio del banquete con sus mesas con flores, velas y jarrones. Preparando una mesa dulce dónde habrá la repostería, la papelería, el “photocall” y un rincón para firmas, espacios para los más pequeños, detalles en los baños… y un largo etcétera con todo aquello que vosotros deseéis.
                                Nos encargaremos personalmente de seleccionar y adquirir todos los detalles y materiales que queráis y sobretodo nos vamos a ocupar especialmente del montaje en el día de la boda, dejándolo todo perfecto para que no tengáis que preocuparos de nada.
                                </br></br>
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