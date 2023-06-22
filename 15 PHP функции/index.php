<?php

// функции
function d($value){
	echo '<pre>';
	print_r($value);
	echo '</pre>';
}

//function sayHello(){
//    echo "<h3>Hello</h3>";
//}
//
//sayHello();

//function sayHello($userName){
//	echo "<h3>Hello, $userName</h3>";
//}
//sayHello('Bob');

//function sayHello($userName){
//	$str = "<h3>Hello, $userName</h3>";
//	echo $str;
//}
//sayHello('Bob');
//echo $str;


//$userName = 'Bob';
//function sayHello(){
//	echo "<h3>Hello, $userName</h3>";
//}
//sayHello();


//$userName = 'Bob';
//function sayHello(){
//	echo "<h3>Hello, $GLOBALS[userName]</h3>";
//}
//sayHello();
////d($GLOBALS);


//$userName = 'Sarah';
//function sayHello($name = 'User'){
//	echo "<h3>Hello, $name</h3>";
//}
//sayHello($userName);
//sayHello();

// $user = ['firstName' => 'Bob', 'lastName' => 'Ivanov', 'age' => 22];
// напишите функцию, которая будет выводить информацию о пользователе

//function info ($user) {
//	echo "<h4>Имя: $user[firstName]</h4>
//            <h4>Фамилия: $user[lastName]</h4>
//            <p>Возраст: $user[age]<p>";
//}
//info($user);

//function print_user_data($user){
//	echo "<h3>Имя:</h3> $user[firstName].<br><h3>Фамилия:</h3> $user[lastName].<br><h3>Возраст:</h3> $user[age].";
//}
//
//print_user_data($user);


//function sayUser($firstName,$lastName,$age){
//	echo "<h3>Hello, $firstName, $lastName, $age</h3>";
//}
//sayUser($user['firstName'],$user['lastName'],$user['age']);

//function showUserInfo($user) {
//	$res = "
//        <p>Имя: $user[firstName]</p>
//        <p>Фамилия: $user[lastName]</p>
//        <p>Возраст: $user[age]</p>
//        ";
//	return $res;
//}
//$result = showUserInfo($user);
//echo $result;

// новый массив
//$user = ['firstName' => 'Bob', 'lastName' => 'Ivanov', 'age' => 22];
//$newUser = $user;
//$newUser['firstName'] = 'Ivan';
//
//
//echo 'Исходный массив $user';
//d($user);
//echo '<hr>';
//echo 'Новый массив $newUser';
//d($newUser);

// ссылка на исходный массив
//$user = ['firstName' => 'Bob', 'lastName' => 'Ivanov', 'age' => 22];
//$newUser = &$user;
//$newUser['firstName'] = 'Ivan';
//
//
//echo 'Исходный массив $user';
//d($user);
//echo '<hr>';
//echo 'Новый массив $newUser';
//d($newUser);

/**
 * формирование списка из массива
 */
//$hobby = ['Лепка','Рисование','Танцы','Спорт','Путешествия'];

//function makeHTML($arr, $listClass = '', $listItemClass = '', $tag = 'ul'){
//    echo "<$tag class='$listClass'>";
//    foreach ($arr as $value){
//        echo "<li class='$listItemClass'>$value</li>";
//    }
//    echo "</$tag>";
//}
//
//makeHTML($hobby, 'hobby', 'hobby-item', 'ol');

//function makeHTML($arr, $class = "list", $tag = "ul") {
//	$class = $class != null ? "<class='$class'>" : "";
//	echo "<$tag $class>";
//	foreach ($arr as $value) {
//		echo "<li>$value</li>";
//	}
//	echo "</$tag>";
//}
//makeHTML($hobby, null, "ol");


//function makeHTML($arr, $listClass = '', $listItemClass = '', $tag = 'ul'){
//
//	$listStr = "<$tag class='$listClass'>";
//    foreach ($arr as $value){
//        $listStr .= "<li class='$listItemClass'>$value</li>";
//    }
//	$listStr .= "</$tag>";
//
//    return $listStr;
//}
//
//$listHTML = makeHTML($hobby, 'hobby', 'hobby-item', 'ol');
//echo $listHTML;





