<!DOCTYPE HTML>
<html>
    <!-- START INCLUDE HEAD -->
    <?php include 'html/head/head.html';?>
    <!-- END INCLUDE HEADER -->
    <!-- INCLUDE IMAGE CACHE -->
    <?php 
        require 'php/imageCache/ImageCache.php';
        $image          = new ImageCache();
        $image->cached_image_directory = dirname(__FILE__) . '/images/cached';
        $image1         = $image->cache('images/flechablanca.png');
        $image2         = $image->cache('images/home1.jpg');
        $image3         = $image->cache('images/home2.jpg');
        $image4         = $image->cache('images/home4.jpg');
        $image5         = $image->cache('images/home3.jpg');
    ?>
    <body class="landing">
    <!-- Page Wrapper -->
        <div id="page-wrapper">
            <!-- Header -->
            <?php include 'html/header/header.html';?>
            <!-- Banner --> 
            <section id="banner">
                <div class="inner"></div>
                <div>
                    <img src="<?php echo $image1; ?>" alt="" style="width: 5%; padding-top: 35%;" />
                </div>
            </section>
            <!-- responsive header -->
            <?php include 'html/header/headerResponsive.html';?>
            <!-- Two -->
            <section id="one" class="wrapper alt style2">
                <section class="spotlight" style="margin: 0 auto; max-width: 80%;">
                    <div class="image">
                        <a href="servicios.php">
                            <img src="<?php echo $image2; ?>" alt="" />
                        </a>
                    </div>
                    <div class="content">
                        <h4>Servicios</h4>
                        <p>Encontrad el tipo de servicio que más se adapte a lo que buscáis, a vuestra idea.</p>
                        <ul style="color: black; padding-left: 3rem;">
                            <li><p style="text-align: left;">Bodas / Pedidas de mano</p></li>
                            <li><p style="text-align: left;">Bautizos</p></li>
                            <li><p style="text-align: left;">Comuniones</p></li>
                            <li><p style="text-align: left;">Cumpleaños / Aniversarios</p></li>
                            <li><p style="text-align: left;">Fiestas privadas / Reuniones de empresa</p></li>
                        </ul>
                    </div>
                </section>
                <section class="spotlight" style="margin: 0 auto; max-width: 80%;">
                    <div class="image">
                        <a href="blog.php">
                            <img src="<?php echo $image3; ?>" alt="" />
                        </a>
                    </div>
                    <div class="content">
                        <h4>Blog</h4>
                        <p>Aquí encontraréis ideas de inspiración, descripción de los proveedores con los que trabajo y que me encantan o simplemente cosas que me gustan como un diseñador, una idea original para las bodas, unos colores…</p>
                    </div>
                </section>
                <section class="spotlight" style="margin: 0 auto; max-width: 80%;">
                    <div class="image">
                        <a href="sobremi.php">
                            <img src="<?php echo $image4; ?>" alt="" />
                        </a>
                    </div>
                    <div class="content">
                        <h4>Sobre mí</h4>
                        <p>Creativa, organizada, perfeccionista… Me gustan los pequeños detalles, las flores, organizar comidas y reuniones con mis amigos. He creado Tand’m para ayudaros a realizar vuestro evento perfecto.</p>
                    </div>
                </section>
                <section class="spotlight" style="margin: 0 auto; max-width: 80%;">
                    <div class="image">
                        <a href="contact.php">
                            <img src="<?php echo $image5; ?>" alt="" />
                        </a>
                    </div>
                    <div class="content">
                        <h4>Contacto</h4>
                        <p>Desde la oficina Tand’m creamos vuestros proyectos y damos forma a vuestras ideas.</p>
                    </div>
                </section>
            </section>
            <!-- CTA -->
            <section id="cta" class="wrapper style4" style="padding: 3rem 0 3rem 0;">              
                <div class="inner">
                    <header>
                        <h3>Tu día perfecto</h3>
                        <p>Gracias a todos estos detalles os ayudaremos a organizar un evento perfecto para cualquier ocasión, cuidando de hasta el más mínimo detalle.</p>
                    </header>
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