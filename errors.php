<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel=stylesheet type="text/css" href="signup.css">
	<title>Document</title>
</head>
<body>
	<?php  if (count((array)$errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
		<?php echo $error . ", "?>
		<?php endforeach ?>
	</div>
	<?php  endif ?>
</body>
</html>


