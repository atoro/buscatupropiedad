<?php
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
include("../Conexion.php");
if ($_POST["Modificar"]){
	$insertar = "UPDATE detalle SET nombre ='".$_POST["nombre"]."',tipo ='".$_POST["tipo"]."',sector ='".$_POST["sector"]."',superficie_terreno ='".$_POST["superficie_terreno"]."',superficie_construida ='".$_POST["superficie_construida"]."',pisos ='".$_POST["pisos"]."',dormitorios ='".$_POST["dormitorios"]."',banos ='".$_POST["banos"]."',estacionamientos ='".$_POST["estacionamientos"]."',otros ='".$_POST["otros"]."',gastos_comunes ='".$_POST["gastos_comunes"]."',precio ='".$_POST["precio"]."',descripcion_corta ='".$_POST["descripcion_corta"]."',descripcion_larga ='".$_POST["descripcion_larga"]."',mapa ='".$_POST["mapa"]."',operacion ='".$_POST["operacion"]."'   WHERE id  = '" .$_GET["id"]."' " ; 
	$sentencia=mysql_query($insertar,$conn)or die("Error al grabar : ".mysql_error);


?>
<script language="javascript">
	window.opener.document.location="ventayarriendo.php"
	window.close();
	</script>	
<?php } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Editar</title>
<link href="../Letras.css" rel="stylesheet" type="text/css" />

</head>

<body>

<?php 
$listado = "select * from  detalle where id ='$_GET[id]'";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
?>
<form action="editarventayarriendo.php?id=<?php echo $_GET["id"]; ?>" method="post" name="form1" id="form1">
  <table width="44%" border="0" align="left" cellpadding="0" cellspacing="0">
    <tr>
      <td width="81%" valign="top"><p>
        <label>
          <input type="submit" name="Modificar" id="Modificar" value="Modificar" />
          </label>
        </p>
        <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="32" align="right" valign="top" class="textos"><span class="texto">Nombre :</span>&nbsp;</td>
            <td valign="top" class="Letras1"><input name="nombre" type="text" id="titulo_noticia10" value="<?php echo $rs["nombre"]; ?>" /></td>
          </tr>
          <tr>
            <td height="32" align="right" valign="top" class="textos"><span class="texto">Tipo :</span>&nbsp;</td>
            <td valign="top" class="Letras1"><span class="contenido_filtro">
              <select name="select" class="select">
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
            </span></td>
          </tr>
          <tr>
            <td height="32" align="right" valign="top" class="textos"><span class="texto">Sector :</span>&nbsp;</td>
            <td valign="top" class="Letras1"><input name="sector" type="text" id="titulo_noticia8" value="<?php echo $rs["sector"]; ?>" /></td>
          </tr>
          <tr>
            <td height="32" align="right" valign="top" class="textos"><span class="texto">Superficie Terreno:</span>&nbsp;</td>
            <td valign="top" class="Letras1"><input name="superficie_terreno" type="text" id="titulo_noticia7" value="<?php echo $rs["superficie_terreno"]; ?>" /></td>
          </tr>
          <tr>
            <td height="32" align="right" valign="top" class="textos"><span class="texto">Superficie Construida :</span>&nbsp;</td>
            <td valign="top" class="Letras1"><input name="superficie_construida" type="text" id="titulo_noticia6" value="<?php echo $rs["superficie_construida"]; ?>" /></td>
          </tr>
          <tr>
            <td height="32" align="right" valign="top" class="textos"><span class="texto">Pisos :</span>&nbsp;</td>
            <td valign="top" class="Letras1"><input name="pisos" type="text" id="titulo_noticia5" value="<?php echo $rs["pisos"]; ?>" /></td>
          </tr>
          <tr>
            <td height="32" align="right" valign="top" class="textos"><span class="texto">Dormitorios :</span>&nbsp;</td>
            <td valign="top" class="Letras1"><input name="dormitorios" type="text" id="titulo_noticia4" value="<?php echo $rs["dormitorios"]; ?>" /></td>
          </tr>
          <tr>
            <td height="32" align="right" valign="top" class="textos"><span class="texto">Baños :</span>&nbsp;</td>
            <td valign="top" class="Letras1"><input name="banos" type="text" id="titulo_noticia3" value="<?php echo $rs["banos"]; ?>" /></td>
          </tr>
          <tr>
            <td width="31%" height="32" align="right" valign="top" class="textos"><span class="texto">Estacionamientos :</span>&nbsp;</td>
            <td width="69%" valign="top" class="Letras1"><input name="estacionamientos" type="text" id="estacionamientos" value="<?php echo $rs["estacionamientos"]; ?>" /></td>
          </tr>
          <tr>
            <td height="95" valign="top" class="textobox"><div align="right" class="titulo"><span class="textos"><span class="texto">Otros </span>:&nbsp;</span></div></td>
            <td valign="top" class="Letras1"><span class="textobox">
              <textarea name="otros" cols="40" rows="5" class="Letras1" id="contenido_pcurso"><?php echo $rs["otros"]; ?></textarea>
            </span></td>
          </tr>
          <tr>
            <td height="32" align="right" valign="top" class="textos"><span class="texto">Gastos Comunes :</span>&nbsp;</td>
            <td valign="top" class="Letras1"><input name="gastos_comunes" type="text" id="titulo_noticia13" value="<?php echo $rs["gastos_comunes"]; ?>" /></td>
          </tr>
          <tr>
            <td height="32" align="right" valign="top" class="textos"><span class="texto">Precio :</span>&nbsp;</td>
            <td valign="top" class="Letras1"><input name="precio" type="text" id="titulo_noticia12" value="<?php echo $rs["precio"]; ?>" /></td>
          </tr>
          <tr>
            <td height="95" valign="top" class="textobox"><div align="right" class="titulo"><span class="textos"><span class="texto">Descripcion Corta </span>:&nbsp;</span></div></td>
            <td valign="top" class="Letras1"><span class="textobox">
              <textarea name="descripcion_corta" cols="40" rows="5" class="Letras1" id="breve_noticia"><?php echo $rs["descripcion_corta"]; ?></textarea>
            </span></td>
          </tr>
          <tr>
            <td height="95" valign="top" class="textobox"><div align="right" class="titulo"><span class="textos"><span class="texto">Descripcion Larga</span>:&nbsp;</span></div></td>
            <td valign="top" class="Letras1"><span class="textobox">
              <textarea name="descripcion_larga" cols="40" rows="5" class="Letras1" id="descripcion_larga"><?php echo $rs["descripcion_larga"]; ?></textarea>
            </span></td>
          </tr>
          <tr>
            <td height="32" align="right" valign="top" class="textos"><span class="texto">Mapa :</span>&nbsp;</td>
            <td valign="top" class="Letras1"><input name="mapa" type="text" id="titulo_noticia14" value="<?php echo $rs["mapa"]; ?>" /></td>
          </tr>
          <tr>
            <td height="32" align="right" valign="top" class="textos"><span class="texto">Operacion :</span>&nbsp;</td>
            <td valign="top" class="Letras1"><select name="operacion" id="operacion">
              <option value="Venta">Venta</option>
              <option value="Arriendo">Arriendo</option>
            </select></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
<?php } ?>
</body>
</html>
<?php } ?>