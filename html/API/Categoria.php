<?php
include_once 'BaseDatos.php';
class Categoria extends BaseDatos{
	function obtenerCategorias(){
		$query = $this->connect()->query('SELECT * FROM categorias');
		return $query;
	}
}
?>