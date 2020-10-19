<?php
		
		$connect = mysqli_connect("127.0.0.1", "root", "", "Twitter");


		$text_query_insert = "INSERT INTO twits (author, twit)
								VALUES ('{$_GET["author"]}', '{$_GET["twit"]}')";

		$query_insert = mysqli_query($connect, $text_query_insert); //запрос для ввода в таблицу

		header("Location: index.php");
	
	?>

