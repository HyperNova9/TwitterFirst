<?php
		
		$connect = mysqli_connect("127.0.0.1", "root", "", "Twitter");


		$text_query_insert = "INSERT INTO followings (name, login, img)
								VALUES ('{$_GET["names"]}', '{$_GET["logins"]}', '{$_GET["imgs"]}')";

		$query_insert = mysqli_query($connect, $text_query_insert); //запрос для ввода в таблицу

		header("Location: index.php");
	
?>

