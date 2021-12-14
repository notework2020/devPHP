<?php

		$text = $_POST ['text'];
		$pdo = new PDO("mysql:host=localhost; dbname=users", "root", "");
	    $sql = "INSERT INTO les9 (text) VALUES(:textText)";
	    $statement = $pdo -> prepare($sql);
	    $statement -> execute(['textText' => $text]);

	    header("Location: /index.php"); // возвращаем пользователя на главный экран