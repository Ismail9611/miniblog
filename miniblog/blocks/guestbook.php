<h2>Добавить запись</h2>
<form name="guestbook" action="" method="post">
	<table>
		<tr>
			<td>Комментарий:</td>
			<td>
				<textarea type="text" name="comment"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="button_guestbook" value="Добавить">
			</td>
		</tr>

	</table>
</form>
<hr>
<h2>Записи в гостевой книге</h2>
<div>
	<?php
	if (!empty($_POST["button_guestbook"])) {
		if (empty($_SESSION)){
			$alert = "Чтобы добавить запись сначала войдите в свой аккаунт!";
			include("alert.php");
		} else {
			$comment = htmlspecialchars($_POST["comment"]);
			if (strlen($comment) < 3) $success = false;
			else $success = addGuestBookComment($comment);
			if (!$success) {
				$alert = "Ошибка при добавлении записи!";
				include "alert.php";
			}
		}
	} 

	$comments = getAllGuestBookComments();
	for ($i = 0; $i < count($comments); $i++){
		$name = $comments[$i]["name"];
		$comment = $comments[$i]["comment"];
		include "blocks/guestbook_comments.php";
	}
	?>
</div>