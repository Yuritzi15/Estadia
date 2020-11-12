<?php
	require_once("conexion.php"); 
	class ModeloUsuario{
		static public function mdlBuscarUsuario($usuario){
			$stm = conexion::conectar()->prepare("SELECT * FROM usuarios where Usuario = :usua");
			$stm-> bindParam(":usua",$usuario, PDO::PARAM_STR);
			$stm-> execute();
			return $stm-> fetch();
		}
	}
?>