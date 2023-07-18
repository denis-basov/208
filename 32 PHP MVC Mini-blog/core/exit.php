<?php
// прекращение сессии, выход с сайта
session_start();

session_unset();

header('Location: /');