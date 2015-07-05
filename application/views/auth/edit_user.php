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
          <li>
            <a href="<?php echo site_url('home')?>" title="Inicio">Inicio</a>
          </li>   
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Publicaciones">Publicaciones<b class="caret"></b></a>
            <ul class="dropdown-menu multi-level">
              <li class="dropdown-submenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="revistas">Revistas</a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="<?php echo site_url('revistas')?>">Ver revistas</a>
                  </li>
                  <li>
                    <a href="<?php echo site_url('crearrevista')?>">Crear revista</a>
                  </li>
                  <li>
                    <a href="<?php echo site_url('editarrevista')?>">Modificar revistas</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Libros">Libros</a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="<?php echo site_url('libros')?>">Ver libros</a>
                  </li>
                  <li>
                    <a href="<?php echo site_url('libros')?>">Crear libro</a>
                  </li>
                  <li>
                    <a href="<?php echo site_url('libros')?>">Modificar libros</a>
                  </li>
                </ul>
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
          <li>
            <a href="<?php echo site_url('auth/index')?>">Panel de Administracion</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-left">
          <li>
            <a href="<?php echo site_url('/auth/logout')?>" > Salir</a>
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
<h1><?php echo lang('edit_user_heading');?></h1>
<p><?php echo lang('edit_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(uri_string());?>

      <p>
            <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($first_name);?>
      </p>

      <p>
            <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($last_name);?>
      </p>

      <p>
            <?php echo lang('edit_user_company_label', 'company');?> <br />
            <?php echo form_input($company);?>
      </p>

      <p>
            <?php echo lang('edit_user_phone_label', 'phone');?> <br />
            <?php echo form_input($phone);?>
      </p>

      <p>
            <?php echo lang('edit_user_password_label', 'password');?> <br />
            <?php echo form_input($password);?>
      </p>

      <p>
            <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
            <?php echo form_input($password_confirm);?>
      </p>

      <?php if ($this->ion_auth->is_admin()): ?>

          <h3><?php echo lang('edit_user_groups_heading');?></h3>
          <?php foreach ($groups as $group):?>
              <label class="checkbox">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['nombre'],ENT_QUOTES,'UTF-8');?>
              </label>
          <?php endforeach?>

      <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

      <p><?php echo form_submit('submit', lang('edit_user_submit_btn'));?></p>

<?php echo form_close();?>
<footer class="panel-footer">
      <p>Centro de Estudios sobre Derecho, Globalizaci&oacute;n y Seguridad, ISSN 1665-1529 Galeana esquina 7 de Noviembre C.P. 91000 Xalapa Veracruz, M&eacute;xico Tel. (228) 8 contacto@letrasjuridicas.com  y  letrasjuridicas@hotmail.com </p>
    </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?=base_url('')."assets/js/bootstrap.min.js"?>"></script>
  </body>
</html>