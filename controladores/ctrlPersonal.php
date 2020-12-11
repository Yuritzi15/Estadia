<?php
	class CtrlPersonal
	{
		static public function Guardar(){

			if (isset($_POST['txt_nombre']) || isset($_POST['txt_apepa']) || isset($_POST['txt_apema']) || isset($_POST['txt_contacto'])){

				if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/',$_POST['txt_nombre'] || preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/',$_POST['txt_apepa']))){

					$tabla = "personal";
					$data = array("Nombre" => $_POST["txt_nombre"], "ApePa" => $_POST["txt_apepa"],"ApeMa" => $_POST["txt_apepa"],
					"Contacto" => $_POST["txt_contacto"]);

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
	}

 ?>