<?php
//echo phpinfo();
/**
 * 1. CREATE - создание таблицы, добавление данных (INSERT)
 * 2. READ - выборка данных (SELECT)
 * 3. UPDATE - обновление данных
 * 4. DELETE - удаление данных
 */

require 'services/App.php'; // Класс включает в себя DBConnect

//App::getTable(); // Метод выводит информационную таблицу

$pdo = App::PDO(); // Метод создаёт подключение и возвращает PDO
//var_dump($pdo);
//
//$arr = ['wer' => 'rew', 'sdf' => 'fds','xcv' => 'vcx',
//    'poi' => ['wer' => 'rew', 'sdf' => 'fds','xcv' => 'vcx']];
//print_r($arr);
//App::showArray($arr); // Более компактная замена print_r
//App::d($arr); // Всё без изменений)
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Работа с сотрудниками</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Работа с сотрудниками</h2>
    <?php
		/**
		 * создаем таблицу для хранения данных
         * id, first_name, last_name, login, email, password, avatar
		 */
		$query = "CREATE TABLE IF NOT EXISTS users(
                    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    first_name VARCHAR(255) NOT NULL,
                    last_name VARCHAR(255) NOT NULL,
                    login VARCHAR(255) NOT NULL,
                    email VARCHAR(255) NOT NULL,
                    password VARCHAR(255) NOT NULL,
                    avatar TEXT NOT NULL
                  )";
		$pdo->exec($query);

		/**
		 * 2. Если нажата ссылка <a href='?add'>Добавить нового сотрудника</a>
         * Показываем форму для заполнения данных о сотруднике
         * Нужно внести данные в столбцы:
         *  first_name, last_name, login, email, password, avatar
		 */
		if(isset($_GET['add'])){
		    echo <<<_HTML_
                <h2>Добавление нового сотрудника</h2>
                <form method="POST" enctype="multipart/form-data">
                
                    <label>Имя:</label>
                    <input type="text" name="first_name"><br>
                
                    <label>Фамилия:</label>
                    <input type="text" name="last_name"><br>
                    
                    <label>Логин:</label>
                    <input type="text" name="login"><br> 
                    
                    <label>Электронная почта:</label>
                    <input type="email" name="email"><br>   
                    
                    <label>Пароль:</label>
                    <input type="password" name="password"><br> 
                    
                    <label>Фотография профиля:</label><br>
                    <input type="file" name="avatar"><br>   
                    
                    <input type="submit" name="action" value="Создать">                                                
                </form>
_HTML_;
        }

		/**
		 * 3. Обработка формы добавления нового сотрудника
         *  Если нажата кнопка name="action" value="Создать"
		 */
        if(isset($_POST['action']) && $_POST['action'] === "Создать"){

            // получаем данные о картинке
            $avatar = $_FILES['avatar'];
            //App::showArray($avatar);

            // проверка на пустые поля, если НЕ пусто, обрабатываем данные
            if( !empty($_POST['first_name']) &&
                !empty($_POST['last_name']) &&
                !empty($_POST['login']) &&
                !empty($_POST['email']) &&
                !empty($_POST['password']) &&
                $avatar['size']
            ){// если Не пусто, обрабатываем

                // 1. Экранируем данные
                $first_name = htmlspecialchars(trim($_POST['first_name']));
                $last_name = htmlspecialchars(trim($_POST['last_name']));
                $login = htmlspecialchars(trim($_POST['login']));
                $email = htmlspecialchars(trim($_POST['email']));
                $password = htmlspecialchars(trim($_POST['password']));

                // 2. Обрабатываем картинку
                // 2.1 Формируем путь, куда положить картинку
                $avatar_path = 'images/'.time().'_'.$avatar['size'].'_'.$avatar['name']; // 'images/user.jpg'

                // 2.2 Перемещаем картинку по сформированному пути
                move_uploaded_file($avatar['tmp_name'], $avatar_path);

                // 3. Записываем данные в БД
                $query = "INSERT INTO users VALUES(?, ?, ?, ?, ?, ?, ?);";
                $result = $pdo->prepare($query);
                $result->execute([ null, $first_name, $last_name, $login, $email, $password, $avatar_path]);

                // 4. Перенаправляем админа на стартовую страницу, очищаем массивы $_POST, $_GET
                header('Location: /');
                die();

            }else{// если хоть одно поле не заполнено, ошибка
                echo "<h3 class='error-msg'>Вы не заполнили все поля</h3>";
            }
        }


		/**
		 * Если нажата кнопка name="action" value="Удалить"
		 */
		if(isset($_POST['action']) && $_POST['action'] === "Удалить"){

		    // 1. Получаем ID сотрудника
            $id = (int)$_POST['id'];

            // 2. Удаляем картинку
            // 2.1 Получаем ссылку на картинку
            $query = "SELECT avatar FROM users WHERE id=?;";
            $result = $pdo->prepare($query);
            $result->execute([$id]);
            $avatar_path = $result->fetch()['avatar'];

            // 2.2 Удаляем картинку
            if(file_exists($avatar_path)){ // если картинка есть
                unlink($avatar_path); // удаляем
            }

            // 3. Удаляем сотрудника
            $query = "DELETE FROM users WHERE id=?";
            $result = $pdo->prepare($query);
            $result->execute([$id]);

            // 4. Перезагружаем страницу
            header('Location: /');
            die();
        }


		/**
		 * Если нажата кнопка name="action" value="Изменить"
		 */
		if(isset($_POST['action']) && $_POST['action'] === "Изменить"){

		    // 1. Получаем ID
			$id = (int)$_POST['id'];

			// 2. Получаем данные для изменения по ID
            $query = "SELECT id, first_name, last_name, login, email, password
                      FROM users
                      WHERE id=?;";
            $result = $pdo->prepare($query);
            $result->execute([$id]);
            $user = $result->fetch();
            // App::showArray($user);

            // 3. Отображаем форму для изменения данных
			echo <<<_HTML_
                <h2>Изменение данных сотрудника $user[first_name] $user[last_name]</h2>
                <form method="POST" enctype="multipart/form-data">
                
                    <label>Имя:</label>
                    <input type="text" name="first_name" value="$user[first_name]"><br>
                
                    <label>Фамилия:</label>
                    <input type="text" name="last_name" value="$user[last_name]"><br>
                    
                    <label>Логин:</label>
                    <input type="text" name="login" value="$user[login]"><br> 
                    
                    <label>Электронная почта:</label>
                    <input type="email" name="email" value="$user[email]"><br>   
                    
                    <label>Пароль:</label>
                    <input type="text" name="password" value="$user[password]"><br> 
                    
                    <label>Фотография профиля:</label><br>
                    <input type="file" name="avatar"><br>   
                    
                    <input type="hidden" name="id" value="$user[id]">
                    
                    <input type="submit" name="action" value="Обновить">                                                
                </form>
_HTML_;
        }

		/**
		 * Если нажата кнопка name="action" value="Обновить"
         * Проверяем переданные данные и обновляем строку в бд
		 */
        if(isset($_POST['action']) && $_POST['action'] === "Обновить"){
			// App::showArray($_POST);

            // 1. Проверить на пустоту
            if(!empty($_POST['first_name']) &&
                !empty($_POST['last_name']) &&
                !empty($_POST['login']) &&
                !empty($_POST['email']) &&
                !empty($_POST['password'])
            ){ // если все поля заполнены
				// 2. Экранировать данные
                $first_name = htmlspecialchars(trim($_POST['first_name']));
                $last_name = htmlspecialchars(trim($_POST['last_name']));
                $login = htmlspecialchars(trim($_POST['login']));
                $email = htmlspecialchars(trim($_POST['email']));
                $password = htmlspecialchars(trim($_POST['password']));

                // 3. получаем ID
                $id = (int)$_POST['id'];

                /**
                 * 4. Работа с картинкой
                 */
                $avatar = $_FILES['avatar'];


                // 5 обновляем данные
                if((int)$avatar['size'] === 0){// Если новая картинка не приложена
                    // Обновляем в БД только текстовые данные
                    $query = "UPDATE users
                              SET first_name=?, last_name=?, login=?, email=?, password=?
                              WHERE id=?";
                    $result = $pdo->prepare($query);
                    $result->execute([$first_name, $last_name, $login, $email, $password, $id]);
                }else{ // Если новая картинка передана

                    // формируем путь к новой картинке
					$avatar_path = 'images/'.time().'_'.$avatar['size'].'_'.$avatar['name'];

					// загружаем новую картинку в папку images
                    move_uploaded_file($avatar['tmp_name'], $avatar_path);

                    // удаляем старую картинку
                    // 1. Получаем ссылку на старую картинку
                    $query = "SELECT avatar FROM users WHERE id=?;";
                    $result = $pdo->prepare($query);
                    $result->execute([$id]);
                    $old_avatar_path = $result->fetch()['avatar'];

                    // 2. Удаляем старую картинку
                    if(file_exists($old_avatar_path)){
                        unlink($old_avatar_path);
                    }

                    // записываем данные в базу включая ссылку на новую картинку
					$query = "UPDATE users
                              SET first_name=?, last_name=?, login=?, email=?, password=?, avatar=?
                              WHERE id=?";
                    $result = $pdo->prepare($query);
                    $result->execute([$first_name, $last_name, $login, $email, $password, $avatar_path, $id]);

                }

                // 6. Перезагружаем страницу
                header('Location: /');
                die();

            }else{ // если хоть одно текстовое поле не заполнено, ошибка
				echo "<h3 class='error-msg'>Вы не заполнили все поля</h3>";
            }

        }

		/**
		 * выводим список пользователей в документ
		 */
        $query = "SELECT id, first_name, last_name, login, email, password, avatar
                  FROM users
                  ORDER BY first_name";
        $result = $pdo->query($query);
		//App::showArray($result->fetchAll());

        echo "<h2>Список сотрудников:</h2>";

        // 1. Ссылка на добавление нового сотрудника
        echo "<a href='?add'>Добавить нового сотрудника</a>";

        // выводим список сотрудников
        echo "<div class='container'>";
            while($user = $result->fetch()){
                echo <<<_HTML_
                    <div class="box">
                        <img src="$user[avatar]" width="200" height="200" alt="$user[first_name] $user[last_name]">
                        <p>ID: <span>$user[id]</span></p>
                        <p>Имя: <span>$user[first_name]</span></p>
                        <p>Фамилия: <span>$user[last_name]</span></p>
                        <p>Логин: <span>$user[login]</span></p>
                        <p>Электронная почта: <span>$user[email]</span></p>
                        
                        <form method="POST">
                            <input type="hidden" name="id" value="$user[id]">
                        
                            <input type="submit" name="action" value="Изменить">
                            <input type="submit" name="action" value="Удалить">
                        </form>

                    </div>
_HTML_;
            }
        echo "</div>";
//                        <a href='?edit&id=$user[id]'>Изменить</a>
//                        <a href='?delete&id=$user[id]'>Удалить</a>
    ?>
</body>
</html>