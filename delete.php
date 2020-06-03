<?php
 unlink('Data/'.$_POST['id']);
 header('Location: /board.php');
?>