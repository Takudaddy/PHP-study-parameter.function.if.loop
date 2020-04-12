<?php
unlink('data/'.$_POST['id']);
header('Location: indexing.php');
?>
