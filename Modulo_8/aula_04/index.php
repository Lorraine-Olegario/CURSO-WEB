<?php
	include('./cnx.php');

	$id = 8;

	$sql1 = $conn->prepare("delete from clientes WHERE cliente_id=?");
	if($sql1->execute(array($id))){
		echo'Cliente deletado com sucesso';
	}
	
?>