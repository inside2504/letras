<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Letras jur&iacute;dicas</title>
		<meta http-equiv="Content-Type" content="text/html; charset = utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?=base_url('')."assets/css/bootstrap.css"?>">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,700italic' rel='stylesheet' type='text/css'>
		</head>
	<body class="page">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!--Configuracion para dispositivos moviles--> 
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Desplegar Men&uacute;</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo site_url('home')?>">Letras Jur&iacute;dicas
				</a>
			</div>
			<!--Agrupacion de elementos para ocultarlos al minimizar la barra-->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li >
						<a href="<?php echo site_url('home')?>">Inicio</a>
					</li>		
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Publicaciones<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a ="Revistas" href="<?php echo site_url('revistas')?>">Revistas</a>
							</li>
							<li>
								<a href="<?php echo site_url('libros')?>">Libros</a>
							</li>
							<li>
								<a href="http://revistas.uv.mx/index.php/letrasjuridicas/" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;">Cat&aacute;logos UV</a>
							</li>					
						</ul>
					</li>
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Lineamientos<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo site_url('lineamientos')?>">Editoriales</a></li>
							<li><a href="<?php echo site_url('reglamentacion')?>">Para autores</a></li>
						</ul>
					</li>
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Contacto<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo site_url('contacto')?>">Letras Jur&iacute;dicas</a></li>
							<li><a href="http://www.uv.mx/cedegs/" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;">CEDEGS</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="<?php echo site_url('/auth/login')?>" > Ingresar</a>
					</li>
				</ul>
				<!--Barra de busqueda-->			
			</div>
		</nav>