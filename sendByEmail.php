<?php
if(isset($_POST['email'])) {
    // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
    $email_to = "events@pcstand.com";
    $email_subject = "Contacte desde la web";

    // Aquí se deberían validar los datos ingresados por el usuario
    if(!isset($_POST['nombre']) ||
    !isset($_POST['apellidos']) ||
    !isset($_POST['email']) ||
    !isset($_POST['ciudad']) ||
    !isset($_POST['fecha']) ||
    !isset($_POST['demo-message']) ||
    !isset($_POST['tlf'])) {
    $message =  "Hi ha hagut algun error i el formulari no s'ha enviat correctament. Torna errere i verifiqui l'informació del formulari";
    }
    else {
        $email_from     = $_POST['email'];
        $email_message  = "Detalls del formulari de contacte:\n\n";
        $email_message .= "Nom: " . $_POST['nombre'] . "\n";
        $email_message .= "Cognoms: " . $_POST['apellidos'] . "\n";
        $email_message .= "E-mail: " . $_POST['email'] . "\n";
        $email_message .= "Ciutat: " . $_POST['ciudad'] . "\n";
        $email_message .= "Data: " . $_POST['fecha'] . "\n";
        $email_message .= "Telefon: " . $_POST['tlf'] . "\n";
        $email_message .= "Missatge: " . $_POST['demo-message'] . "\n\n";

        // Ahora se envía el e-mail usando la función mail() de PHP
        $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        @mail($email_to, $email_subject, $email_message, $headers);

        $message =  "En breu contactarem amb vosté";
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
	<title>Tand'm</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
                <!-- MENU RESPONSIVE -->
        <link type="text/css" rel="stylesheet" href="assets/css/demo.css" />
        <link type="text/css" rel="stylesheet" href="assets/css/jquery.mmenu.all.css" />
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    </head>
    <body class="landing">
	<!-- Page Wrapper -->
        <div id="page-wrapper" class="sendByEmail">
            <!-- Header -->
            <header id="header_fixed" class="alt" style="background: white;">
                <div style="text-align: center; padding-top: 1rem;" >
                    <a href="sobremi.php"><h3 id="sobremimenu" style="display: inline-block; padding-right: 3rem; position: absolute; top: 2rem; right: 63rem; font-weight: normal;">Sobre mi</h3></a>
                    <a href="servicios.php"><h3 id="serviciosmenu" style="display: inline-block; padding-right: 3rem; position: absolute; top: 2rem; right: 50rem; font-weight: normal;">Servicios</h3></a>
                    <a href="index.php"><img src="images/logo.png" alt="" style="height: 6rem; display: inline-block;" /></a>
                    <a href="blog.php"><h3 id="blogmenu" style="display: inline-block; padding-left: 3rem; position: absolute; top: 2rem; right: 27rem; font-weight: normal;">Blog</h3></a>
                    <a href="contact.php"><h3 id="contactomenu" style="display: inline-block; padding-left: 3rem; position: absolute; top: 2rem; right: 10rem; font-weight: normal;">Contacto</h3></a>
                </div>
            </header>
            <div class="header" style="display: none;">
                <ul><li style="font-size: 0; height: 30px;"><a class="header" href="#" style="position: initial;"></a></li></ul>
            </div>
            <nav id="menu" class="mm-menu mm-theme-black mm-offcanvas mm-hasnavbar-top-4 mm-current mm-opened" style="display: none; z-index: 999999999999;">
                <div class="mm-navbar mm-navbar-top mm-navbar-top-1 mm-navbar-size-4">
                        <img src="images/logo.jpg" style="width: 28%; margin: 0 auto; border: 1px solid rgba(255, 255, 255, 0.6); border-radius: 60px; padding: 10px; margin-top: 4%;">
                </div>
                <div class="mm-panel mm-opened mm-current" id="mm-0">
                    <ul class="mm-listview">
                        <li><a href="index.php"><i class="fa fa-home fa-1x"></i>   Home</a></li>
                        <li><a href="sobremi.php"><i class="fa fa-users fa-1x"></i>   Sobre mi</a></li>
                        <li><a href="servicios.php"><i class="fa fa-heart fa-1x"></i>   Servicios</a></li>
                        <li><a href="blog.php"><i class="fa fa-picture-o fa-1x"></i>   Blog</a></li>
                        <li><a href="contact.php"><i class="fa fa-envelope fa-1x"></i>   Contacto</a></li>
                    </ul>
                </div>
            </nav>
            <!-- header -->
            <article id="main">
		<section class="wrapper style5" style="min-height: 56vh;">
                    <div class="inner">
                        <section>
                            <p style="text-align: center; padding-top: 5%;">
                            <span><b>SU MENSAJE SE HA ENVIADO CORRECTAMENTE, NOS PONDREMOS EN CONTACTO CON USTED PRONTO.</b></span>
                            </p>
                        </section>
                    </div>
                </section>
            </article>
            <!-- Footer -->
            <footer id="footer">
                <div id="copyright" style="margin-top: -4%;">
                    <div class="inner-group" style="float: left; width: 50%;">
                        <ul class="copyright" style="margin-bottom: 0px;">
                            <li style="text-transform: lowercase;">events@pcstandm.com</li>
                        </ul>
                        <ul class="copyright" style="margin-bottom: 0px;">
                            <li style="text-transform: none;">Paola: 698652930</li>
                        </ul>
                    </div>
                    <div class="inner-group" style="float: left; width: 50%;">
                        <ul class="icons" style="margin-bottom: 0px;">
                            <!-- <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li> -->
                            <li><a href="https://www.facebook.com/Pcstandm" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="https://www.instagram.com/pcstandm" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                            <!-- <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>-->
                            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
                        </ul>
                        <ul class="copyright" style="margin-bottom: 0px;">
                            <li style="text-transform: lowercase;">Tand'm &copy; Copyright</li>
                        </ul>
                    </div>        
                </div>
            </footer>
	</div>
	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>
        <script type="text/javascript">
            $(function() {
                    jQuery('.header').click(function() {
                        jQuery('#menu').show();
                    });
            });
        </script>
    </body>
</html>