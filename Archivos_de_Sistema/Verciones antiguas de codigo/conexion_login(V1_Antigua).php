<?php

class conexion{
	private $host='localhost';//declara el servidor de phpmyadmin
	private $usuario='root';//declara un usuario de phpmyadmin
	private $password='';//declara la contra de phpmyadmin
	private	$base='bdcm';//declara la base para que se quiere conectar de phpmyadmin
	public $sentencia;//para enviar las ordenes a sql
	private $lineas=array();//este recie lña info de la base de datos
	private $conexion;//para hacer la conexion

	private function abrir_conexion(){
		$this->conexion = new mysqli($this->host,$this->usuario,$this->password,$this->base);
	}

	private function cerrar_conexion(){
		$this->conexion->close();
	}

	public function ejecutar_sentencia(){
		$this->abrir_conexion();
		$bandera=$this->conexion->query($this->sentencia);
		$this->cerrar_conexion();
		return $bandera;
	}
}



?>