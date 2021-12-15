<?php

 session_start();// подключение сессии

   
if( isset( $_POST['push'] ) )
    {
        $_SESSION['textOutput'] =  $_SESSION['textOutput'] + 1 ;
    }
 header("Location: /index.php"); // возвращаем пользователя назад (на index.php)