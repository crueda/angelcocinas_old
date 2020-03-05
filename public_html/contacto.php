<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Angel Cocinas. Contacto</title>
    <meta name="keywords" content="angel cocinas,baños,benavente,zamora,mamparas,instalación,montaje,accesorios,calidad,barato,muebles" />
	<meta name="description" content="Somos profesionales del diseño, con nuestro sistema de diseño informático podemos dar vida a sus ideas y asesorarle para realizar la mejor y más óptima combinación en su cocina." />
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	
	<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
</head>
<body>
	<!--PLUGIN DE COOKIES -->
<script src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
<script src="js/cookieControl-5.1.min.js" type="text/javascript"></script>
<script src="js/texto.js" type="text/javascript"></script>
<link type="text/css" href="js/cookies.css" media="all" rel="stylesheet" />
<!-- FIN PLUGIN DE COOKIES --> 
	<!-- wrapper -->
	<div id="wrapper">
		<!-- header -->
		<header>
			<div class="shell">
				<h1 id="logo"><a href="#">Angel Cocinas</a></h1>
				<nav id="navigation">
					<ul>
						<li><a href="index.html">PRINCIPAL</a></li>
						<li><a href="banos.html">BAÑOS</a></li>
						<li><a href="cocinas.html">COCINAS</a></li>
						<li><a href="complementos.html">COMPLEMENTOS</a></li>
						<li class="active"><a href="contacto.php">CONTACTO</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<!-- end of header -->
		<!-- top-section -->
		<section class="top-section">
			<div class="shell">
				<!-- slider -->
				<div id="content">
                <h1>Nuestro Contacto</h1>
                <p>Si desea realizarnos alguna consulta relaciona con nuestra principal actividad, no dude en ponerse en contacto mediante los sistemas de contacto presentes en la web, uno de nuestros empleados le atenderá personalmente.</p>
                <p>&nbsp;</p>
                <iframe style="margin-right:35px;" src="https://mapsengine.google.com/map/embed?mid=zjQvc4XE5DTY.kyaFG5oIgHN8" width="865" height="350"></iframe>

                <p>&nbsp;</p>
                
                <p style="font-size: 16px; font-weight: bold; color: #E23287;">&nbsp;</p>
                <p style="font-size: 16px; font-weight: bold; color: #E23287;"><img src="css/images/FachadaAngelCocinas.jpg" width="874" height="582"></p>
                <div style="float:right; margin-right:45px; margin-top: 30px;" id="contact_form">
            
       <h2>Formulario de Contacto</h2>
                <? if(!isset($_POST['submit'])){ ?>
                    <form method="post" name="contact" action="">
                
                        <input type="hidden" name="post" value="Send" />
                      	<label for="author">Nombre:</label> <input type="text" id="author" name="nombre" class="required input_field" />
                      	<div class="cleaner_h10"></div>
                        
                        <label for="email">Teléfono:</label> <input type="text" id="email" name="telefono" class="validate-email required input_field" />
                      	<div class="cleaner_h10"></div>
                        
                         <label for="email">Correo:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                      	<div class="cleaner_h10"></div>

                        <label for="text">Mensaje o Consulta:</label> <textarea id="text" name="mensaje" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner_h10"></div>
                        
                        <input type="submit" class="submit_btn" name="submit" id="submit" value="Enviar" />
                        <input type="reset" class="submit_btn" name="reset" id="reset" value="Borrar" />
              	</form>
                <? }else{
					$cuerpo = "Formulario de Contacto\n<br />";
					$cuerpo .= "Nombre: ".$_POST["nombre"]."\n<br />";
					$cuerpo .= "Email: ".$_POST["email"]."\n<br />";
					$cuerpo .= "Tel&eacute;fono: ".$_POST["telefono"]."\n<br />";
					$cuerpo .= "Mensaje: ".nl2br($_POST["mensaje"])."\n<br />";
						
					$cabeceras="MIME-Version: 1.0\r\n";
					$cabeceras .= "Content-type: text/html; charset=utf-8\r\n";
					$cabeceras.="From: info@angelcocinas.com";
								
					mail("info@angelcocinas.com","Formulario de contacto",$cuerpo,$cabeceras);
					?>
					<p>Gracias por ponerse en contacto con nosotros. En breve nos pondremos en contacto con usted</p>
					<?
				}
				?>
<div class="cl"></div>
          </div>
                <p style="color: #EC008D; font-size: 24px;">
                  <br>
                  Angel Cocinas</p>
                <p>Pasaje  de San Nicolás,4<br>
                  49600<strong> Benavente</strong> (Zamora) <br>
                  <br>
                  <br>
                </p>
                <p>&nbsp;</p>
                <p><br>
                  Teléfono de Contacto. <span style="color: #EC008D; font-weight: bold; font-size: 16px;">980 63 82 57</span><br>
                  Correo Electrónico. <a href="mailto:info@angelcocinas.com">info@angelcocinas.com</a></p>
                <p>&nbsp;</p>
                
<div class="cl"></div>
			  </div>
				<!-- end of content -->
				<!-- boxes -->
				<div class="boxes">
					<div class="box">
						<div class="img-holder">
							<img src="css/images/user-interface-design.png" alt="" />
						</div>
						<h4><a href="complementos.html">TODO TIPO DE ACCESORIOS</a></h4>
						<span class="box-shadow"></span>
					</div>
					<div class="box">
						<div class="img-holder">
							<img src="css/images/graphic-design.png" alt="" />
						</div>
						<h4><a href="banos.html">MUEBLES DE BAÑO</a></h4>
						<span class="box-shadow"></span>
					</div>
					<div class="box">
						<div class="img-holder">
							<img src="css/images/brand-identity.png" alt="" />
						</div>
						<h4><a href="cocinas.html">COCINAS EXCLUSIVAS</a></h4>
						<span class="box-shadow"></span>
					</div>
					<div class="cl">&nbsp;</div>
				</div>
				<!-- end of boxes -->
			</div>
		</section>
			<!-- end of top-section -->
		<!-- main -->
		<div class="main"><!-- end of shell -->
			<!-- section-bottom -->
		  <section class="section-bottom">
				<!-- shell -->
				<div class="shell">
					<!-- cols -->
					<div class="cols">
						<div class="col">
							<h3><span class="about-ico"></span>SOBRE <strong>NOSOTROS</strong></h3>
							<p>Desde  1995 diseñando y equipando cocinas y baños en Castilla y León. Cientos de  clientes satisfechos disfrutan en sus hogares de nuestro trabajo y la calidad  de unos materiales seleccionados por nosotros que garantizan la más alta calidad  y por supuesto la durabilidad de los mismos.<br>
Somos  profesionales del diseño, con nuestro sistema de diseño informático podemos dar  vida a sus ideas y asesorarle para realizar la mejor y más óptima combinación  en su cocina.<br>
Somos  conscientes de que un buen montaje es lo principal para obtener una excelente  instalación, por ese motivo no escatimamos ni el tiempo, ni los profesionales  cualificados que cada instalación precisa.<br>
Con  nuestro consejo y presupuesto obtendrá una de las mejores relaciones  calidad-precio del mercado sin sorpresas. <br>
						  </p>
					  </div>
						
						<div class="col subscribe-col">
							<h3><span class="subscribe-ico"></span>CONTACTO <strong>RÁPIDO </strong></h3>
							<div class="col-cnt">
                            <h2>Angel Cocinas</h2>
								<p>Pasaje de  San Nicolás, 4 <br>
							    49600 Benavente (Zamora)</p>
						    
                              <h2>Telf. 980 63 82 57</h2>
								<p><a style="font-size:16px; color: #EC008D;" href="mailto:info@angelcocinas.com">info@angelcocinas.com</a>
								  <br>
								  <a href="https://www.facebook.com/angel.cocinasbanos?fref=ts" target="_blank"><img src="css/images/siguenos-facebook.png" width="232" height="35"></a></p>
								<p><span style="font-weight: bold; font-size: 18px;">Visítenos  y estaremos encantados de aconsejarle....</span></p>
                            </div>	
						</div>
                        <div class="col">
							<h3><span class="news-ico"></span>PROVEDORES <strong>MARCAS</strong></h3>
							<ul>
                            
								<li><img src="css/images/marcas.png" width="256" height="148" border="0" usemap="#Map">
                                  <map name="Map">
                                    <area shape="rect" coords="13,10,123,36" href="http://www.bosch-home.es/">
                                    <area shape="rect" coords="143,4,253,44" href="http://www.balay.es/">
                                    <area shape="rect" coords="9,41,64,95" href="http://www.mueblesfuster.com/">
                                    <area shape="rect" coords="80,52,147,90" href="http://www.industriasaja.com/">
                                    <area shape="rect" coords="166,52,246,94" href="http://www.mueblesob.es/">
                                    <area shape="rect" coords="10,107,125,129" href="http://www.siemens-home.es/">
                                    <area shape="rect" coords="139,105,249,137" href="http://www.banolux.com/">
                                  </map>
							  </li>
							</ul>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
					<!-- end of cols -->
				</div>
				<!-- end of shell -->
			</section>
			<!-- end of main -->
		<div id="footer-push"></div>
	</div>
	<!-- end of wrapper -->
	<!-- footer -->
	<div id="footer">
		<div class="footer-bottom">
			<div class="shell">
				<nav class="footer-nav left">
					<ul>
						<li><a href="index.html">PRINCIPAL</a></li>
						<li><a href="banos.html">BAÑOS</a></li>
						<li><a href="cocinas.html">COCINAS</a></li>
						<li><a href="complementos.html">COMPLEMENTOS</a></li>
						<li class="active"><a href="contacto.php">CONTACTO</a></li>
					</ul>
				</nav>
				<p class="copy right"> All Rights Reserved Copyright 2014 | Diseñado por: <a href="http://geswebs.com">GesWebs</a></p>
				<div class="cl">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end of footer -->
</body>
</html>