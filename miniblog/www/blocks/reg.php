<?php 
if (!empty($_POST["button_reg"])) {
	$email = htmlspecialchars($_POST["email"]);
	$password1 = htmlspecialchars($_POST["password1"]);
	$password2 = htmlspecialchars($_POST["password2"]);
	if (strlen($email) < 3) $success = false;
	elseif (strlen($password1) < 3) $success = false;
	elseif ($password1 != $password2) $success = false;
	else $success = addUser($email, md5($password1));
	if(!$success) $alert = "Ошибка при регистрации!";
	else $alert = "Регистрация прошла успешно!";
	include "alert.php";
}
?>
<h2>Регистрация</h2>
<form name="reg" action="" method="post">
	<table>
		<tr>
			<td>E-mail:</td>
			<td>
				<input type="text" name="email">
			</td>
		</tr>
		<tr>
			<td>Пароль:</td>
			<td>
				<input type="password" name="password1">
			</td>
		</tr>
		<tr>
			<td>Потвердите пароль:</td>
			<td>
				<input type="password" name="password2">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="button_reg" value="Зарегистрироваться">
			</td>
		</tr>

	</table>
</form>
<hr>