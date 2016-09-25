<!DOCTYPE HTML>
<html>
    <!-- START INCLUDE HEAD -->
    <?php include 'html/head/head.html';?>
    <body class="landing">
	<!-- Page Wrapper -->
        <div id="page-wrapper">
            <!-- Header -->
            <?php include 'html/header/headerFixed.html';?>
            <!-- responsive header -->
            <?php include 'html/header/headerResponsive.html';?>
            <!-- end header -->
            <section id="one" class="wrapper alt style2" style="padding-bottom: 3rem!important;">
                <section class="spotlight" style="margin: 0 auto; max-width: 80%;">
                    <div class="image">
                        <a href=""><img src="images/portada_article_1.jpg" alt="" /></a>
                    </div>
                    <div class="content">
                        <p style="font-style: italic; text-align: right;">24 Julio 2016</p>
                        <div style="float: right;"><p id="blog-1-views" style="text-align: right; font-size: 12px; font-style: italic; float: left;"></p><i class="fa fa-eye fa-1x" style="color: black; float: right; padding: 5px;"></i></div>
                        <h4 style="margin-top: 15px;">Visita Mireia Vidal Barcelona</h4>
                        <p>El día de la visita a Mireia Vidal Barcelona fue un día con muchas sorpresas. Salí de la ofi’ de camino a Barcelona para encontrar-me con una joven diseñadora de vestidos de novia y de fiesta que abrió su negocio hace apenas un año, y que ya está dando mucho de qué hablar gracias a su trabajo y esfuerzo. Pese al poco tiempo que lleva en el mercado, tiene oficinas en Nueva York, Méjico y Londres.</p>
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_native_toolbox" style="float: right; padding-top: 1rem;"></div>
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
            });
        </script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-525fedc129c21605"></script>
    </body>
</html>