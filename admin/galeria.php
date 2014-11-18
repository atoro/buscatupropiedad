<?php
session_start();
include("../Conexion.php");
if ($_POST["Grabar"]){
	$insertar="INSERT INTO galeria (titulo,url,Tipo,propiedad) 
		VALUES('$_POST[titulo]','$_POST[url]','$_POST[Tipo]','$_GET[propiedad]')";
		$sentencia=mysql_query($insertar,$conn)or die("Error al grabar un nuevo link: ".mysql_error);

}
if ($_GET["fun"] =="eli"){
	$insertar = "delete from galeria WHERE id = '".$_GET["id"]."' " ; 
	$sentencia=mysql_query($insertar,$conn)or die("Error al grabar un mensaje: ".mysql_error);
	
	$dir="../imagenes/galeria/". $_GET["id"] .".jpg";
	if(file_exists($dir)) { 
		if(unlink($dir)) 
			print ""; 
		} else 
			print "";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin</title>
<link href="../letras.css" rel="stylesheet" type="text/css" />
<link href="../css/letras.css" rel="stylesheet" type="text/css" />
<link href="letras.css" rel="stylesheet" type="text/css" />
<link href="../css/admin.css" rel="stylesheet" type="text/css" />
<link href="../estilos-varios.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="galeria.php?propiedad=<?php echo $_GET["propiedad"] ?>">
  <table width="50%" border="1" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td class="textotitulospropiedades">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="19%" class="texto">Titulo</td>
          <td width="81%"><label for="titulo"></label>
            <input name="titulo" type="text" id="titulo" size="50" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label for="Tipo"></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="Grabar" type="submit" class="botones" id="Grabar" value="Grabar" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
<p align="center"><a href="ventayarriendo.php" class="texto">Volver</a></p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <?php 
$listado = "select * from  galeria where propiedad = '$_GET[propiedad]'";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
?>
  <tr>
    <td width="25%" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><a href="../imagenes/galeria/Upload_foto.php?id=<?php echo $rs["id"]; ?>&amp;propiedad=<?php echo $_GET["propiedad"]; ?>" class="texto">Cambiar foto</a></td>
      </tr>
      <tr>
        <td align="center"><img src="../imagenes/galeria/<?php echo $rs["id"]; ?>.jpg" width="177" /></td>
      </tr>
      <tr>
        <td align="center"><a href="galeria.php?id=<?php echo $rs["id"]; ?>&fun=eli&propiedad=<?php echo $_GET["propiedad"]; ?>" class="texto">Eliminar</a></td>
      </tr>
    </table></td>
    <?php if($rs=mysql_fetch_array($sentencia,$mibase)){ ?>
    <td width="25%" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><a href="../imagenes/galeria/Upload_foto.php?id=<?php echo $rs["id"]; ?>&amp;propiedad=<?php echo $_GET["propiedad"]; ?>" class="texto">Cambiar foto</a></td>
      </tr>
      <tr>
        <td align="center"><img src="../imagenes/galeria/<?php echo $rs["id"]; ?>.jpg" width="177" /></td>
      </tr>
      <tr>
        <td align="center"><a href="galeria.php?id=<?php echo $rs["id"]; ?>&amp;fun=eli&amp;propiedad=<?php echo $_GET["propiedad"]; ?>" class="texto">Eliminar</a></td>
      </tr>
    </table></td>
    <?php if($rs=mysql_fetch_array($sentencia,$mibase)){ ?>
    <td width="25%" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><a href="../imagenes/galeria/Upload_foto.php?id=<?php echo $rs["id"]; ?>&amp;propiedad=<?php echo $_GET["propiedad"]; ?>" class="texto">Cambiar foto</a></td>
      </tr>
      <tr>
        <td align="center"><img src="../imagenes/galeria/<?php echo $rs["id"]; ?>.jpg" width="177" /></td>
      </tr>
      <tr>
        <td align="center"><a href="galeria.php?id=<?php echo $rs["id"]; ?>&amp;fun=eli&amp;propiedad=<?php echo $_GET["propiedad"]; ?>" class="texto">Eliminar</a></td>
      </tr>
    </table></td>
    <?php if($rs=mysql_fetch_array($sentencia,$mibase)){ ?>
    <td width="25%" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><a href="../imagenes/galeria/Upload_foto.php?id=<?php echo $rs["id"]; ?>&amp;propiedad=<?php echo $_GET["propiedad"]; ?>" class="texto">Cambiar foto</a></td>
      </tr>
      <tr>
        <td align="center"><img src="../imagenes/galeria/<?php echo $rs["id"]; ?>.jpg" width="177" /></td>
      </tr>
      <tr>
        <td align="center"><a href="galeria.php?id=<?php echo $rs["id"]; ?>&amp;fun=eli&amp;propiedad=<?php echo $_GET["propiedad"]; ?>" class="texto">Eliminar</a></td>
      </tr>
    </table></td>
  </tr>
  <?php }}}} ?>
</table>
<p>&nbsp;</p>
</body>
</html>