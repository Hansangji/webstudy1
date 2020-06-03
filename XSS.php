<!DOCTYPE html>
<html>
<head>
	<title>XSS</title>
</head>
<body>
	<H1>Cross site scripting</H1>
	<?php
	echo htmlspecialchars('<script>alert("babo");</script>');
	?>
</body>
</html>