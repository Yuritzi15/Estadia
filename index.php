<?php 
	require_once("controladores/ctrlusuario.php");
	require_once("controladores/ctrlprincipal.php");
	require_once("controladores/ctrlguardarInv.php");
	require_once("controladores/ctrlPersonal.php");
	require_once('modelos/MdlUsuario.php');
	require_once('modelos/MdlGuardarP.php');
	require_once('modelos/MdlPersonal.php');
	$obj_principal = new Principal();
	$obj_principal -> ctrlprincipal();
 ?>