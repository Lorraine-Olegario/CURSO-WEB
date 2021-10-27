<?php
	include('./cnx.php');

	$id = 9;

	$sql1 = $conn->prepare("update clientes SET clinete_nome=?, clinete_sobrenome=? WHERE clinete_id=?");
	if($sql1->execute(array('LOLO-BELEU','BONITA',$id))){
		echo'Cliente executado com sucesso';
	}
	
?>