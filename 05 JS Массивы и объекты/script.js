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

// let nums = [1, 2, 3, 4, 5];
// let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22];
// let random = [56, "hello", null, true, undefined, false, "", 0, [1, 2, 3], { a: 3, b: 4 }];
// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
// let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];

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
// console.log(animals);
// animals.unshift("camel");
// console.log(animals);

/*
//2. Дан массив с элементами 1, 2, 3, 4, 5. С помощью цикла for-of найдите сумму элементов этого массива.
arr1 = [1, 2, 3, 4, 5];
sum = 0;
for (let number of arr1) {
  sum += number;
}
console.log(sum);

arr1 = [1, 2, 3, 4, 5];
sum = 0;
for (let i = 0; i < arr1.length; i++) {
  sum += arr1[i];
}
console.log(sum); ///Вопрос!!!

// посчитать сумму элементов массива
// let arr1 = [3, 2, 1, 4, 9, 3];
// console.log(arr1);

// let sum = 0;
// for (let i = 0; i < arr1.length; i++) {
//   sum += arr1[i];
// }
// console.log(sum);
*/

// let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22];
// получите произведение элементов массива
// let sum = 1;
// for (let i = 0; i < numbers.length; i++) {
//   sum = sum * numbers[i];
// }
// console.log(sum);

//let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22];
// let pr = 1;
// for (let value of numbers) {
//   pr *= value;
// }
// console.log(pr);

// let nums = [1, 2, 3, 4, 5];
// let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22];
// let random = [56, "hello", null, true, undefined, false, "", 0, [1, 2, 3], { a: 3, b: 4 }];
// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
// let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];

// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
// получите на основе исходного массива массив:
// ["dog", "ant", "bison", "camel", "duck", "elephant", "cat"]

// let a = animals.pop();
// animals.unshift(a);
// console.log(animals);

//console.log(animals.unshift(animals.pop()));
// animals.unshift(animals.pop());
// console.log(animals);

// let dog = animals.pop();
// animals.unshift(dog);
// console.log(animals);

// concat

// let newArr = pets.concat(animals);
// console.log(newArr);

// let nums = [1, 2, 3, 4, 5];
// let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22];

// let newArr = nums.concat(numbers);
// console.log(newArr);

// console.log(nums.concat(numbers));

// console.log(nums.concat(nums, numbers, ["hello", "summer"], "Bob"));

// includes
// if (nums.includes(4562)) {
//   console.log("+++");
// } else {
//   console.log("---");
// }

// indexOf
// let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22];
//console.log(numbers.indexOf(4));

// если элемент в массиве есть, вывести его значение
// если элемента нет, то вывести сообщение о том, что элемента в массиве нет
// let searchIndex = numbers.indexOf(2312);

// if (searchIndex !== -1) {
//   console.log("Искомый элемент: ", numbers[searchIndex]);
// } else {
//   console.log("искомого элемента в массиве нет");
// }

// Поиск всех идексов в массиве
// let value = 4;
// let currentArray = numbers;

// let arrayOfIndex = [];
// for (let i = 0; i < currentArray.length; i++) {
//   if (value === currentArray[i]) {
//     arrayOfIndex.push(i);
//   }
// }
// if (arrayOfIndex.length !== 0) {
//   console.log(`Элемент ${value} присутствует в массиве по индексу(ам): ${arrayOfIndex.join(", ")}.`);
// } else {
//   console.log(`Элемент ${value} отсутствует в массиве.`);
// }

let nums = [1, 2, 3, 4, 5];
let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22];
let random = [56, "hello", null, true, undefined, false, "", 0, [1, 2, 3], { a: 3, b: 4 }];
let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];

// join
// let fruitsList = `<ul class="fruits"><li>${fruits.join("</li><li>")}</li></ul>`;
// // <li>Киви</li><li>Ананас</li><li>Кокос</li>
// document.write(fruitsList);

// slice
// let userName = "Иван";
// let userName2 = userName;
// userName2 = "Сергей";

// console.log(userName);
// console.log(userName2);

// let fruits2 = fruits;
// fruits2.pop(); // удаляю элемент
// console.log(fruits2);
// console.log(fruits);

// let newAnimals = [];
// for (let animal of animals) {
//   newAnimals.push(animal);
// }
// newAnimals.pop();

// console.log(animals);
// console.log(newAnimals);

// let newPets = pets.slice();
// newPets.pop();

// console.log(pets);
// console.log(newPets);

// let newPets = pets.slice(3, 7);
// console.log(newPets);

// let firstIndex = 2;
// let secondIndex = 6;
// let currentArray = pets;

// let resultArray = [];
// for (let i = firstIndex; i < secondIndex; i++) {
//   resultArray.push(currentArray[i]);
// }
// console.log(resultArray);

// let random = [56, "hello", null, true, undefined, false, "", 0, [1, 2, 3], { a: 3, b: 4 }];
// получите копию части массива [true, undefined, false, "", 0, [1, 2, 3]]
// let newRandom = random.slice(3, 9);
// console.log(newRandom);

// let randomNewPets = random.slice(3, 9);
// console.log(random);
// console.log(randomNewPets);

// splice
// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
// let delItems = fruits.splice(1, 2, "camel", "duck", "elephant");
// let delItems = fruits.splice(4, 1, "camel", "duck", "elephant");
// console.log("Исходный массив", fruits);
// console.log("Удаленные элементы", delItems);

// let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
// сформируйте на основе исходного массива следующий массив:
// ["cat", "dog", "bat", "cow", "chicken", "mouse", "pig", "goat", "sheep"]

// let delItems = pets.splice(7);
// let delItens1 = pets.splice(3, 0, ...delItems);
// console.log(pets);
