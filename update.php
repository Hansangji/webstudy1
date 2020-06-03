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
	<a href="write.php">CREATE</a>
	<?php if(isset($_GET['id'])){ ?>
	<a href="update.php?id=<?php echo $_GET['id']; ?> ">UPDATE</a>
	<?php } ?>
	</form>

	<form action="update_process.php" method="post">
		<input type="hidden" name="old_title" value="<?=$_GET['id']?>">
		<p>
			<input type="text" name="Title" 
			value= "<?php print_title(); ?>">
		</p>
		<p>
			<textarea name="des" placeholder="내용"><?php
			print_description();?></textarea>
		</p>
		<p>
			<input type="submit" name="제출">
		</p>
	
	</form>
</body>
</html>