<?php
 class conexion{
 	public function conectar(){
 		$con = new PDO("mysql:host=localhost;dbname=concretos","root","");

 		$con->exec("set name utf8");

 		return $con;
 	}
 }

?>