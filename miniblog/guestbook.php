<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>
<?php 
	require_once "start.php";
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Гостевая книга</title>
	<meta  http-equiv="Content-type" content="text/html" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	<link rel="shortcut icon" type="image/x-icon" href="images/icon.ico">
</head>
<body>
	<table id="main">
		<?php
			require_once "blocks/top.php";
		?>
		<tr>
			<td colspan="2">
				<table cellspacing="0" cellpadding="0" id="content">			
					<tr>
						<td>
							<?php 
								require_once "blocks/guestbook.php";
							?>
						</td>
						<td id="banners_240">
							<?php 
								require_once "blocks/banners_240.php";
						    ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<?php 
			require_once "blocks/footer.php"; 
		 ?>
	</table>
</body>
</html>