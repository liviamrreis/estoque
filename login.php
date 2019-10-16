<?php
session_start();
require_once 'usuarios.modelo.php';
$mensagem = '';
if (!empty($_SESSION['usuario']))
{
	// o usuario ja esta logado
	header("Location: index.php");
}
if (!empty($_POST['usuario']))
{
	if (usuarioExiste(
		$_POST['usuario'],
		$_POST['senha']
	)) {
		// logar o usuario
		$_SESSION['usuario'] = $_POST['usuario'];
		// redirecionar para index.php
		header('Location: index.php');
	} else {
		// usuario e senha incorretos
		$mensagem = 'usuario e senha incorretos';
	}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<h1>Faça seu login:</h1>
	<form method="post" action="login.php">
		<p> Usuário: <input type="text" name="usuario"> </p>
		<p>Senha: <input type="password" name="senha"></p>	

		<p><button>Enviar</button></p>	
	</form>

	<p><?= $mensagem ?></p>

</body>
</html>