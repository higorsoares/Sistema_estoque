<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST">
		Seu Numero:<br>
		<input type="text" name="number"><br><br>
		Sua Senha:<br>
		<input type="password" name="password"><br><br>
		<input type="submit" name="entrar">
	</form>
	<?php if(!empty($msg)): ?>
	<h2><?php echo $msg;  ?></h2>
	<?php endif ;?>
</body>
</html>