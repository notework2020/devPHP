<?php

        session_start();// подключение сессии

		$text = $_POST ['text'];
		$pdo = new PDO("mysql:host=localhost; dbname=users", "root", "");

		$sql = "SELECT * FROM les9 WHERE text=:textText";      // запрос к базе
		$statement = $pdo -> prepare($sql);                 // подготовили
		$statement -> execute(['textText' => $text]);          // выполняем
		$task = $statement -> fetch(PDO::FETCH_ASSOC);     // получаем результат

		if (!empty($task)){                                  // если не пусто
			$message = "Такое значение есть. Введите другое";                 // то выводим сообщение
			$_SESSION['danger'] = $message;                  // записываем это сообщение в сессию 

		header("Location: /index.php"); // возвращаем пользователя назад (на index.php)
		exit(); // выход из скрипта
        }


	    $sql = "INSERT INTO les9 (text) VALUES (:textText)";
	    $statement = $pdo -> prepare($sql);
	    $statement -> execute(['textText' => $text]);
	    $message = "Данные введены корректно";                // то выводим сообщение
		$_SESSION['success'] = $message;                     // записываем это сообщение в сессию 



	    header("Location: /index.php"); // возвращаем пользователя на главный экран