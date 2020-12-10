<?php
require_once("conexion.php"); 

	class ModeloGuardarP{

		public function mdlGuardar($tabla,$data){
			$stn = conexion::conectar() -> prepare("INSERT INTO $tabla(`NombreP`, `Cantidad`, `PrecioC`, `PrecioV`) VALUES (:NombreP, :Cantidad, :PrecioC, :PrecioV)");
			$stn -> bindParam(":NombreP", $data["NombreP"], PDO::PARAM_STR);
			$stn -> bindParam(":Cantidad", $data["Cantidad"], PDO::PARAM_STR);
			$stn -> bindParam(":PrecioC", $data["PrecioC"], PDO::PARAM_STR);
			$stn -> bindParam(":PrecioV", $data["PrecioV"], PDO::PARAM_STR);

			if ($stn -> execute()){
				return "active";
			}else{
				return "error";
			}
		}

		public function mdlMostrar(){
			$stm = conexion::conectar()->prepare("SELECT * FROM `productos`");

			$stm -> execute();
			return $stm -> fetchAll();
		}	
	}

 ?>