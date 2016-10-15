<!DOCTYPE HTML>
<html>
    <!-- START INCLUDE HEAD -->
    <?php include 'html/head/head.html';?>
    <!-- INCLUDE IMAGE CACHE -->
    <?php 
        require 'php/imageCache/ImageCache.php';
        $image          = new ImageCache();
        $image->cached_image_directory = dirname(__FILE__) . '/images/cached';
        $image1         = $image->cache('images/portada_article_2.jpg');
        $image2         = $image->cache('images/DSC_0011.jpg');
    ?>
    <body class="landing">
	<!-- Page Wrapper -->
        <div id="page-wrapper">
            <!-- Header -->
            <?php include 'html/header/headerFixed.html';?>
            <!-- responsive header -->
            <?php include 'html/header/headerResponsive.html';?>
            <!-- end header -->
            <section id="one" class="wrapper alt style2" style="padding-bottom: 3rem!important;">
                <!-- blog 3 -->
                <section class="spotlight" style="margin: 0 auto; max-width: 80%;">
                    <div class="image">
                        <a href=""><img src="<?php echo $image2; ?>" alt="" /></a>
                    </div>
                    <div class="content">
                        <p style="font-style: italic; text-align: right;">9 Octubre 2016</p>
                        <div style="float: right;">
                            <p id="blog-3-views" style="text-align: right; font-size: 12px; font-style: italic; float: left;"></p>
                            <i class="fa fa-eye fa-1x" style="color: black; float: right; padding: 5px;"></i>
                        </div>
                        <h4 style="margin-top: 15px;">Mezclado, no agitado</h4>
                        <p>En este post os hablaré de los distintos tipos de eventos que puedo organizar. No todo va a ser bodas especiales, ni comuniones bonitas o eventos corporativos.</p>
                        <!-- facebook share -->
                        <div class="fb-share-button" data-href="http://www.pcstandm.com/blog/blog3.php" data-layout="button_count" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.pcstandm.com%2Fblog%2Fblog3.php&amp;src=sdkpreparse">Compartir</a></div>
                        <a id="link-blog1" href="blog/blog3.php"><p class="padding-top" style="color: #fbd294; text-align: center;">Leer mas...</p></a>
                    </div>
                </section>
                <!-- blog 2 -->
                <section class="spotlight" style="margin: 0 auto; max-width: 80%;">
                    <div class="image">
                        <a href=""><img src="<?php echo $image1; ?>" alt="" /></a>
                    </div>
                    <div class="content">
                        <p style="font-style: italic; text-align: right;">26 Septiembre 2016</p>
                        <div style="float: right;"><p id="blog-2-views" style="text-align: right; font-size: 12px; font-style: italic; float: left;"></p><i class="fa fa-eye fa-1x" style="color: black; float: right; padding: 5px;"></i></div>
                        <h4 style="margin-top: 15px;">Ser cuentialumna</h4>
                        <p>En noviembre del pasado año estaba de camino a Zaragoza (No a Tarragona Mama…) para el curso de Bodas de cuento. </br></br>¡Un fin de semana fuera de lo normal para aprender y disfrutar de una experiencia genial!</p>
                        <!-- facebook share -->
                        <div class="fb-share-button" data-href="http://www.pcstandm.com/blog/blog2.php" data-layout="button_count" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.pcstandm.com%2Fblog%2Fblog2.php&amp;src=sdkpreparse">Compartir</a></div>
                        <a id="link-blog1" href="blog/blog2.php"><p class="padding-top" style="color: #fbd294; text-align: center;">Leer mas...</p></a>
                    </div>
                </section>
                <!-- blog 1 -->
                <section class="spotlight" style="margin: 0 auto; max-width: 80%;">
                    <div class="image">
                        <a href=""><img src="images/portada_article_1.jpg" alt="" /></a>
                    </div>
                    <div class="content">
                        <p style="font-style: italic; text-align: right;">24 Julio 2016</p>
                        <div style="float: right;"><p id="blog-1-views" style="text-align: right; font-size: 12px; font-style: italic; float: left;"></p><i class="fa fa-eye fa-1x" style="color: black; float: right; padding: 5px;"></i></div>
                        <h4 style="margin-top: 15px;">Visita Mireia Vidal Barcelona</h4>
                        <p>El día de la visita a Mireia Vidal Barcelona fue un día con muchas sorpresas. Salí de la ofi’ de camino a Barcelona para encontrar-me con una joven diseñadora de vestidos de novia y de fiesta que abrió su negocio hace apenas un año, y que ya está dando mucho de qué hablar gracias a su trabajo y esfuerzo. Pese al poco tiempo que lleva en el mercado, tiene oficinas en Nueva York, Méjico y Londres.</p>
                        <!-- facebook share -->
                        <div class="fb-share-button" data-href="http://www.pcstandm.com/blog/blog1.php" data-layout="button_count" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.pcstandm.com%2Fblog%2Fblog1.php&amp;src=sdkpreparse">Compartir</a></div>
                        <a id="link-blog1" href="blog/blog1.php"><p class="padding-top" style="color: #fbd294; text-align: center;">Leer mas...</p></a>
                    </div>
                </section>
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
                jQuery.get('http://www.pcstandm.com/php/contador_blog1.txt', function(data) {
                //jQuery.get('http://localhost/tandm/page/php/contador_blog1.txt', function(data) {
                    var currentview = parseInt(data);
                    var views = currentview + 1;
                    jQuery('#blog-1-views').html(views);
                });
                jQuery.get('http://www.pcstandm.com/php/contador_blog2.txt', function(data) {
                    var currentview = parseInt(data);
                    var views = currentview + 1;
                    jQuery('#blog-2-views').html(views);
                });
                jQuery.get('http://www.pcstandm.com/php/contador_blog3.txt', function(data) {
                    var currentview = parseInt(data);
                    var views = currentview + 1;
                    jQuery('#blog-3-views').html(views);
                });
            });
        </script>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    </body>
</html>