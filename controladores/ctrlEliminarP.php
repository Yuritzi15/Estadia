<?php

	class EliminarP
	{

		public function mdlEliminar($id){
			$stm = conexion::conectar()->prepare("DELETE FROM `productos` WHERE `productos`.`Id` = :Id");
			$stm -> bindParam(":Id", $data["Id"], PDO::PARAM_STR);

			if ($stm -> execute()) {
				echo '<script> 
						Swal.fire({
						icon: "success",
  						title: "Oops...",
  						text: "Something went wrong!"}) 
  						window.location = "eliminar"})
					 </script>';

			}else{
				echo '<script> 
						Swal.fire({
						icon: "success",
  						title: "Oops...",
  						text: "Something went wrong!",
  						window.location = "eliminar"})
					 </script>';
			}
		}	
	}
 ?>