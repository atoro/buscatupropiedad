<?php
		$conn=mysql_connect("localhost","buscatup_user","ANi~kX2CZJC4"); // ESTABLECER CONEXION
		if(!$conn){
			die("error al conectarse al motor");
		}
		$mibase = mysql_select_db("buscatup_bd",$conn); //SELECCION BD
		if(!$mibase){
			die("error al selecionar la base de datos");
		}
		
?>