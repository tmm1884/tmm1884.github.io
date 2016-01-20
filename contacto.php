
<?php
$msg=0;
@$msg= $_REQUEST['msg'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SOS Informática</title>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Pacífico' rel='stylesheet' type='text/css'>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- child of the body tag -->
        <span id="top-link-block" class="hidden">
            <a href="#top" class="well well-sm" onclick="$('html,body').animate({scrollTop: 0}, 'slow');
                    return false;">
                <i class="glyphicon glyphicon-chevron-up"></i> Para Cima
            </a>
        </span><!-- /top-link-block -->
        <section>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo-nav" href="index.html"><img src="img/logo2.png"></a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html">Início<span>Pagina Principal</span></a></li>
                            <li><a href="sobre.html">SOBRE NÓS<span>Quem Somos</span></a></li>
                            <li><a href="servicos.html">SERVIÇOS<span>O Que Fazemos</span></a></li>
                            <li><a href="emprego.html">EMPREGO<span>Envie O Seu CV</span></a></li>
                            <li  class="active"><a href="contacto.php">CONTACTE-NOS<span>Fique Ligado</span></a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        </section>

        <section class="section-title">
            <div>
                <h1>Contacte-nos<small> Fique Ligado</small></h1>
            </div>
        </section>
        
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.1150794969476!2d13.368449915359422!3d-8.775242592067816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51fab27e7b8231%3A0xc03ccc49ab8916ee!2sUnnamed+Rd%2C+Cacuaco!5e0!3m2!1spt-PT!2sao!4v1453181049880" 
                                width="100%" height="400px" frameborder="0" scrolling="0" marginheight="0" marginwidth="0" style="border:0" allowfullscreen></iframe>  
                        
                        <h3>Contacte-nos Hoje</h3>
                                <?php if($msg=="enviado"): ?>
                                <h1>Mensagem enviada, agradecemos seu contacto!</h1>
                                <?php else: ?>
                        <form action="processaForm.php" method="post">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input id="nome" name="nome" type="text" class="form-control" required/> 
                            </div>
                             <div class="form-group">
                                <label for="telefone">Telefone:</label>
                                <input id="telefone" name="telefone" type="tel" class="form-control" required/> 
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input id="email" name="email" type="email" class="form-control" required/> 
                            </div>
                            <div class="form-group">
                                <label for="assunto">Mensagem:</label>
                                <textarea name="assunto" id="assunto" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default"> Enviar</button>
                        </form>
                               <?php endif; ?>
                    </div>
                    <div class="col-md-4">
                        <h3>Contactos</h3>
                        <p>Cacuaco Junto ao BFA</p>
                        <p><i class="fa fa-phone"></i> 
                            <abbr title="Telefone"></abbr>:00244 921 314 203
                        </p>
                        <p><i class="fa fa-clock-o"></i> 
                            <abbr title="Horario"></abbr>:Segunda - sexta das 8:00 às 17:00 hrs
                        </p>
                        <p><i class="fa fa-clock-o"></i> 
                            <abbr title="Horario"></abbr>:Sabado das 08:00 às 12:00 hrs
                        </p>
                        <ul class="list-unstyled list-inline list-social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a>
                            </li>
                            
                        </ul>
                       
                        
                    </div>
                </div>
            </div>
        </section>

            <!-- FOOTER -->
        <div class="footer">
            <div class="container">

                <div class="row">

                    <div class="col-lg-4 col-md-4">
                        <img src="img/logo3.png" alt="">
                        <!-- <p><em>Seus Problemas em informática tornam-se nosso Problema!</em></p> -->
                        <p><em><strong>'Trabalhando Perto de si com qualidade e excelencia'</strong></em></p>              
                    </div>    


                    <div class="col-lg-4 col-md-4">
                        <h1>Esteja em Contacto:</h1>
                        <p><i class="fa fa-phone"></i> 00244 921 314 203</p>
                        <p><i class="fa fa-envelope"></i><a href="mailto:info@appname"> Apoio ao cliente </a></p>   
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <h1>SOBRE NÓS:</h1>
                        <p>Preços Baixos Com Qualidade</p>
                        <p>SOS Informática &COPY; 2016</p>   
                    </div>

                </div>   

            </div>        
        </div>
        <!-- END FOOTER -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script>
                $(document).ready(function () {
                    $('.carousel').carousel({
                        interval: 4000
                    });
                });
        </script>
        <script src="js/wow.js"></script>
        <script>
                new WOW().init();
        </script>
        <script>
// Only enable if the document has a long scroll bar
// Note the window height + offset
            if (($(window).height() + 100) < $(document).height()) {
                $('#top-link-block').removeClass('hidden').affix({
                    // how far to scroll down before link "slides" into view
                    offset: {top: 100}
                });
            }
        </script>
    </body>
</html>
