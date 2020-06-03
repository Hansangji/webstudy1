<?php
	require('lib/print.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php print_title();?></title>
</head>
<body>
	<h1><a href = "board.php">게시판</a></h1>
	<OL>
		<?php
		print_list();
		?>
	</OL>
	<a href="write.php">Write</a>
	<form action="write_process.php" method="post">
		<p>
			<input type="text" name="Title" 
			placeholder="제목">
		</p>
		<p>
			<textarea name="des" placeholder="내용"></textarea>
		</p>
		<p>
			<input type="submit" name="제출">
		</p>
	
	</form>
</body>
</html>