<?php

// удаляем куки
setcookie("firstName", '', time() - 60 );
setcookie("lastName", '', time() - 60 );

// перенаправляем на главную
header('Location: /');
exit;