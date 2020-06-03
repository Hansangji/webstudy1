<?php
	file_put_contents('Data/'.$_POST['Title'], 
		$_POST['des']);
	header('Location: /board.php?id='.$_POST['Title']);
	//^ 지정된 php의 지정된 title로 팅겨버림.
?>