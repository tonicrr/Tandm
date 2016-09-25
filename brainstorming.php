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
            <article id="main">
		        <section class="wrapper style5 padding-bottom">
                    <div class="inner">
                        <section>
                            <p style="font-size: 13px;">
                                <span class="image right" style="max-width: 25%;"><img src="images/seating.jpg" alt="" /></span>
                                <span><b>BRAINSTORMING</b></span><br /><br />
                                Con este servicio quiero asesoraros sobre las decisiones que habéis tomado. Comprobar que no os olvidáis de nada y ayudaros, si es necesario, a completar pequeños huecos y resolver dudas que tengáis. 
                                El objetivo es tomar un refresco con vosotros y que me expliquéis vuestras ideas y todo lo que habéis organizado. 
                                En unas pocas horas os resolveré dudas y ayudaré. Y si os hace falta os daré el contacto de algún proveedor que podáis necesitar para que estéis más tranquilos el día de la boda.
                            </p>					
                            <div class="box alt">
                                <div class="row uniform 50%">
                                    <div class="6u"><span class="image fit"><img src="images/brains.jpg" alt="" /></span></div>
                                    <div class="6u"><span class="image fit"><img src="images/photocall.jpg" alt="" /></span></div>
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