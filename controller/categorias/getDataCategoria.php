<?php 
	include "../../model/metodos.php";
	$obj = new crud();
	$query = "SELECT * FROM categorias WHERE idcategorias = :id";

	$rs = $obj->obtenerDatos($_POST['id'],$query);

	echo json_encode($rs);


 ?>