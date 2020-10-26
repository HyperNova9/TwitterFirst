<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "Twitter");
	$text_query = "DELETE FROM followings WHERE id = '4' ";
	$query = mysqli_query($connect, $text_query)

 ?>