<?php 
	include "../../model/metodos.php";
	$obj = new crud();
	$query = "DELETE FROM categorias WHERE idcategorias = :id";

	if($obj -> eliminarRegistros($_POST['id'],$query))
		echo 1;
	else
		echo 0;


 ?>