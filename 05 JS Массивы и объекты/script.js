// let fruit1 = "Банан";
// let fruit2 = "Ананас";
// let fruit3 = "Слива";

// let fruits = ["Банан", "Ананас", "Слива", "Кокос", "Виноград", 3, [1, 2, 3, "Привет"], true, null, undefined];
// console.log(fruits);
// console.log(fruits.length);
//console.log(fruits[4]);

// получение последнего элемента массива
// let lastIndex = fruits.length - 1; // 5
// console.log(lastIndex);
// console.log(fruits[lastIndex]);

// fruits[0] = "Абрикос";
// console.log(fruits);

// fruits[20] = "Абрикос";
// console.log(fruits);
// console.log(fruits.length);

// console.log(fruits[10]);

// обращение к вложенному массиву
// console.log(fruits[6][3]);

// let arr = ["one", "two"];
// arr["three"] = 3;

// console.log(arr["three"]);
// console.log(arr);

let nums = [1, 2, 3, 4, 5];
let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22, true];
let random = [56, "hello", null, true, undefined, false, "", 0, [1, 2, 3], { a: 3, b: 4 }];
let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];

//console.log(animals);
//document.write(animals.join(", "));

// push() - добавление элемента в конец массива
// console.log(nums);
// let newArrLength = nums.push(6, 7, 8, 9);

// console.log(nums);
// console.log(newArrLength);

// pop() - удаляем последний элемент в конце массива
// console.log(fruits);
// let lastEl = fruits.pop();
// console.log(fruits);
// console.log(lastEl);

// shift() - удаляет первый элемент из массива
// console.log(pets);
// let firstEl = pets.shift();
// let firstEl2 = pets.shift();
// console.log(pets);
// console.log(firstEl);

// unshift() - добавляет один или более элементов в начало массива
console.log(animals);
animals.unshift("camel");
console.log(animals);
