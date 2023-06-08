// let userName = "Ирина";

// function sayHello() {
//   console.log(`Привет, ${userName}`);

//   let userName = "Иван";
//   console.log(`Привет, ${userName}`);
// }

// sayHello();

// let userName = "Ирина";

// function sayHello() {
//   let userName = "Иван";
//   console.log(`Привет, ${userName}`);
// }

// sayHello();

// let age = 6;
// let userName = "Анна";
// let message = "";

// if (age >= 10) {
//   message = `Добро подаловать, ${userName}`;
// } else {
//   message = `Доступ запрещен, ${userName}`;
// }
// console.log(message);
// console.dir(window);

// function checkAge(userName, currentAge) {
//   let message = "";
//   let age = 10;

//   if (currentAge >= age) {
//     message = `Добро подаловать, ${userName}`;
//   } else {
//     message = `Доступ запрещен, ${userName}`;
//   }

//   return message;
// }

// let userName = "Валентина";
// let age = 13;
// console.log(checkAge(userName, age));

// function checkAge(userName, currentAge) {
//   let age = 10;

//   if (currentAge >= age) {
//     return `Добро подаловать, ${userName}`;
//   } else {
//     return `Доступ запрещен, ${userName}`;
//   }
// }

// let userName = "Валентина";
// let age = 13;
// console.log(checkAge(userName, age));

// определение функции
// function sayHello() {
//   let userName = "Иван";
//   console.log(`Привет, ${userName}`);
// }
// sayHello();

// // функциональное выражение
// let sayHelloExp = function () {
//   let userName = "Иван";
//   console.log(`Привет, ${userName}`);
// };
// console.log(sayHelloExp);

// let usAge = 3;
// let user = "Вася";

// let chek = function (userName, currentAge) {
//   let age = 10;

//   if (currentAge >= age) {
//     return `Добро подаловать, ${userName}`;
//   } else {
//     return `Доступ запрещен, ${userName}`;
//   }
// };
// console.log(chek(user, usAge));

// let age = 10;
// let usAge = 11;
// let user = "Вася";

// var F = function checkAge(userName, userAge, age) {
//   if (userAge >= age) {
//     return `Добро подаловать, ${userName}`;
//   } else {
//     return `Доступ запрещен, ${userName}`;
//   }
// };
// console.log(F(user, usAge, age));

// let arr1 = [1, 2, 3, 4, 5];
// let arr2 = [10, 20, 30, 40, 50];

// let resArr = arr1.map((el) => el + arr2[arr1.indexOf(el)]);
// console.log(resArr);

// let sayHelloExp = function () {
//   console.log(`Привет, Иван`);
//   return true;
// };
// //console.log(sayHelloExp);
// let sayHello2 = sayHelloExp;
// console.log(sayHello2());

// let sayHello = function () {
//   return "Привет";
// };

// let getUser = function () {
//   return "Иван";
// };

// let sayBye = function () {
//   return "Пока";
// };

// let action = function (greetFunc, userFunc) {
//   let greeting = greetFunc() + " " + userFunc();
//   console.log(greeting);
// };
// action(sayHello, getUser);
// action(sayBye, getUser);

// let arr = [3, 7, 5, 1, 12, 4, 8, 2];

// let sort = function (array) {
//   return array.sort((a, b) => b - a);
// };

// let mySort = function (func, array) {
//   return func(array);
// };

// console.log(mySort(sort, arr));

// скидка 10%
// let todayDiscount = 10;
// let bill = 1000;

// let getDiscount = function (discount) {
//   return function (bill) {
//     return bill - (discount * bill) / 100;
//   };
// };

// let currentDiscount = getDiscount(todayDiscount);
// console.log(currentDiscount(bill));
// console.log(currentDiscount(2000));
// console.log(currentDiscount(7000));

// let newDiscount = getDiscount(5);
// console.log(newDiscount(500));
// console.log(newDiscount(400));
// console.log(newDiscount(200));
