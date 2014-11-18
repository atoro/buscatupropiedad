<?php
  include("Conexion.php");
  $listado = "select * from pie";
  $sentencia = mysql_query($listado,$conn);
  while($rs=mysql_fetch_array($sentencia,$mibase)){
    $correo = str_replace("\r\n","<br>",$rs["correo"]); 
    $telefono = str_replace("\r\n","<br>",$rs["telefono"]); 
  }

  $listado = "select * from slide";
  $sentencia = mysql_query($listado,$conn);
  while($rs=mysql_fetch_array($sentencia,$mibase)){
    $slide1 = str_replace("\r\n","<br>",$rs["slide1"]); 
    $texto_slide1 = str_replace("\r\n","<br>",$rs["texto_slide1"]); 
    $slide2 = str_replace("\r\n","<br>",$rs["slide2"]); 
    $texto_slide2 = str_replace("\r\n","<br>",$rs["texto_slide2"]); 
    $slide3 = str_replace("\r\n","<br>",$rs["slide3"]); 
    $texto_slide3 = str_replace("\r\n","<br>",$rs["texto_slide3"]); 
  }

?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
	<title>Busca Tu Propiedad</title>
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
	        <li><a class="activo" href="index.php">INICIO</a></li>
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
		<div class="filtro">
			<div class="buscatupropiedad">
				Busca Tu Propiedad 
			</div>
			<div class="contenido_filtro">
				<p class="tipo_filtro">Venta / Arriendo</p>
				<select class="select">
	    			<option value="Todas">Todas</option>    
					<<option value="Venta">Venta</option>
            		<option value="Arriendo">Arriendo</option>
				</select>
				<p class="tipo_filtro">Región</p>
				<select class="select">
					<option>Todas</option>   
	    			<option>Región de O'higgins</option>    
				</select>
				<p class="tipo_filtro">Comuna</p>
				<select class="select">
					<option>Todas</option>   
	    			<option>Chimbarongo</option> 
	    			<option>Chépica</option> 
	    			<option>Codegua</option>  
	    			<option>Coinco</option>
	    			<option>Coltauco</option> 
	    			<option>Doñihue</option> 
	    			<option>Graneros</option> 
	    			<option>La Estrella</option> 
	    			<option>Las Cabras</option> 
	    			<option>Litueche</option> 
	    			<option>Lolol</option> 
	    			<option>Machalí</option> 
	    			<option>Malloa</option> 
	    			<option>Marchihue</option> 
	    			<option>Mostazal</option> 
	    			<option>Nancagua</option> 
	    			<option>Navidad</option> 
	    			<option>Olivar</option> 
	    			<option>Palmilla</option> 
	    			<option>Paredones</option> 
	    			<option>Peralillo</option> 
	    			<option>Peumo</option> 
	    			<option>Pichidegua</option> 
	    			<option>Pichilemu</option> 
	    			<option>Placilla</option> 
	    			<option>Pumanque</option> 
	    			<option>Quinta de Tilcoco</option> 
	    			<option>Rancagua</option> 
	    			<option>Rengo</option> 
	    			<option>Requínoa</option> 
	    			<option>San Fernando</option> 
	    			<option>San Vicente de Tagua Tagua</option> 
	    			<option>Santa Cruz</option>  
				</select>
				<p class="tipo_filtro">Tipo de Propiedad</p>
				<select class="select">
					<option value="Todas">Todas</option>   
	    			<option value="Agricola">Agricola</option>  
	    			<option value="Bodega">Bodega</option>  
	    			<option value="Casa">Casa</option>  
	    			<option value="Departamento">Departamento</option>
	    			<option value="Estacionamientos">Estacionamiento</option>  
	    			<option value="Local Comercial">Local Comercial</option>  
	    			<option value="Loteo">Loteo</option>  
	    			<option value="Oficina">Oficina</option>  
	    			<option value="Parcela">Parcela</option>  
	    			<option value="Sitio Industrial">Sitio Industrial</option>  
	    			<option value="Terreno en Construccion">Terreno en Construcción</option>  
	    			<option value="Turismo">Turismo</option>  
				</select>
				<input class="buscar" type="submit" name="button" id="button" value="Buscar">
			</div>
		</div>
		<section class="slide">
			<div id="wrapper">
			    <ul class="rslides" id="slider1">
			      <li>
			      	<img src="imagenes/slide/1.jpg">
			      	<div class="contenido_slide">
			      		<h2><?php echo $slide1 ?></h2>
			      		<p><?php echo $texto_slide1 ?></p>
			      	</div>
			      </li>
			      <li>
			      	<img src="imagenes/slide/2.jpg">
			      	<div class="contenido_slide">
			      		<h2><?php echo $slide2 ?></h2>
			      		<p><?php echo $texto_slide2 ?></p>
			      	</div>
			      </li>
			      <li>
			      	<img src="imagenes/slide/3.jpg">
			      	<div class="contenido_slide">
			      		<h2><?php echo $slide3 ?></h2>
			      		<p><?php echo $texto_slide3 ?></p>
			      	</div>
			      </li>
			    </ul>
			  </div>
		</section>
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
			<form class="formulario" action="index.php" method="post" onSubmit="MM_validateForm('name','','R','message','','R');return document.MM_returnValue;return document.MM_returnValue">
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