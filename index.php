<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
	<h1>WEB - STUDY</h1>
	<OL>
		<li><a href = "index.php?id=HTML">HTML</a></li>
		<li><a href = "index.php?id=CSS">CSS</a></li>
		<li><a href = "index.php?id=JavaScript">JavaScript</a></li>
	</OL>
	<?php
	 echo $_GET['id'];
	 ?>
</body>
</html>