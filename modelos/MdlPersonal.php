<?php

 class ModeloPersonal{

 	public function mdlGuardar($tabla,$data){
			$stn = conexion::conectar() -> prepare("INSERT INTO `personal` (`Nombre`, `ApePa`, `ApeMa`, `Contacto`,`puesto_id`) VALUES (:Nombre,:ApePa,:ApeMa,:Contacto,:puesto_id)");
			$stn -> bindParam(":Nombre", $data["Nombre"], PDO::PARAM_STR);
			$stn -> bindParam(":ApePa", $data["ApePa"], PDO::PARAM_STR);
			$stn -> bindParam(":ApeMa", $data["ApeMa"], PDO::PARAM_STR);
			$stn -> bindParam(":Contacto", $data["Contacto"], PDO::PARAM_STR);
			$stn -> bindParam(":puesto_id", $data["puesto_id"], PDO::PARAM_STR);

			if ($stn -> execute()){
				return "active";
			}else{
				return "error";
			}
		}

 	public function mdlMostrar(){
			$stm = conexion::conectar()->prepare("SELECT personal.Id, personal.Nombre, personal.ApePa, personal.ApeMa, personal.Contacto, puestos.Puesto, personal.FechaCreacion,personal.Foto FROM `personal` INNER JOIN `puestos` ON (personal.`puesto_id` = puestos.`Id`)");

			$stm -> execute();
			return $stm -> fetchAll();
		}

	public function mdlMostrarCMBP(){
		$stm = conexion::conectar()->prepare("SELECT * FROM `puestos`");

			$stm -> execute();
			return $stm -> fetchAll();
	}

	public function mdlEliminar($tabla,$data){
			$stm = conexion::conectar()->prepare("DELETE FROM `personal` WHERE `personal`.`Id` = :Id");
			$stm -> bindParam(":Id", $data["Id"], PDO::PARAM_STR);

			if ($stm -> execute()) {
				return "active";
			}else{
				return "error";
			}
		}
 } 
 ?>