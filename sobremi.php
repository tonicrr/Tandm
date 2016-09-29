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
                            <p style="font-size: 14px;">
                                <span class="image right">
                                    <img src="images/paola3.jpg" alt="" />
                                </span>
                                Mi nombre es Paola, soy organizadora de bodas y eventos y soy la creadora de Tand’m. 
                                Me considero una persona creativa, organizada y perfeccionista. <br/><br/>
                                Me apasiona mi trabajo y decidí crear Tand’m después de realizar los estudios de Hostelería. Allí me dí cuenta de que lo que más me gusta es organizar y gestionar eventos. Así que realicé un Master en Comunicación, Relaciones públicas y organización de eventos. 
                                Soy una romántica incorregible, rebelde, luchadora, impaciente, sensible y apasionada. Me encanta rodearme de mis amigos y familia. Disfrutar de los pequeños momentos, la buena comida y un buen vino completa mi día a día. 
                                <br/><br/>Amante de la decoración, la música, los libros, las flores y restauradora de cosas viejas para convertirlas en cosas muy bonitas. 
                                <br/><br/>Gracias a todos estos detalles os ayudaré a organizar un evento perfecto para cualquier ocasión, cuidando de hasta el más mínimo detalle.</p>
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