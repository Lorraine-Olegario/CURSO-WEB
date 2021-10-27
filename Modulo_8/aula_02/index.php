<?php
	include('./cnx.php');

	if(isset($_POST['acao'])){
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$date = date('Y-m-d H:i');

		//$sql = $conn->prepare("INSERT INTO clientes values (null, '$date','$name','$surname')");
		//$sql->execute();

		$sql = $conn->prepare("INSERT INTO clientes values (null, ?,?,?)");
		$sql->execute(array($date,$name,$surname));
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro no banco</title>
</head>
<body>
	<form method="POST">
		<label for="name">Name</label>
		<input type="text" name='name' required><br><br>
		<label for="surname">Surname</label>
		<input type="text" name='surname' required><br><br>
		<input type="submit" name='acao' value='Cadastrar'>
	</form>
</body>
</html>