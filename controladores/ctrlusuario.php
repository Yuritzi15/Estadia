<?php
	class ControladorUsuario{
		public function ctrlLoginUsuario(){

		if(isset($_POST['txt_usu'])){
			if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["txt_usu"]) && preg_match('/^[a-zA-Z0-9]+$/',$_POST["txt_pass"])){

		    	$usuario = $_POST["txt_usu"];
		    	$contra = $_POST["txt_pass"];
		    	$result = ModeloUsuario::mdlBuscarUsuario($usuario);

		    	if(isset ($result["Usuario"]) && $result["Usuario"] == $_POST['txt_usu'] && isset($result["Contrasena"]) && $result["Contrasena"] == $_POST['txt_pass']){

		    		$_SESSION['login'] = 'activa';
		    		echo '<script>
		    			window.location= "inicio";
		    		  </script> ';
		    	}
		    	else{
		    		echo '<div class="alert alert-danger">Error en el Acceso</div>';
		    	}
			}
		}
	}
} 
 ?>