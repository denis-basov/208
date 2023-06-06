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

// let nums = [1, 2, 3, 4, 5];
// let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22];
// let random = [56, "hello", null, true, undefined, false, "", 0, [1, 2, 3], { a: 3, b: 4 }];
// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
// let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];

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

// sort
// const nums = [1, 2, 3, 4, 5];
// let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22];
// let random = [56, "hello", null, true, undefined, false, "", 0, [1, 2, 3], { a: 3, b: 4 }];
// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
// let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
// let ages = [5, 2, 6, 8, 32, 3, 2, 11, 21, 12, 13, 20, 42, 22, 11, 15];

// fruits.sort();
// console.log(fruits);

// ages.sort();
// console.log(ages);

// array & const
// nums.pop();
// nums[1] = "hello";
// nums = [9, 8, 7, 6, 5, 4, 3, 2, 1];

// console.log(nums);

//let user = ["Иван", "Иванов", 21, "Пушкина", 4, 90];
// let user = ["Имя" => "Иван", "Фамилия=Иванов", "возраст=21"];
// console.log(user[0]); // '2023-12-05 12:01:22'

// font-family: 'Roboto', sans-serif;
// font-weight: 600;
// font-size: 30px;
// border-bottom: 2px solid transparent;
// let h1 = document.querySelector("h1");
// console.dir(h1);

// объекты
//let user = ["Иван", "Иванов", 21, "Пушкина", 4, 90];

// let user = {
//   firstName: "Иван",
//   lastName: "Иванов",
//   age: 21,
//   address: {
//     sity: "Пенза",
//     street: "Пушкина",
//     house: 4,
//     floor: 90,
//   },
//   hobbies: ["Есть", "Спать", "Гулять", "Плавать"],
//   isAdmin: true,
// };

// let user = {
//   firstName: "Иван",
//   lastName: "Иванов",
//   age: 21,
//   sity: "Пенза",
//   street: "Пушкина",
//   house: 4,
//   floor: 90,
//   hobbies: "Плавать",
// };

//console.log(user);

// const cat = {
//   name: "Ллойд",
//   color: "Черный",
//   age: 12,
//   city: "Москва",
//   owner: "Василий",
// };
//console.log(cat);

// const palette = {
//   red: "red_value",
//   yellow: "yellow_value",
//   blue: "blue_value",
// };
//console.log(palette);

// let notebook = {
//   vendor: "Acer",
//   model: "Nitro 5",
//   configuration: {
//     processor: "Intel I5",
//     ram: 16,
//     ssd: [256, 1024, 2048],
//   },
//   screenSize: 15,
//   illumination: true,
// };
// console.log(notebook);
// console.log(notebook.model);
// console.log(notebook.configuration.processor);
// console.log(notebook.configuration.ssd.join(", "));

// let user = {
//   firstName: "Иван",
//   lastName: "Иванов",
//   age: 21,
//   sity: "Пенза",
//   street: "Пушкина",
//   house: 4,
//   floor: 90,
//   hobbies: "Плавать",
// };

//console.log(user);
// console.log(user.age);
// console.log(user.hobbies);
//let userStr = `<h3>Имя: ${user.firstName}. Фамилия: ${user.lastName}, Возраст: ${user.age}.</h3>`;
//console.log(userStr);

// let some = {
//   name: "some",
// };
// console.log(some);

// some = {
//   defined: some,
// };
// console.log(some);

// const cat = {
//   name: "Ллойд",
//   color: "Черный",
//   age: 12,
//   city: "Москва",
//   owner: "Василий",
// };

// let cat = {
//   name: "Басик",
//   age: "2",
//   sex: "м",
//   color: "серый",
//   owner: "Мила",
// };
// console.log(cat);
// let catStr = `Кличка - ${cat.name}, возраст - ${cat.age}, окрас - ${cat.color}.`;
// console.log(catStr);

// let test = {
//   string: "test_string",
//   number: 123,
//   boolean: true,
//   array: [1, "1", true],
// };
// let test_str = `<p> \n Строковый тип: ${test.string}; \n Число: ${test.number}; \n Массив: ${test.array}; \n</p>`;
// console.log(test_str);

// let pets = {
//   name: "Барсик",
//   age: 3,
//   race: "Британский вислоухий",
//   passport: true,
//   male: "Мальчик",
// };

// let petName = `<h3> Имя:${pets.name}. Возраст: ${pets.age}. Порода: ${pets.race}. Наличие паспорта: ${pets.passport ? "да" : "нет"}. Пол: ${pets.male} </h3>`;
// console.log(petName);

/*
let notebook = {
  vendor: "Acer",
  model: "Nitro 5",
  configuration: {
    processor: "Intel I5",
    ram: 16,
    ssd: 256,
  },
  screenSize: 15,
  illumination: true,
};
console.log(`<h1>${notebook.vendor} ${notebook.model}</h1>
<h3>Configuration</h3>
<ul>
  <li>${notebook.configuration.processor}</li>
  <li>${notebook.configuration.ram}</li>
  <li>${notebook.configuration.ssd}</li>
</ul>`);

let htmlStr = `<h1>${notebook.vendor} ${notebook.model}</h1>
<h3>Configuration</h3>
<ul>
<li>${notebook.configuration.processor}</li>
<li>${notebook.configuration.ram}</li>
<li>${notebook.configuration.ssd}</li>
</ul>`;
let box1 = document.querySelector("#box-1"); // получаем элемент со страницы
console.dir(box1);
box1.insertAdjacentHTML("beforeend", htmlStr); // размещаем текст относительно контейнера */

// let user = {
//   firstName: "Иван",
//   lastName: "Иванов",
//   age: 21,
//   sity: "Пенза",
//   street: "Пушкина",
//   house: 4,
//   floor: 90,
//   hobbies: "Плавать",
//   "is admin": true,
// };

// console.log(user["is admin"]);
// console.log(user["age"]);

// let userProp = "firstName";
// console.log(user[userProp]);
//console.log(user.age);

// user.firstName = "Игорь";
// //user.firstame = "Игорь";
// console.log(user);
// console.log(`Имя: ${user.firstName}, фамилия: ${user.lastName}`);

// user.pet = "dog";
// console.log(user);

/* 
let calculate = {
  sum: 0,
  multi: 1,
  arr: [],
};

let arr = [1, 2, 3, 4, 5];

for (let num of arr) {
  calculate.sum += num;
  calculate.multi *= num;
  calculate.arr.push(num);
}

console.log(`sum = ${calculate.sum}, multi = ${calculate.multi}, arr: ${calculate.arr.join(", ")}`);*/

/*
let user = {
  firstName: "Иван",
  lastName: "Иванов",
  age: 21,
  address: {
    sity: "Пенза",
    street: "Пушкина",
    house: 4,
    floor: 90,
  },
  hobbies: ["Есть", "Спать", "Гулять", "Плавать", "Играть на флейте"],
  isAdmin: true,
  avatar: "user.jpg",
};

// вывести ВСЕ данные в документ
let htmlStr = `
  <div class="user">
    <img src="${user.avatar}" alt="${user.firstName} ${user.lastName}">
    <h2>Имя: ${user.firstName}. Фамилия: ${user.lastName}</h2>
    <p>Возраст: ${user.age}</p>
    <h3>Адрес:</h3>
    <div class="address">
      <span>Город: ${user.address.sity}</span>
      <span>Улица: ${user.address.street}</span>
      <span>Дом: ${user.address.house}</span>
      <span>Этаж: ${user.address.floor}</span>
    </div>
    <h3>Хобби:</h3>
    <ol class="hobby-list">
      <li>${user.hobbies.join("</li><li>")}</li>
    </ol>
    <p>Админ: ${user.isAdmin ? "да" : "нет"}</p>
  </div>
`;

let box1 = document.querySelector("#box-1"); // получаем элемент со страницы
box1.insertAdjacentHTML("beforeend", htmlStr); // размещаем текст относительно контейнера
box1.insertAdjacentHTML("beforeend", htmlStr); // размещаем текст относительно контейнера
box1.insertAdjacentHTML("beforeend", htmlStr); // размещаем текст относительно контейнера
*/
/*
const cat = {
  name: "Ллойд",
  color: "Черный",
  age: 12,
  city: "Москва",
  owner: "Василий",
};
const cat1 = {
  name: "Барсик",
  color: "Серый",
  age: 6,
  city: "Москва",
  owner: "Анна",
};
const cat2 = {
  name: "Мурка",
  color: "Белый",
  age: 2,
  city: "Самара",
  owner: "Инна",
};
*/

let cats = [
  {
    name: "Ллойд",
    color: "Черный",
    age: 12,
    city: "Москва",
    owner: "Василий",
  },
  {
    name: "Барсик",
    color: "Серый",
    age: 6,
    city: "Москва",
    owner: "Анна",
  },
  {
    name: "Мурка",
    color: "Белый",
    age: 2,
    city: "Самара",
    owner: "Инна",
  },
];

//let catsAges = cats[0].age + cats[1].age + cats[2].age;
// console.log(cats);
// console.log(catsAges);
// console.log(cats[2].name);
// console.log(cats[1].age);
// сформируйте строку:
// '<h2>Кличка: Ллойд, цвет шерсти: Белый, Город: Москва, возраст: 12</h2>'
// let catsStr = `<h2>Кличка: ${cats[0].name}, цвет шерсти: ${cats[0].color}, город: ${cats[0].city}, возраст: ${cats[0].age}.</h2>`;
// console.log(catsStr);

// let cat_str = `<h2>
//     Кличка: ${cats[0].name}, Цвет шерсти: ${cats[2].color}, Город: ${cats[0].city}, Возраст: ${cats[0].age}.
//   </h2>`;
// console.log(cat_str);

let catsHtmlStr = `
    <div class="cat">
      <h2>Кличка: ${cats[0].name}</h2>
      <p>Цвет шерсти: ${cats[0].color}</p>
      <p>Возраст: ${cats[0].age}</p>
      <p>Город: ${cats[0].city}</p>
      <p>Владелец: ${cats[0].owner}</p>
    </div>
    <div class="cat">
      <h2>Кличка: ${cats[1].name}</h2>
      <p>Цвет шерсти: ${cats[1].color}</p>
      <p>Возраст: ${cats[1].age}</p>
      <p>Город: ${cats[1].city}</p>
      <p>Владелец: ${cats[1].owner}</p>
    </div>
      <div class="cat">
      <h2>Кличка: ${cats[2].name}</h2>
      <p>Цвет шерсти: ${cats[2].color}</p>
      <p>Возраст: ${cats[2].age}</p>
      <p>Город: ${cats[2].city}</p>
      <p>Владелец: ${cats[2].owner}</p>
    </div>
`;

let box = document.getElementById("box-1");
box.insertAdjacentHTML("beforeend", catsHtmlStr);
