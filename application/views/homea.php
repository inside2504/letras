<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Letras jur&iacute;dicas</title>
		<meta http-equiv="Content-Type" content="text/html; charset = ISO-8859-1">
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
		<div>
			<section class="noticias">
			<div id="carrusel" class="carousel slide" data-ride="carousel">
				<!--<ol class="carousel-indicators">
					<li data-target="#carrusel" data-slide-to="0" class="active"></li>
					<li data-target="#carrusel" data-slide-to="1"></li>
					<li data-target="#carrusel" data-slide-to="2"></li>
					<li data-target="#carrusel" data-slide-to="3"></li>
					<li data-target="#carrusel" data-slide-to="4"></li>
					<li data-target="#carrusel" data-slide-to="5"></li>
				</ol>-->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="<?=base_url('')."assets/img/1carru.jpg"?>" alt="Rectora y Doctor">
						<div class="container">
						<div class="carousel-caption">
							<h3>Acreditaci&oacute;n de la Facultad de Derecho.</h3>
							<p>Rectora Sara Ladr&oacute;n de Guevara, Doctor Manlio Fabio Casar&iacute;n Le&oacute;n</p>
						</div>
						</div>
					</div>
					<div class="item">
						<img src="<?=base_url('')."assets/img/2carru.jpg"?>">
						<div class="carousel-caption">
							<h3>Presentaci&oacute;n del libro de la Doctora Ana Gamboa de Trejo.</h3>
							<p></p>
						</div>
					</div>
					<div class="item">
						<img src="<?=base_url('')."assets/img/3carru.jpg"?>">
						<div class="carousel-caption">
							<h3>Presentaci&oacute;n del libro de la Doctora Rebeca Elizabeth Contreras L&oacute;pez.</h3>
							<p></p>
						</div>
					</div>
					<div class="item">
						<img src="<?=base_url('')."assets/img/4carru.jpg"?>">
						<div class="carousel-caption">
							<h3>Presentaci&oacute;n del libro de la Doctora Socorro Moncayo Rodr&iacute;guez.</h3>
							<p></p>
						</div>
					</div>
					<div class="item">
						<img src="<?=base_url('')."assets/img/5carru.jpg"?>">
						<div class="carousel-caption">
							<h3>Presentaci&oacute;n del libro RED del CEDEGS.</h3>
							<p></p>
						</div>
					</div>
					<div class="item">
						<img src="<?=base_url('')."assets/img/6carru.jpg"?>">
						<div class="carousel-caption">
							<h3>Cambio de administraci&oacute;n del CEDEGS.</h3>
							<p></p>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#carrusel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a class="right carousel-control" href="#carrusel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Siguiente</span>
				</a>
			</div>
			</section>
			</div>
			<section id="letras">
				<div>
					<article>
						<p>
							Letras Jur&iacute;dicas es una revista multidisciplinar del Centro de Estudios sobre Derecho, Globalizaci&oacute;n y Seguridad de la Universidad Veracruzana, que busca difundir resultados de investigaci&oacute;n cient&iacute;fica relacionados con la ciencia jur&iacute;dica, la globalizaci&oacute;n, la seguridad y la educaci&oacute;n con una visi&oacute;n multidisciplinar que permita la interacci&oacute;n entre diversas especialidades.
							Es adem&aacute;s, un espacio de difusi&oacute;n de los temas actuales del derecho y las novedades legislativas y jurisdiccionales de inter&eacute;s.
							La revista es semestral y utiliza un procedimiento apegado a los est&aacute;ndares de revistas cient&iacute;ficas para garantizar tanto la selecci&oacute;n de las colaboraciones, a partir de dos arbitrajes con criterio de doble ciego, as&iacute; como la transparencia en su proceso editorial.
						</p>
					</article>
				</div>
			</section>
			<div>
				<div class="row">
					<div class="col-lg-4">
						<h4 class="alineacion">Equipo editorial</h4>
						<p class="lado">	
						Dra. Rebeca Elizabeth Contreras L&oacute;pez<br>Directora y responsable de la edici&oacute;n.<br><br>
						Antrop. Rita Mar&iacute;a Le&oacute;n L&oacute;pez<br>Responsable de la formaci&oacute;n y del proceso editorial.<br><br>
						Lic. Diana M. Guzm&aacute;n<br>Administradora<br><br>
						Manuel Francisco Cruz Florencia<br>Responsable de las noticias y entrevistas<br><br>
						Jana Madeleyn Figueroa Fern&aacute;ndez<br></b>Encargada de la distribuci&oacute;n.<br><br>
						Isay Armando Gonz&aacute;lez Cruz<br>Responsable del soporte electr&oacute;nico e inform&aacute;tico.<br>
						</p>
					</div>
					<div class="col-lg-4">
						<h4>Consejo editorial</h4>
						<p class="lado">
						Ana Gamboa de Trejo (M&eacute;xico)<br>
						Jaqueline Jongitud Zamora (M&eacute;xico)<br>
						Jorge Witker Vel&aacute;zquez (M&eacute;xico)<br>
						Sergio Garc&iacute;a Ram&iacute;rez (M&eacute;xico)<br>
						Marta S. Moreno Luce (M&eacute;xico)<br>
						Eugenio Ra&uacute;l Zaffaroni (Argentina)<br>
						Jos&eacute; Luis Cascajo Castro (Espa&ntilde;a)<br>
						Rafael Bustos Gisbert (Espa&ntilde;a)<br>
						Regina Mar&iacute;a P&eacute;rez Marcos (Espa&ntilde;a)<br>
						</p>
					</div>
					<div class="col-lg-4">
						<h4>Comit&eacute; editorial</h4>
						<p class="lado">
						Josefa Montalvo Romero (M&eacute;xico)<br>
						Socorro Moncayo Rodr&iacute;guez (M&eacute;xico)<br>
						&Aacute;ngela Figueruelo Marcos (Espa&ntilde;a)<br>
						Julia Ropero Carrasco (Espa&ntilde;a)<br>
						Rossana Panne (Italia)<br>
						</p>
					</div>
				</div>
				<div>
					<h4 class="colaboradores">Colaboradores</h4>
					<div class="row">
						<div class="col-lg-4">
							<p class="lado">
								Mar&iacute;a del Pilar Espinosa Torres<br><br>
								Socorro Moncayo Rodr&iacute;guez<br><br>
								Marta Silvia Moreno Luce<br>
							</p>
						</div>
						<div class="col-lg-4">
							<p class="lado">
								Ana Gamboa de Trejo<br><br>
								Josefa Montalvo Romero<br><br>
								Judith Aguirre Moreno<br>
							</p>
						</div>
						<div class="col-lg-4">
							<p class="lado">
								Miriam Elsa Contreras L&oacute;pez<br><br>
								Sala Luz Quiroz Ruiz<br><br>
								Mar&iacute;a Teresa Montalvo Romero<br>
							</p>
						</div>
					</div>
				</div>
			</div>
			<footer class="panel-footer">
				<p class="foot">
					Centro de Estudios sobre Derecho, Globalizaci&oacute;n y Seguridad, ISSN 1665-1529 Galeana esquina 7 de Noviembre C.P. 91000 Xalapa Veracruz, M&eacute;xico<br>
					Tel. (228) 8 41 37 98 contacto@letrasjuridicas.com  y  letrasjuridicas@hotmail.com 
				</p>
			</footer>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="<?=base_url('')."assets/js/bootstrap.min.js"?>"></script>
	</body>
</html>