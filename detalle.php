<?php
  include("Conexion.php");
  $listado = "select * from pie";
  $sentencia = mysql_query($listado,$conn);
  while($rs=mysql_fetch_array($sentencia,$mibase)){
    $correo = str_replace("\r\n","<br>",$rs["correo"]); 
    $telefono = str_replace("\r\n","<br>",$rs["telefono"]); 
  }
  
?>
 <!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
	<title>Detalle Busca Tu Propiedad</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="imagenes/icon.png">
</head>
<body>
	<header>
	  <div class="centro_header">
	  	<div class="logo">
	  		<a href="index.php">
	  			<img src="imagenes/logo.png">
	  		</a>
	  	</div>
	    <nav id="menu">
	      <a href="#" class="nav-mobile" id="nav-mobile"></a>
	      <ul>
	        <li><a href="index.php">INICIO</a></li>
	        <li><a href="ventayarriendo.php?fun=venta">VENTA</a></li>
	        <li><a href="ventayarriendo.php?fun=arriendo">ARRIENDO</a></li>
	        <li><a href="tasaciones.php">TASACIONES</a></li>
	        <li><a href="noticias.php">NOTICIAS</a></li>
	        <li><a href="contacto.php">CONTACTO</a></li>
	      </ul>
	    </nav>
	  </div>
	</header>
	<section class="contenido_principal">
		<div class="detalle">
			<div class="galeria">
				<div class="img_principal">
					<img src="imagenes/galeria/1.jpg">
				</div>
				<div class="img_chica">
					<img src="imagenes/galeria/2.jpg">
				</div>
				<div class="img_chica">
					<img src="imagenes/galeria/3.jpg">
				</div>
				<div class="img_chica">
					<img src="imagenes/galeria/4.jpg">
				</div>
				<div class="img_chica">
					<img src="imagenes/galeria/5.jpg">
				</div>
				<div class="img_chica">
					<img src="imagenes/galeria/6.jpg">
				</div>
				<div class="descripcion">
					<h3>Descripcion</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
					incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
					exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
			<div class="contenido_propiedad">
				<h2>Fundo Lorem Ipsum</h2>
				<p><strong>Tipo:</strong> Fundo</p>
				<p><strong>Sector:</strong> lorem ipsum 123 lorem</p>
				<p><strong>Superficie Terreno:</strong> 1234</p>
				<p><strong>Superficie Construida:</strong> 1234</p>
				<p><strong>Pisos:</strong> 2</p>
				<p><strong>Dormitorios:</strong> 4</p>
				<p><strong>Baños:</strong> 2</p>
				<p><strong>Estacionamientos:</strong> 1</p>
				<p><strong>Otros:</strong> lorem ipsum</p>
				<p><strong>Gastos Comunes:</strong> no</p>
				<p><strong>Precio:</strong> <strong style="color:#bf150f;">144000</strong></p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d850065.9583072681!2d-70.363372!3d-33.668298150000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2scl!4v1414432698081" width="100%" height="350" frameborder="0" style="border:0"></iframe>
			</div>
		</div>
	</section>
	<section class="contenido_secundario">
		<div class="proyectos_destacados">
			<div class="proyectos">
				<p class="titulo">Proyectos Destacados</p>
				<?php 
			        $listado = "select * from destacados";
			        $sentencia = mysql_query($listado,$conn);
			        while($rs=mysql_fetch_array($sentencia,$mibase)){
			    ?>
				<article class="destacado">
					<figure class="img">
						<img src="imagenes/destacados/<?php echo $rs["id"]; ?>.jpg">
					</figure>
					<div class="textos">
						<h3><?php $texto = str_replace("\r\n","<br>",$rs["nombre_dest"]); echo $texto ?></h3>
						<p><?php $texto = str_replace("\r\n","<br>",$rs["m2_dest"]); echo $texto ?></p>
						<p><?php $texto = str_replace("\r\n","<br>",$rs["valor_dest"]); echo $texto ?></p>
						<a href="<?php echo $rs["url"] ?>">ver mas</a>
					</div>
				</article>
				<?php } ?>
			</div>
			<div class="conversor">
				<div class="datos">
					<h4 class="conversor_titulo">Conversor Economico</h4>
					<div class="uf">
						<P>UF:</P>
						<input name="uf" type="text" class="conv"/>  
					</div>
					<div class="uf">
						<P>Peso:</P>
						<p class="valor">100.000</p>
					</div>
				</div>
			</div>
		</div>
		<section class="contacto">
			<form class="formulario" action="detalle.php" method="post" onSubmit="MM_validateForm('name','','R','message','','R');return document.MM_returnValue;return document.MM_returnValue">
				<h4>Formulario de Contacto</h4>
		        <input class="input" name="Nombre" type="text" placeholder="Nombre"/>
		        <input class="input" name="Mail" type="text" placeholder="E-mail"/>  
		        <input class="input" name="Telefono" type="text" placeholder="Teléfono"/>
		        <textarea name="Mensaje" id="Mensaje" class="mensaje" placeholder="Mensaje"></textarea>
		        <input class="enviar" name="Enviar" type="submit" value="Enviar"/>
		    </form>
		</section>
	</section>
	<footer>
		<div class="social">
			<p>Siguenos en nuestras Redes Sociales</p>
			<a href="https://www.facebook.com/Buscatupropiedad" target="new">
				<img src="imagenes/facebook.jpg">
			</a>
			<a href="https://twitter.com/btpchile" target="new">
				<img src="imagenes/twitter.jpg">
			</a>
			<a href="contacto.php">
				<img src="imagenes/google.jpg">
			</a>
		</div>
		<p><?php echo $correo ?></p>
		<p><?php echo $telefono ?></p>
		<p class="emagenic">todos los derechos reservados a buscatupropiedad.cl | <a href="http://www.emagenic.cl" target="new">sitio web desarrollado por emagenic.cl</a></p>
	</footer>
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script>
	    $(function() {
	        var btn_movil = $('#nav-mobile'),
	            menu = $('#menu').find('ul');
	        btn_movil.on('click', function (e) {
	            e.preventDefault();
	            var el = $(this);
	            el.toggleClass('nav-active');
	            menu.toggleClass('open-menu');
	        })
	    });
	</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  	<script src="js/responsiveslides.min.js"></script>
  	<script>
	    $(function () {
	      $("#slider1").responsiveSlides({
	        maxwidth: 800,
	        speed: 800
	      });

	    });
  	</script>
  	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
  	</script>
  	<script>(function(d, s, id) {
      	var js, fjs = d.getElementsByTagName(s)[0];
      	if (d.getElementById(id)) return;
      	js = d.createElement(s); js.id = id;
      	js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
      	fjs.parentNode.insertBefore(js, fjs);
      	}(document, 'script', 'facebook-jssdk'));
  	</script>
</body>
</html>
<?php
  if ($_POST["Enviar"]){
    $destinatario = "atoro@emagenic.cl"; 
    $nombre = $_POST["Nombre"];
    $telefono = $_POST["Telefono"];
    $mail = $_POST["Mail"];
    $Telefono = $_POST["Telefono"];
    $Mensaje = $_POST["Mensaje"];
    $asunto = "Consulta sitio web"; 
    $cuerpo = "
    <table width=100% border=0 cellspacing=0 cellpadding=0>
      <tr><td>NOMBRE: $nombre</td></tr>
      <tr><td>TELEFONO: $telefono</td></tr>
      <tr><td>MAIL: $mail</td></tr>
      <tr><td>CONSULTA: $Mensaje</td></tr>
    </table>";
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=utf-8\r\n"; 
    $headers .= "From: $nombre <$mail>\r\n"; 
    mail($destinatario,$asunto,$cuerpo,$headers);
    echo "<script> alert('Su consulta fue enviada correctamente'); </script>";
    
    
  }
?>