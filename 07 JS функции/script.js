// let arr = [1, 2, 3, 4, 5];

// let lastEl = arr.pop();
// console.log(arr.pop());

// let num = Math.floor(2.4);
// console.log(num);

// 1. Объявление функции
// function sayHello() {
//   console.log("Hello");
// }

// // 2. Вызов функции
// sayHello();

// function sum() {
//   console.log(3 + 5);
// }

// sum();

// let a = 400;
// let b = 200;

// function myF() {
//   let res = a + b; // 300
//   console.log(res);
// }
// myF();

// let num1 = 5;
// let num2 = 10;

// function summa(a, b, c = 0) {
//   let res = a + b + c;
//   console.log(res);
// }

// summa(num1, num2, 10); // res = 15
// summa(9, 3); // res = 12

// function concat(str1 = "", str2 = "") {
//   console.log(`${str1} ${str2}`);
// }
// concat("Hello", "summer");

// let i = "привет";
// let j = "мир";

// function saySMTH(a, b) {
//   let saySMTH = a + " " + b;
//   return saySMTH;
//   // return a + " " + b;
// }
// let sumStr = saySMTH(i, j);

// let newSumStr = saySMTH(sumStr, "!");
// console.log(newSumStr);

// function concat(str1 = "", str2 = "", separator = "") {
//   return str1 + separator + str2;
// }
// let str = concat("hello", "world", " ");
// str = concat(str, "!");
// console.log(str);

// function makeArr(el1, el2, el3) {
//   let arr1 = [el1, el2, el3];
//   let arr2 = [el3, el2, el1];

//   let resObj = { first: arr1, second: arr2 };
//   return resObj;
// }

// let sumArr = makeArr(1, 2, 3);

// console.log(sumArr);
// console.log(sumArr.second);

let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
let arr = [1, 2, 3, 4, 5];

// function enumeration(someObject) {
//   for (let value of someObject) {
//     console.log(value);
//   }
// }

// enumeration(fruits);
// enumeration(pets);
// enumeration(animals);
// enumeration(arr);

// function write(arr) {
//   for (let elem of arr) {
//     console.log(elem);
//   }
// }

// write(fruits);

// function enumeration(someObject) {
//   let resStr = "";
//   for (let value of someObject) {
//     resStr += value + " ";
//   }
//   return resStr;
// }

// let result = enumeration(pets);
// console.log(result);

// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
// сформировать массив строк по типу: ["<p>ant</p>", "<p>bison</p>", "<p>camel</p>"]

/*
// возвращает массив параграфов
function makePars(arr, className) {
  let newArr = [];
  let count = 1;
  for (let element of arr) {
    newArr.push(`<p class="${className} ${className}-${count}">${element}</p>`);
    count++;
  }
  return newArr;
}

let arrPars = makePars(animals, "animals");

// возвращает строку
function makeStr(arr) {
  let resStr = "";
  for (let value of arr) {
    resStr += value;
  }
  return resStr;
}
let strHtml = makeStr(arrPars);

// вывести строку в документ
function makeHtml(str, containerId) {
  let container = document.getElementById(containerId);
  container.insertAdjacentHTML("beforeend", str);
}

let containerId = "box-1";
makeHtml(strHtml, containerId);

// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
let containerId2 = "box-2";
let fruitsPars = makePars(fruits, "fruits");
let fruitsStr = makeStr(fruitsPars);
makeHtml(fruitsStr, containerId2);
*/

/*
function addTeg(elem, className = "") {
  let classElem = ` class="${className}"`;
  return `<p${classElem}>${elem}</p>`;
}

function generateTeg(array, className) {
  let newArr = [];
  let count = 1;
  for (let elem of array) {
    newArr.push(addTeg(elem, `${className}${count++}`));
  }
  return newArr;
}

function getStrFromArr(arr) {
  let str = "";
  for (let elem of arr) {
    str += elem;
  }
  return str;
}

function writeToHtml(str, id) {
  let box = document.getElementById(id);
  box.insertAdjacentHTML("beforeend", str);
}

function write(array, id, addClass) {
  writeToHtml(getStrFromArr(generateTeg(animals, addClass)), id);
}

write(fruits, "box-1", "fruit");*/

// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];

// let result = fruits.map(el => `<p>${el}</p>`).join("");
// console.log(result);
// fruits.map(function (element) {
//   console.log(element);
// });
// fruits.map((element) => console.log(element));
