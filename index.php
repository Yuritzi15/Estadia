<?php 
	require("controladores/ctrlusuario.php");
	require_once("controladores/ctrlprincipal.php");
	require 'modelos/MdlUsuario.php';
	$obj_principal = new Principal();
	$obj_principal -> ctrlprincipal();
 ?>