<?php
session_start();
include("../Conexion.php");
if($_GET["fun"]=="cerrar"){
	unset($_SESSION["$nusuario"]);
}
if($_POST["Entrar"]){	
	$password = md5($_POST["password_txt"]);
	$listado = "select * from 	usuario where usuario = '$_POST[nusuario_txt]' and password  = '$password'  ";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$_SESSION["$nusuario"] = $rs["usuario"];
	} else {
		echo "Usuario o password no corresponde";
	}
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Administrador</title>

<link href="../css/admin.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p align="center">&nbsp;</p>
<div align="center">
  
  <p><span class="admin">
    <?php if ($_SESSION["$nusuario"] == "") { ?>
  </span><span class="texto"><strong>Inicie sesion para modificar el contenido</strong></span></p>
</div>
<form id="form1" name="form1" method="post" action="sesion.php">
  <div align="center">
    <table width="201" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="80" class="texto" >Usuario  </td>
        <td width="121" align="right"><label>
          <input name="nusuario_txt" type="text" class="textobox"  id="nusuario_txt" size="15" />
        </label></td>
      </tr>
      <tr>
        <td height="12" colspan="2" ></td>
      </tr>
      <tr>
        <td class="texto" >Password   </td>
        <td align="right"><input name="password_txt" type="password" class="textobox"  id="password_txt" size="15" /></td>
      </tr>
      <tr>
        <td height="15" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <label>
            <input name="Entrar" type="submit" class="boton_entrar" id="Entrar" value="Entrar" />
            </label>
        </div></td>
      </tr>
    </table>
  </div>
</form>
<div align="center">
  <p>
    <?php } else  { ?>
  </p>
  <p>&nbsp;</p>
  <p class="titulos"><strong><span class="titulo">Usuario</span></strong><span class="admin">: </span><span class="texto"><?php echo $_SESSION["$nusuario"]; ?></span></p>
  <table width="287" border="1"  cellpadding="0">
    <tr>
      <td height="296"><table width="283" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="283" height="49" align="center" bgcolor="#414141" class="titulos2" style="color:white;">MENU PRINCIPAL</td>
        </tr>
        
        <tr>
          <td height="5" align="left" bgcolor="#8a8a8a"></td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF"  class="logo" style="color:white;"><a href="slide.php" class="texto">Slide</a></td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF"  class="logo" style="color:white;"><a href="destacados.php" class="texto">Destacados</a></td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF"  class="logo" style="color:white;"><span class="texto"><span class="logo" style="color:white;"><a href="tasaciones.php" class="texto">Tasaciones</a></span></span></td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF"  class="texto" ><a href="ventayarriendo.php" class="texto">Venta y Arriendo</a></td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF"  class="logo" ><a href="noticias.php" class="texto">Noticias</a></td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF"  class="logo" ><a href="pie.php" class="texto">Pie</a></td>
        </tr>
        <tr>
          <td height="11" align="center" bgcolor="#f1f1f1" class="textoadmin"></td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#f1f1f1"><strong><a href="cambiopassword.php" class="texto" >Cambio de password</a></strong></td>
        </tr>
        <tr>
          <td height="29" align="center" bgcolor="#F1F1F1"><a href="sesion.php?fun=cerrar" class="texto" ><span>Cerrar sesion</span></span></a></td>
        </tr>
        
      </table>
 
  </table>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<?php } ?>
</body>
</html>
