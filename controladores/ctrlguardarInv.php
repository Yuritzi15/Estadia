<?php
	
	Class CtrlGuardarInv{

		static public function Guardar(){

			if (isset($_POST['txt_nombre']) || isset($_POST['txt_cantidadP']) || isset($_POST['txt_precioC']) || isset($_POST['txt_precioV']) || isset($_POST['Cmb_cate'])){

				if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/',$_POST['txt_nombre'] || preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/',$_POST['txt_cantidadP']))){

					$tabla = "productos";
					$data = array("NombreP" => $_POST["txt_nombre"], "Cantidad" => $_POST["txt_cantidadP"],"PrecioC" => $_POST["txt_precioC"],
					"PrecioV" => $_POST["txt_precioV"], "Cate_id" => $_POST['Cmb_cate']);

					$res = ModeloGuardarP::mdlGuardar($tabla,$data);

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
			$res = ModeloGuardarP::mdlMostrar();
			return $res;
		}

		static public function Eliminar(){
			if(isset($_POST['txt_id'])){
				if(preg_match('/^[1-9][0-9]*$/',$_POST['txt_id'])){

					$tabla = "productos";
					$data = array("Id" => $_POST["txt_id"]);
					$res = ModeloGuardarP::mdlEliminar($tabla,$data);
					if($res = "active"){
						echo'<script>
								Swal.fire({
  								icon: "success",
  								title: "Se ha eliminado el registro exitosamente!",
  								showConfirmButton: true,
  								}).then(function(result){
								if (result.value){
									window.location = "inventario"
								}
							})
							</script>';

					}else{
						echo'<script>
								Swal.fire({
  								icon: "error",
  								title: "Error al aliminar el registro!",
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
									window.location = "eliminar"
								}
							})
							</script>';
				}
			}
		}

		static public function Cmb_Cate(){
			$res = ModeloGuardarP::mdlCmb_Cate();
			return $res;
		}

		static public function MostrarCP(){
			$res = ModeloGuardarP::mdlMostrarCP();
			return $res;
		}

		static public function GuardarCP(){
			if (isset($_POST['txt_nombre'])){
				if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/',$_POST['txt_nombre'])){
					$tabla = "categorias";
					$data = array("TipoPieza" => $_POST["txt_nombre"]);

					$res = ModeloGuardarP::mdlGuardarCP($tabla,$data);

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
									window.location = "adcatP";
								}
							})
							</script>';
				}
			}
		}

		static public function EliminarCP(){
			if(isset($_POST['txt_id'])){
				if(preg_match('/^[1-9][0-9]*$/',$_POST['txt_id'])){

					$tabla = "categoria";
					$data = array("Id" => $_POST["txt_id"]);
					$res = ModeloGuardarP::mdlEliminarCP($tabla,$data);
					if($res = "active"){
						echo'<script>
								Swal.fire({
  								icon: "success",
  								title: "Se ha eliminado el registro exitosamente!",
  								showConfirmButton: true,
  								}).then(function(result){
								if (result.value){
									window.location = "adcatP"
								}
							})
							</script>';

					}else{
						echo'<script>
								Swal.fire({
  								icon: "error",
  								title: "Error al aliminar el registro!",
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
									window.location = "elcatP"
								}
							})
							</script>';
				}
			}
		}
	}

 ?>
