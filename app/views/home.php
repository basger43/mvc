<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($allPost as $val) { ?>
		<h3><?php echo $val['title'] ?></h3>
	<?php } ?>
</body>
</html>