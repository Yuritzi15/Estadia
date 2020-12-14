<?php
require_once("conexion.php"); 

	class ModeloGuardarP{

		public function mdlGuardar($tabla,$data){
			$stn = conexion::conectar() -> prepare("INSERT INTO $tabla(`NombreP`, `Cantidad`, `PrecioC`, `PrecioV`,`Cate_id`) VALUES (:NombreP, :Cantidad, :PrecioC, :PrecioV, :Cate_id)");
			$stn -> bindParam(":NombreP", $data["NombreP"], PDO::PARAM_STR);
			$stn -> bindParam(":Cantidad", $data["Cantidad"], PDO::PARAM_STR);
			$stn -> bindParam(":PrecioC", $data["PrecioC"], PDO::PARAM_STR);
			$stn -> bindParam(":PrecioV", $data["PrecioV"], PDO::PARAM_STR);
			$stn -> bindParam(":Cate_id", $data["Cate_id"], PDO::PARAM_STR);

			if ($stn -> execute()){
				return "active";
			}else{
				return "error";
			}
		}

		public function mdlMostrar(){
			$stm = conexion::conectar()->prepare("SELECT p.Id, p.NombreP, p.Cantidad, p.PrecioC, p.PrecioV, c.TipoPieza, p.FechaCrea FROM productos p INNER JOIN categoria c ON (p.Cate_id = c.Id)");

			$stm -> execute();
			return $stm -> fetchAll();
		}

		public function mdlCmb_Cate(){
			$stm = conexion::conectar()->prepare("SELECT * FROM `categoria`");
			$stm -> execute();
			return $stm -> fetchAll();
		}

		public function mdlEliminar($tabla,$data){
			$stm = conexion::conectar()->prepare("DELETE FROM `productos` WHERE `productos`.`Id` = :Id");
			$stm -> bindParam(":Id", $data["Id"], PDO::PARAM_STR);

			if ($stm -> execute()) {
				return "active";
			}else{
				return "error";
			}
		}

		public function mdlMostrarCP(){
			$stm = conexion::conectar()->prepare("SELECT * FROM `categoria`");

			$stm -> execute();
			return $stm -> fetchAll();
		}

		public function mdlEliminarCP($tabla,$data){
			$stm = conexion::conectar()->prepare("DELETE FROM `categoria` WHERE `categoria`.`Id` = :Id");
			$stm -> bindParam(":Id", $data["Id"], PDO::PARAM_STR);

			if ($stm -> execute()) {
				return "active";
			}else{
				return "error";
			}
		}

		public function mdlGuardarCP($tabla,$data){
			$stn = conexion::conectar() -> prepare("INSERT INTO `categoria` (`TipoPieza`) VALUES (:TipoPieza)");
			$stn -> bindParam(":TipoPieza", $data["TipoPieza"], PDO::PARAM_STR);
			if ($stn -> execute()){
				return "active";
			}else{
				return "error";
			}
		}

	}

 ?>

