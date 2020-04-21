<?php
class MiClase{
	private $elNombre;
	private $laEdad;
	function __construct($nombre, $edad){
		$this->elNombre = $nombre;
		$this->laEdad = $edad;
	}
	function saludar(){
		echo "Mi nombre es: ".$this->elNombre.
		" y tengo ".$this->laEdad." años";
	}
		
}	
$instancia = new MiClase("Pedro",25);
$instancia->saludar();
?>
