<?php
	class CtrlPersonal
	{
		static public function Guardar(){

			if (isset($_POST['txt_nombre']) || isset($_POST['txt_apepa']) || isset($_POST['txt_apema']) || isset($_POST['txt_contacto'])){

				if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/',$_POST['txt_nombre'] || preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/',$_POST['txt_apepa']))){

					$tabla = "personal";
					$data = array("Nombre" => $_POST["txt_nombre"], "ApePa" => $_POST["txt_apepa"],"ApeMa" => $_POST["txt_apepa"],
					"Contacto" => $_POST["txt_contacto"], "puesto_id" => $_POST["cmb_Puesto"]);

					$res = ModeloPersonal::mdlGuardar($tabla,$data);

					if($res = "active"){
					
					echo'<script>
								Swal.fire({
  								icon: "success",
  								title: "Guardado exitoso!",
  								showConfirmButton: true,
  							})
					</script>';}
				}else{
					echo'<script>
					swal.fire({
								icon: "error",
								title: "No se permite carácteres especiales o hay datos vacíos!",
								showConfirmButton: true,
								confirmButtonText: "Cerrar"

							}).then(function(result){
								if (result.value){
									window.location = "agregar";
								}
							})
							</script>';
				}
			}
		}
		static public function Mostrar(){
			$res = ModeloPersonal::mdlMostrar();
			return $res;
		}

		static public function Cmb_puesto(){
			$res = ModeloPersonal::mdlMostrarCMBP();
			return $res;
		}

		static public function Eliminar(){
			if(isset($_POST['txt_id'])){
				if(preg_match('/^[1-9][0-9]*$/',$_POST['txt_id'])){

					$tabla = "productos";
					$data = array("Id" => $_POST["txt_id"]);
					$res = ModeloPersonal::mdlEliminar($tabla,$data);
					if($res = "active"){
						echo'<script>
								Swal.fire({
  								icon: "success",
  								title: "Se ha eliminado al empleado correctamente!",
  								showConfirmButton: true,
  								}).then(function(result){
								if (result.value){
									window.location = "VerPersonal"
								}
							})
							</script>';

					}else{
						echo'<script>
								Swal.fire({
  								icon: "error",
  								title: "Error al aliminar!",
  								showConfirmButton: true,
  								})
							</script>';
					}
				}else{
					echo'<script>
					swal.fire({
								icon: "error",
								title: "Solo se permite números o hay datos vacíos!",
								showConfirmButton: true,
								confirmButtonText: "Cerrar"

							}).then(function(result){
								if (result.value){
									window.location = "EliminarPersonal"
								}
							})
							</script>';
				}
			}
		}

		static public function MostrarCPU(){
			$res = ModeloPersonal::mdlMostrarCPU();
			return $res;
		}

		static public function GuardarCPU(){
			if (isset($_POST['txt_nombre'])){
				if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/',$_POST['txt_nombre'])){
					$tabla = "categorias";
					$data = array("Puesto" => $_POST["txt_nombre"]);

					$res = ModeloPersonal::mdlGuardarCPU($tabla,$data);

					if($res = "active"){
					
					echo'<script>
								Swal.fire({
  								icon: "success",
  								title: "Guardado exitoso!",
  								showConfirmButton: true,
  								window.location = "adcatCPU";
  							})
					</script>';}
				}else{
					echo'<script>
					swal.fire({
								icon: "error",
								title: "No se permite carácteres especiales o hay datos vacíos!",
								showConfirmButton: true,
								confirmButtonText: "Cerrar"

							}).then(function(result){
								if (result.value){
									window.location = "adcatCPU";
								}
							})
							</script>';
				}
			}
		}
		static public function EliminarCPU(){
			if(isset($_POST['txt_id'])){
				if(preg_match('/^[1-9][0-9]*$/',$_POST['txt_id'])){

					$tabla = "puestos";
					$data = array("Id" => $_POST["txt_id"]);
					$res = ModeloPersonal::mdlEliminarCPU($tabla,$data);
					if($res = "active"){
						echo'<script>
								Swal.fire({
  								icon: "success",
  								title: "Se ha eliminado el puesto correctamente!",
  								showConfirmButton: true,
  								}).then(function(result){
								if (result.value){
									window.location = "adcatCPU"
								}
							})
							</script>';

					}else{
						echo'<script>
								Swal.fire({
  								icon: "error",
  								title: "Error al aliminar!",
  								showConfirmButton: true,
  								})
							</script>';
					}
				}else{
					echo'<script>
					swal.fire({
								icon: "error",
								title: "Solo se permite números o hay datos vacíos!",
								showConfirmButton: true,
								confirmButtonText: "Cerrar"

							}).then(function(result){
								if (result.value){
									window.location = "elcatCPU"
								}
							})
							</script>';
				}
			}
		}
		
	}

 ?>