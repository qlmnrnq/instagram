<!DOCTYPE html>
<html>
	<head>
		<title>instagram</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<form action="reg.php" method="POST">
			<div>
				<input type="text" name="email" placeholder="Эл.адрес">
				<input type="text" name="name" placeholder="Имя и фамилия">
				<input type="text" name="nickname" placeholder="Имя пользователя">
				<input type="password" name="password" placeholder="Пароль">
				<button>Регистрация</button>
				<a href="login.php">Войти</a>
			</div>
		</form>
	</body>
</html>