<!DOCTYPE HTML>
<html>
    <!-- START INCLUDE HEAD -->
    <?php include 'html/head/head.html';?>
    <!-- END INCLUDE HEADER -->
    <body class="landing">
	<!-- Page Wrapper -->
        <div id="page-wrapper">
            <!-- Header -->
            <?php include 'html/header/headerFixed.html';?>
            <!-- responsive header -->
            <?php include 'html/header/headerResponsive.html';?>
            <!-- end header -->
            <article id="main">
                <section class="wrapper style5">
                    <div class="inner">
                        <section>					
                            <div class="box alt">
                                <div class="row uniform 50%">
                                    <div class="6u"><span class="image fit"><img src="images/contact_page.jpg" alt="" /></span></div>
                                    <div class="6u"><span class="image fit"><img src="images/contact_page2.jpg" alt="" /></span></div>
                                </div>
                            </div>
                        </section>
                        <section style="font-size: 14px;">
                            <header>
                                <br />
				<h5>Contacta con nosotros</h5>
                            </header>
                            <p>Sea donde sea vuestro evento no dudéis en poneros en contacto conmigo. Trabajo en toda España, e incluso en algunos puntos del extranjero, y quiero ayudaros a realizar vuestro evento perfecto aunque mi oficina esté en la zona de Girona.</p>
                            <p>Si vives fuera de España podemos ponernos en contacto a través de Skype o whats app.</p>
                            <img src="images/email.jpg" style="width: 50px;" /><p>events@pcstand.com</p>
                            <img src="images/contacto.jpg" style="width: 50px;" /><p>698652930</p>
                        </section>
                        <section>
                            <h4>Contacto</h4>
                            <form method="post" action="sendByEmail.php">
                                <div class="row uniform">
                                    <div class="6u 12u$(xsmall)">
                                            <input type="text" name="nombre" id="demo-nombre" value="" placeholder="Nombre" />
                                    </div>
                                    <div class="6u 12u$(xsmall)">
                                            <input type="text" name="apellidos" id="demo-apellidos" value="" placeholder="Apellidos" />
                                    </div>
                                    <div class="6u 12u$(xsmall)">
                                            <input type="email" name="email" id="demo-email" value="" placeholder="E-mail" />
                                    </div>
                                    <div class="6u 12u$(xsmall)">
                                            <input type="text" name="tlf" id="demo-tlf" value="" placeholder="Teléfono" />
                                    </div>
                                    <div class="6u 12u$(xsmall)">
                                            <input type="text" name="ciudad" id="demo-ciudad" value="" placeholder="Ciudad" />
                                    </div>
                                    <div class="6u 12u$(xsmall)">
                                            <input type="text" name="fecha" id="demo-fecha" value="" placeholder="Fecha" />
                                    </div>
                                    <div class="4u 12u$(small)">
                                            <input type="radio" id="demo-boda" name="demo-boda" checked>
                                            <label for="demo-boda">Boda</label>
                                    </div>
                                    <div class="4u 12u$(small)">
                                            <input type="radio" id="demo-fiesta" name="demo-fiesta">
                                            <label for="demo-fiesta">Fiesta privada</label>
                                    </div>
                                    <div class="4u$ 12u$(small)">
                                            <input type="radio" id="demo-evento" name="demo-evento">
                                            <label for="demo-evento">Evento corporativo</label>
                                    </div>
                                    <div class="12u$">
                                            <textarea name="demo-message" id="demo-message" placeholder="Que necesitas de Tand'm" rows="6" maxlength="1024"></textarea>
                                    </div>
                                    <div class="12u$">
                                            <ul class="actions">
                                                    <li><input type="submit" value="Enviar" class="special" /></li>
                                                    <li><input type="reset" value="Limpiar" /></li>
                                            </ul>
                                    </div>
                                    </div>
                            </form>
                        </section>
                        <section class="padding-bottom" style="font-size: 14px;">
                            <h4>Colaboradores: </h4>
                            <p>Si sois una empresa relacionada con el sector de la organización de eventos y queréis que colaboremos o aparecer en la web escribid a events@pcstandm.com</p>
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