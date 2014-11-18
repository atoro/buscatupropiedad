<?php
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
	
include("../Conexion.php");
	if ($_GET["action"]=="eliminar"){
		$insertar = "delete from noticias WHERE id  = '$_GET[id]' " ; 
		$sentencia=mysql_query($insertar,$conn)or die("Error al eliminar un link: ".mysql_error);
	}
	
 ?>
<html>
<head>
<meta charset=UTF-8 />
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script language="JavaScript">
<!--
<!-- 
function openWindow(url, name) {
popupWin = window.open(url, name, 'scrollbars,resizable,width=650,height=500')
}

// -->


function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>


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
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
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
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style>
<link href="../css/admin.css" rel="stylesheet" type="text/css">

<title>admin</title></head>

<body>
<div align="center">
  <p>
    <?php 
if ($_POST["Grabar"]){
	
		$insertar="INSERT INTO noticias (titulo_noticia,breve_noticia,completo_noticia ) ";
		$insertar.= "VALUES( '$_POST[titulo_noticia]','$_POST[breve_noticia]','$_POST[completo_noticia]')";
		$sentencia=mysql_query($insertar,$conn)or die("Error al grabar un curso: ".mysql_error);
	
}

?>
    
</p>
<form action="noticias.php" method="post" name="form1" id="form1" onSubmit="MM_validateForm('codigo','','R','nombre','','R','preciolista','','RisNum','preciomayorista','','RisNum','descripcion','','R');return document.MM_returnValue">
  <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="38" colspan="2"><div align="center" class="titulos"><strong>Noticias</strong></div></td>
      </tr>
      <tr>
        <td width="44%" height="32" align="right"><span class="titulos">Titulo</span><strong class="texto"> &nbsp; </strong></td>
        <td width="56%"><label for="titulo_noticia"></label>
        <input type="text" name="titulo_noticia" id="titulo_noticia"></td>
      </tr>
      <tr>
        <td height="92" align="right" valign="top" class="Letras1"><span class="titulos">Contenido</span><span class="texto"><strong> &nbsp; </strong></span></td>
        <td><span class="textobox">
          <textarea name="breve_noticia" cols="45" rows="5" class="Letras1" id="breve_noticia"></textarea>
        </span></td>
      </tr>
      <tr>
        <td height="92" align="right" valign="top" class="Letras1"><span class="titulos">Contenido Completo</span><span class="texto"><strong> &nbsp; </strong></span></td>
        <td><span class="textobox">
          <textarea name="completo_noticia" cols="45" rows="5" class="Letras1" id="completo_noticia"></textarea>
        </span></td>
      </tr>
      <tr>
        <td colspan="2" valign="top" class="Letras1"><div align="right" class="Letras1"></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
            <label>
            <input type="submit" name="Grabar" id="Grabar" value="Grabar" />
            </label>
        </div></td>
      </tr>
    </table>
</form>
<p>&nbsp;</p>
<p><a href="sesion.php" class="texto">Volver</a></p>
<p>
  <?php 
$listado = "select * from noticias";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
  ?>
</p>
<table width="86%" border="2" cellpadding="0" cellspacing="0" class="textotitulo2">
            <tr>
              <td height="265" class="margen"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="88%" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="31" class="Letras1"><a href="../imagenes/noticias/Upload_foto.php?id=<?php echo $rs["id"]; ?>" class="texto">Cambiar foto</a></td>
                      <td class="Letras1"><div align="left" class="Letras1"> 
                      

                      <span class="textobox"><a href="noticias.php?id=<?php echo $rs["id"] ?>&action=eliminar" onClick=" return confirm('Esta Seguro que desea eliminar?');"><img src="b_drop.png" width="16" height="16" border="0" /></a> &nbsp;</span><span class="texto">Eliminar</span></div></td>
                      <td class="textobox"><a href="javascript:openWindow('editarnoticias.php?id=<?php echo $rs["id"]; ?>')"javascript:openWindow('editarnoticias.php?id=<?php echo $rs["id"]; ?>')""><img src="Lapiz.png" width="16" height="16" border="0"></a>  &nbsp;<span class="textoinfo"><a href="javascript:openWindow('editarnoticias.php?id=<?php echo $rs["id"]; ?>')" class="texto">Editar</a></a></span></td>
                    </tr>
                    <tr>
                      <td width="32%" rowspan="4" valign="top" class="Letras1">
                      <img src="../imagenes/noticias/<?php echo $rs["id"]; ?>.jpg" width="200" height="200"></td>
                      <td height="29" valign="top" class="Letras1"><div align="right" class="textoinfo"><span class="texto">Titulo:</span> &nbsp; </div></td>
                      <td valign="top">
					  <span class="texto"><?php $texto = str_replace("\r\n","<br>",$rs["titulo_noticia"]); echo $texto ?>
                      </span>
                      </td>
                    </tr>
                    <tr>
                      <td height="34" align="right" valign="top" class="Letras1"><span class="textoinfo"><span class="texto">Contenido:</span> &nbsp; </span></td>
                      <td valign="top"><p class="texto">
                        <?php $texto = str_replace("\r\n","<br>",$rs["breve_noticia"]); echo $texto ?>
                      </p>
                      <p class="texto">&nbsp; </p></td>
                    </tr>
                    <tr>
                      <td width="14%" valign="top" class="Letras1"><div align="right" class="textoinfo"><span class="texto">C. Completo:</span> &nbsp;</div></td>
                      <td width="54%" valign="top"><span class="texto">
                        <?php $texto = str_replace("\r\n","<br>",$rs["completo_noticia"]); echo $texto ?>
                      </span></td>
                    </tr>
                    <tr>
                      <td colspan="2" align="right" valign="top" class="Letras1">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="23" colspan="3" align="center" valign="middle" class="Letras1">
                      
                      
                      <p class="titulos">&nbsp;</p>
                      </td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="19" valign="top">&nbsp;</td>
                </tr>
                </table>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="2" bgcolor="#333333"></td>
                  </tr>
                </table></td>
            </tr>
  </table>
  <?php } ?>
</div>
<div align="left"></div>
<div align="center"></div>
<p align="center"><a href="sesion.php" class="texto">Volver</a></p>
</body>
</html>
<?php } ?>