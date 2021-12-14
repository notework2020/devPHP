<?php

        session_start();// подключение сессии

		$email = $_POST ['email'];
		$password = $_POST ['password'];

		$pdo = new PDO("mysql:host=localhost; dbname=les11", "root", "");
		$sqlEmail = "SELECT * FROM users WHERE email=:email";      // запрос к базе
		

		$statementEmail = $pdo -> prepare($sqlEmail); 
		

		$statementEmail -> execute(['email' => $email]);          // выполняем
		$taskEmail = $statementEmail -> fetch(PDO::FETCH_ASSOC);


		if (!empty($taskEmail)){                                  // если не пусто
			$message = "Этот эл адрес уже занят другим пользователем";                 // то выводим сообщение
			$_SESSION['danger'] = $message;                  // записываем это сообщение в сессию 

		header("Location: /index.php"); // возвращаем пользователя назад (на index.php)
		exit(); // выход из скрипта
        }

        $password = password_hash($password, PASSWORD_DEFAULT);
         
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";

	    $statement = $pdo -> prepare($sql);
        
	    $statement -> execute(['email' => $email, 'password' => $password ]);
	    
	    $message = "Данные введены корректно";                // то выводим сообщение
		$_SESSION['success'] = $message;                     // записываем это сообщение в сессию 

	    header("Location: /index.php"); // возвращаем пользователя на главный экран