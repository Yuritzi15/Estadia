<?php
	
	Class CtrlGuardarInv{

		static public function Guardar(){

			if (isset($_POST['txt_nombre']) || isset($_POST['txt_cantidadP']) || isset($_POST['txt_precioC']) || isset($_POST['txt_precioV'])){

				if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/',$_POST['txt_nombre'] || preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/',$_POST['txt_cantidadP']))){

					$tabla = "productos";
					$data = array("NombreP" => $_POST["txt_nombre"], "Cantidad" => $_POST["txt_cantidadP"],"PrecioC" => $_POST["txt_precioC"],
					"PrecioV" => $_POST["txt_precioV"]);

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
	}

 ?>