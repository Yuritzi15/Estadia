<?php

 class ModeloPersonal{

 	public function mdlGuardar($tabla,$data){
			$stn = conexion::conectar() -> prepare("INSERT INTO `personal` (`Nombre`, `ApePa`, `ApeMa`, `Contacto`) VALUES (:Nombre,:ApePa,:ApeMa,:Contacto);");
			$stn -> bindParam(":Nombre", $data["Nombre"], PDO::PARAM_STR);
			$stn -> bindParam(":ApePa", $data["ApePa"], PDO::PARAM_STR);
			$stn -> bindParam(":ApeMa", $data["ApeMa"], PDO::PARAM_STR);
			$stn -> bindParam(":Contacto", $data["Contacto"], PDO::PARAM_STR);

			if ($stn -> execute()){
				return "active";
			}else{
				return "error";
			}
		}

 	public function mdlMostrar(){
			$stm = conexion::conectar()->prepare("SELECT * FROM `personal`");

			$stm -> execute();
			return $stm -> fetchAll();
		}
 	
 } 
 ?>