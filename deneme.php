<!DOCTYPE html>
<html>
<head>
	<title>deneme</title>
</head>
<body>
	<form action="" method="post">
Seç <input checked name="check1" type="checkbox" name="check1">
<button type="submit" name="gonder">GÖNDER</button>

<form>

	<?php if (isset($_POST['gonder'])) {
		echo $_POST['check1'];
	} ?>
</body>
</html>