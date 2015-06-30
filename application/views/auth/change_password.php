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
          <img height="50px;" width="200px;" src="Logos/logoletrassmall.png">
        </a>
      </div>
      <!--Agrupacion de elementos para ocultarlos al minimizar la barra-->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="<?php echo site_url('home')?>" title="Inicio">Inicio</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Pol&iacute;ticas">Pol&iacute;ticas<b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="#" title="Misi&oacute;n">Sub men&uacute;</a>
              </li>
              <li>
                <a href="#" title="Visi&oacute;n">Sub men&uacute;</a>
              </li>         
            </ul>
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
                <a href="<?php echo site_url('entrevistas')?>"  title="Podcast">Entrevistas (Audio)</a>
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
              <li><a href="<?php echo site_url('reglamento')?>"  title="Reglamento">Reglamento</a></li>
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
        <!--Barra de busqueda-->
        <form class="navbar-form navbar-right" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Buscar">
          </div>
          <button type="submit" class="btn btn-default">Enviar</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="<?php echo site_url('/auth/login')?>" > Ingresar</a>
          </li>
        </ul>
      </div>
    </nav>
<h1><?php echo lang('change_password_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/change_password");?>

      <p>
            <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
            <?php echo form_input($old_password);?>
      </p>

      <p>
            <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
            <?php echo form_input($new_password);?>
      </p>

      <p>
            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
            <?php echo form_input($new_password_confirm);?>
      </p>

      <?php echo form_input($user_id);?>
      <p><?php echo form_submit('submit', lang('change_password_submit_btn'));?></p>

<?php echo form_close();?>
<footer class="panel-footer">
      <p>Centro de Estudios sobre Derecho, Globalizaci&oacute;n y Seguridad, ISSN 1665-1529 Galeana esquina 7 de Noviembre C.P. 91000 Xalapa Veracruz, M&eacute;xico Tel. (228) 8 contacto@letrasjuridicas.com  y  letrasjuridicas@hotmail.com </p>
    </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?=base_url('')."assets/js/bootstrap.min.js"?>"></script>
  </body>
</html>
