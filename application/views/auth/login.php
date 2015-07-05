<!DOCTYPE HTML>
<html lang="es">
  <head>
    <title>Letras jur&iacute;dicas</title>
    <meta http-equiv="Content-Type" content="text/html; charset = utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=base_url('')."assets/css/bootstrap.css"?>">
  </head>
  <body class="page">
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <!--Configuracion para dispositivos moviles--> 
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Desplegar Men&uacute;</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url('home')?>">
          <img height="50px;" width="200px;" src="<?=base_url('')."/assets/logos/logoletrassmall.png"?>">
        </a>
      </div>
      <!--Agrupacion de elementos para ocultarlos al minimizar la barra-->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="<?php echo site_url('home')?>" title="Inicio">Inicio</a>
          </li>   
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Publicaciones">Publicaciones<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <a title="Revistas" href="<?php echo site_url('revistas')?>">Revistas</a>
              </li>
              <li>
                <a href="<?php echo site_url('libros')?>"  title="Libros">Libros</a>
              </li>
              <li>
                <a href="http://revistas.uv.mx/index.php/letrasjuridicas/" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" title="Cat&aacute;logos">Cat&aacute;logos UV</a>
              </li>         
            </ul>
          </li>
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Reglamentaci&oacute;n">Reglamentaci&oacute;n<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url('lineamientos')?>"  title="Lineamiento">Lineamientos</a></li>
              <li><a href="<?php echo site_url('reglamentacion')?>"  title="Reglamento">Reglamentaci&oacute;n</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Contacto">Contacto<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url('correos')?>" title="Correo">Correos</a></li>
              <li><a href="<?php echo site_url('telefonos')?>"  title="Tel&eacute;fono">Tel&eacute;fonos</a></li>
              <li><a href="http://www.uv.mx/cedegs/" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" title="CEDEGS">CEDEGS</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-left">
          <li>
            <a href="<?php echo site_url('/auth/login')?>" > Ingresar</a>
          </li>
        </ul>
        <!--Barra de busqueda-->
        <form class="navbar-form navbar-right" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Buscar">
          </div>
          <button type="submit" class="btn btn-default">Enviar</button>
        </form>
        
      </div>
    </nav>
    <h1><?php echo lang('login_heading');?></h1>
    <p><?php echo lang('login_subheading');?></p>

    <div id="infoMessage"><?php echo $message;?></div>

  <?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
    <footer class="panel-footer">
      <p>Centro de Estudios sobre Derecho, Globalizaci&oacute;n y Seguridad, ISSN 1665-1529 Galeana esquina 7 de Noviembre C.P. 91000 Xalapa Veracruz, M&eacute;xico Tel. (228) 8 contacto@letrasjuridicas.com  y  letrasjuridicas@hotmail.com </p>
    </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?=base_url('')."assets/js/bootstrap.min.js"?>"></script>
  </body>
</html>