<?php 
	require_once("controladores/ctrlusuario.php");
	require_once("controladores/ctrlprincipal.php");
	require_once('modelos/MdlUsuario.php');
	$obj_principal = new Principal();
	$obj_principal -> ctrlprincipal();
 ?>