<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html>
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Puerta Abierta</title>
    <meta name="description"
        content="Multipurpose, premium, bootstrap based bussiness, corporate, portfolio, blog, onepage, creative, magazine, personal, landing, coming soon html5 css3 template">

    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,900,300italic,400italic,700italic'
        rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,500,600,700,800,900' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600italic,700italic,600,800,300,700,800italic'
        rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css ">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/revslider/revslider-index6.css">
    <link rel="stylesheet" id="color-scheme" href="css/colors/green.css">
    <link rel="stylesheet" href="css/formularios.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <!-- Favicon and Apple Icons -->
    <link rel="icon" type="image/png" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/icons/favicon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">

    <!-- Modernizr -->
    <script src="js/modernizr.js"></script>

    <!--- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Queryloader -->
    <script src="js/queryloader2.min.js"></script>

</head>

<body class="empieza_aqui">
    <div class="boss-loader-overlay"></div><!-- End .boss-loader-overlay -->
    <div id="wrapper">
    <header id="header" role="banner" class="sticky-menu">
             <?php include 'menu.php' ?>
    </header><!-- End #header -->

    <div class="row" margin="0">
        <div id="content" role="main" class="contenedor">
            <div class="efecto_fondo">
                <img src="images/homesliders/index6/slide1.png" width="99%" class="img_empieza">
            </div>
        </div>
    </div>
    </div>


    <!--NO TOCAR-->
    <div class="row">
        <div class="col-md-12">
            <div id="home" class="container" style="margin-top: -20em; text-align: center">
                <!-- Botón en HTML (lanza el modal en Bootstrap) -->
                <a href="#victorModal" role="button" class="btn btn-primary btn_empieza" data-toggle="modal">Empieza
                    Aquí</a>

                <!--formulario-->
                <!-- Modal / Ventana / Overlay en HTML -->
                <div id="victorModal" class="modal fade">
                    <div class="modal-dialog Animation top_modal_empieza">
                        <div class="modal-content" style="border:none">
                        <form action="registro.php" method="POST">
                    <fieldset class="uno Animation fieldset_caracteristicas">
                    <h2 class="fs-title">Información personal</h2>
                         <div class="opciones">
                              <h2 class="fs-title">Nombre</h2>
                              <input type="text" name="nombre" id="nombre" class="validado T_inputs" required>
                        </div>
                        <div class="opciones">
                        <h2 class="fs-title">Email</h2>
                                        <input type="texto" id="apellido" name="apellido" id="email"
                                            class="validado T_inputs" required>
                        </div>
                        <div class="opciones">
                        <h2 class="fs-title">Edad</h2>
                                        <input type="texto" id="web" name="web" id="web" class="validado T_inputs"
                                            required>
                        </div>
                        <div class="opciones">
                            <a href="javascript:window.history.back();"><input type="button" value="Atrás" class="w_btn_empezar" style="width: 20%"></a>            
                            <button class="w_btn_empezar" style="width: 20%">Siguiente</button>
                        </div>                
                        
            </fieldset>
        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--/end formulario/-->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Error</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="pamodal"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="width:30%">Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Finish Modal -->

    <!--prefooter-->
    <div class="col-md-12 text-center" style="padding-right:0; padding-left:0">
        <div class="callout custom no-border top_callout3">
            <div class="container">
                <div>
                    <div>
                        <h2 class="callout-title">Nuestra misión es brindar opciones a nuestros clientes con el fin de
                            que <br> alcancen la libertad financiera</h2>

                    </div><!-- End .callout-left -->
                </div><!-- End .callout-wrapper -->
            </div><!-- End .container -->
            <div class="mb10"></div><!-- space -->
        </div>
    </div>

    </div><!-- End #content -->

    <footer id="footer" class="footer-custom top_footer3" role="contentinfo">
        <div id="footer-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-push-4 col-sm-6 col-sm-push-3 col-xs-10 col-xs-push-1">
                        <div class="widget">
                            <div class="corporate-widget text-center">
                                <span class="footer-logo">
                                    <img src="images/icons/favicon.png" width="50%">
                                </span><!-- End .footer-logo -->
                                <br>
                                <address>Bogotá, Colombia <br>
                                    (+57) 300 265 4743</a><br>
                                    <a href="mailto:Contacto@puertabierta.co"
                                        style="font-weight:400">Contacto@puertabierta.co</a><br>
                                    <abbr title="www.puertabierta.co">www.puertabierta.co</abbr> &copy;
                                </address>
                                <span class="social-icons">Encuéntranos en:</span>
                                <div class="social-icons no-margin text-center">
                                    <a href="#" class="social-icon icon-facebook" title="Facebook">
                                        <i class="fa fa-facebook"
                                            style="font-size: 20px;line-height: 39px;letter-spacing: 0.091em;font-weight: 500;"></i>
                                    </a>
                                    <a href="https://www.instagram.com/puertabierta_asesores/"
                                        class="social-icon icon-instagram" title="Instagram">
                                        <i class="fa fa-instagram"
                                            style="font-size: 20px;line-height: 39px;letter-spacing: 0.091em;font-weight: 500;"></i>
                                    </a>
                                </div><!-- End .social-icons -->

                            </div><!-- End corporate-widget -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-md-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End #footer-inner -->
        <div id="footer-bottom" class="D_none_footer header_footer">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-6 col-md-6" style="padding-top: 10px;">
                        <img src="images/homesliders/index-new/img.png"
                            class="redes_sociales3 hidden-xs hidden-sm margin_imagen" width="20%" alt="">
                        <a href="#" style="margin-left: 153px;">Términos y condiciones</a></p>
                    </div><!-- End .col-md-6 -->
                    <div class="col-sm-6 col-md-6" style="padding-top: 18px;">
                        <a href="#" style="margin-right: 390px;">Política de Privacidad</a></p>
                        <img src="images/homesliders/index-new/png.png" class=" hidden-xs hidden-sm"
                            width="25%" style="margin-top: -86px; margin-left: 199px;" alt="">

                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End #footer-bottom -->
    </footer><!-- End #footer -->

    </div><!-- End #wrapper -->
    <a href="#top" id="scroll-top" title="Back to Top"><i class="fa fa-angle-up"></i></a>
    <!-- END -->

    <!-- Smoothscroll -->
    <script src="js/smoothscroll.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.hoverIntent.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/waypoints-sticky.min.js"></script>
    <script src="js/jquery.debouncedresize.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jflickrfeed.min.js"></script>
    <script src="js/twitter/jquery.tweet.min.js"></script>
    <script src="js/skrollr.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.themepunch.tools.min.js"></script>
    <script src="js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/main.js"></script>
    <script src="js/formularios.js"></script>
    <script src="js/empezar.js"></script>
    <script src="js/util.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.js"></script>
    <script src="js/form.js"></script>
    <script src="js/ajax.js"></script>

</body>

</html>