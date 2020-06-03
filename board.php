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
	<?php if(isset($_GET['id'])){ ?>
	<a href="update.php?id=<?php echo $_GET['id']; ?>">UPDATE</a>
	<form action="delete.php" method="post">
		<input type="hidden" name="id" value="<?php echo $_GET['id']?>">
		<input type="submit" value="delete">
	</form>

	<?php } ?>

	<h2>
		<?php
		print_title();
		?>
	</h2>
	<?php
	print_description();
	?>
</body>
</html>