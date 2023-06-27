<?php
session_start();// начинаем сессию


// удаляем данные сессии
//unset($_SESSION['firstName'], $_SESSION['lastName']);
session_unset();

// перенаправляем на главную
header('Location: /');
exit;