<!DOCTYPE HTML>
<html>
    <!-- START INCLUDE HEAD -->
    <?php include 'html/head/head.html';?>
    <!-- INCLUDE IMAGE CACHE -->
    <?php 
        require 'php/imageCache/ImageCache.php';
        $image          = new ImageCache();
        $image->cached_image_directory = dirname(__FILE__) . '/images/cached';
        $image1         = $image->cache('images/dinar_familiars.jpg');
        $image2         = $image->cache('images/exposicio_galeria.jpg');
    ?>
    <body class="landing">
	<!-- Page Wrapper -->
        <div id="page-wrapper">
            <!-- Header -->
            <!-- Header -->
            <?php include 'html/header/headerFixed.html';?>
            <!-- responsive header -->
            <?php include 'html/header/headerResponsive.html';?>
            <!-- header -->
            <article id="main">
		        <section class="wrapper style5 padding-bottom">
                    <div class="inner">
                        <section class="wrapper style5">
                            <div class="inner">
                                <section style="padding-bottom: 1rem; font-size: 13px;">
                                    <p>
                                        <span class="image right">
                                            <img src="<?php echo $image1; ?>" alt="" />
                                        </span>
                                        <b>EVENTOS</b><br /><br />
                                        En Tand’m organizamos, decoramos y supervisamos cualquier tipo de evento.
                                        Encontrar el espacio, el catering, el restaurante, decorar el espacio, buscar detalles para regalar…
                                    </p>
                                </section>
                                <section style="padding-bottom: 1rem; font-size: 13px;">
                                    <p>- Organizar y decorar un espacio para los niños, actividades infantiles, animación, juegos…</p>
                                    <p>• Baby shower</p>
                                    <p>• Bautizos</p>
                                    <p>• Comuniones</p>
                                </section>
                                <section style="padding-bottom: 1rem; font-size: 13px;">
                                    <p>- Pedidas de mano: Preparar con vosotros este momento especial, ayudaros a buscar el sitio, los detalles, decorarlo con flores, velas… hacerlo a vuestra imagen para que no estéis aún más nerviosos. </p>
                                </section>
                                <section style="padding-bottom: 1rem; font-size: 13px;">
                                    <p>- Despedidas de soltero: Preparar una fiesta temática para chic@s, con un estilo tranquilo como una escapada rural/spa o paintball, o con un toque alocado como tour y limusina y noche de fiesta. Todo a medida y según vuestros criterios. </p>
                                </section>
                                <section style="padding-bottom: 1rem; font-size: 13px;">
                                    <p>- Ayudaros a decorar vuestra casa para una ocasión especial, buscar un sitio para celebrarlo… En función del tipo de evento,	asesoraros en cuanto a proveedores, aportaros ideas y ayudaros a realizarlas. </p>
                                    <p>
                                        <span class="image right">
                                            <img src="<?php echo $image2; ?>" alt="" />
                                        </span>
                                        • Cumpleaños</br>
                                        • Aniversarios</br>
                                        • Fiestas privadas</br>
                                    </p>
                                </section>
                                <section style="padding-bottom: 1rem; font-size: 13px;">
                                    <p>
                                    - Reuniones de empresa: Organizar reuniones diferentes para fomentar el trabajo en equipo, consolidarlo… en espacios diferentes y singulares. Ayudaros a preparar cualquier acto dentro o fuera de la empresa con todos los detalles necesarios.
                                    </p>
                                </section>
                            </div>
                        </section>
                    </div>
                </section>
            </article>
            <!-- Footer -->
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