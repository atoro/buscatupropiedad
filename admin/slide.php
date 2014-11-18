<?php
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
include("../Conexion.php");
if ($_POST["Grabar"]){
	$editar="update  slide set slide1  = '$_POST[slide1]',texto_slide1  = '$_POST[texto_slide1]',slide2  = '$_POST[slide2]',texto_slide2  = '$_POST[texto_slide2]',slide3  = '$_POST[slide3]',texto_slide3  = '$_POST[texto_slide3]'
	";
	$sentencia = mysql_query($editar,$conn)or die("Error al grabar: ".mysql_error);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url();
}
-->
</style>
<link href="Span/Letras.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style>
<link href="../css/admin.css" rel="stylesheet" type="text/css">
<title>Admin</title>

</head>

<body>
  <?php
	$listado = "select * from slide";
	$sentencia = mysql_query($listado,$conn);
	while($rs=mysql_fetch_array($sentencia,$mibase)){
		$slide1 = $rs["slide1"];
		$texto_slide1 = $rs["texto_slide1"];
		$slide2 = $rs["slide2"];
		$texto_slide2 = $rs["texto_slide2"];
		$slide3 = $rs["slide3"];
		$texto_slide3 = $rs["texto_slide3"];
	}
	?>
  <form action="slide.php" method="post" name="form1" id="form1">
    
    <table width="45%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td colspan="3"><div align="center" class="titulos"><strong>Slide</strong></div></td>
      </tr>
      <tr>
        <td height="17" colspan="3"></td>
      </tr>
      <tr>
        <td height="30" align="right" valign="top" class="texto"><p>slide 1 : &nbsp;</p></td>
        <td valign="top"><input name="slide1" type="text" class="textopreguntas" id="titulo_tasaciones5" value="<?php echo $slide1; ?> " size="50"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="29%" height="30" align="right" valign="top" class="texto"><p>texto slide 1 : &nbsp;</p></td>
        <td width="65%" valign="top"><input name="texto_slide1" type="text" class="textopreguntas" id="texto_slide1" value="<?php echo $texto_slide1; ?> " size="50"></td>
        <td width="6%">&nbsp;</td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p><a href="../imagenes/slide/Upload_foto.php?id=1" class="texto">Cambiar Imagen :</a> &nbsp;</p></td>
        <td valign="top"><img src="../imagenes/slide/1.jpg" width="400" height="200"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="61" colspan="2" align="right" valign="top" class="texto"><p>&nbsp;</p></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="30" align="right" valign="top" class="texto"><p>slide 2 : &nbsp;</p></td>
        <td valign="top"><input name="slide2" type="text" class="textopreguntas" id="titulo_tasaciones6" value="<?php echo $slide2; ?> " size="50"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="30" align="right" valign="top" class="texto"><p>texto slide 2 : &nbsp;</p></td>
        <td valign="top"><input name="texto_slide2" type="text" class="textopreguntas" id="texto_slide2" value="<?php echo $texto_slide2; ?> " size="50"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p><a href="../imagenes/slide/Upload_foto.php?id=2" class="texto">Cambiar Imagen : </a>&nbsp;</p></td>
        <td valign="top"><img src="../imagenes/slide/2.jpg" width="400" height="200"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="63" colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" align="right" valign="top" class="texto"><p>slide 3 : &nbsp;</p></td>
        <td valign="top"><input name="slide3" type="text" class="textopreguntas" id="titulo_tasaciones7" value="<?php echo $slide3; ?> " size="50"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="30" align="right" valign="top" class="texto"><p>texto slide 3 : &nbsp;</p></td>
        <td valign="top"><input name="texto_slide3" type="text" class="textopreguntas" id="titulo_tasaciones4" value="<?php echo $texto_slide3; ?> " size="50"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p><a href="../imagenes/slide/Upload_foto.php?id=3" class="texto">Cambiar Imagen :</a> &nbsp;</p></td>
        <td valign="top"><img src="../imagenes/slide/3.jpg" width="400" height="200"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="49" colspan="3"><div align="center">
          <label>
          <input name="Grabar" type="submit" class="textobox3" id="Grabar" value="Grabar" />
          </label>
        </div></td>
      </tr>
    </table>
    <p align="center"><a href="sesion.php" class="texto">Volver</a></p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
</form>
</body>
</html>
<?php } ?>