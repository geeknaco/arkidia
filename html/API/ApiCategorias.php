<?php
	include_once 'Categoria.php';

	class ApiCategorias{
		function getAll(){
			$categoria = new Categoria();
			$categorias = array();
			$categorias["Items"] = array();

			$res = $categoria->obtenerCategorias();
			if ($res->rowCount()){
				while($row = $res->fetch(PDO::FETCH_ASSOC)){
					$item = array(
						'id_categoria'=> $row['id_categoria'],
						'descripcion'=> $row['descripcion'],
						'imagen_categoria'=> $row['imagen_categoria']
					);
					array_push($categorias, $item);					
				}
				echo json_encode($categorias);
			}else{
				echo json_encode(array('mensaje' => 'No hay elementos registrados'));
			}
		}
	}
?>