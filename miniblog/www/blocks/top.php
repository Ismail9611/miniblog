<tr>
	<td colspan="2" id="header">
		<h1>Сайт об Автомобилях</h1>
		<p>
			<img src="images/header.png" alt="Шапка">
		</p>
	</td>
</tr>

<tr>
	<td colspan="2">
		<hr>
	</td>
</tr>

<tr>
	<td>
		<table id="topmenu">
			<tr>
				<td>
					<a href="index.php">Главная</a>
				</td>
				<td>
					<a href="reg.php">Регистрация</a>
				</td>
				<td>
					<a href="articles.php">Статьи</a>
				</td>
				<td>
					<a href="guestbook.php">Записи</a>
				</td>
			</tr>
		</table>
	</td>
	<td class="right">
		<?php 
			if (checkUser($_SESSION["email"], $_SESSION["password"])) {
				require_once "blocks/user_panel.php";
			} else {
				require_once "blocks/auth_form.php";
			}
	    ?>
	</td>
</tr>
<tr>
	<td colspan="2">
		<hr>
	</td>
</tr>