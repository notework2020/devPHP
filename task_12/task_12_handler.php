<?php

        session_start();// подключение сессии

        $inpText = $_POST ['inpText'];

        $message = $inpText;

        $_SESSION['textOutput'] = $message;

        header("Location: /index.php"); // возвращаем пользователя назад (на index.php)