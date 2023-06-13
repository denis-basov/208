let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];

// foreach
// fruits.forEach(function (fruit, key, arr) {
//   console.log(`<li class="friuts fruit-${key + 1}">${fruit}.
//                 ключ: <span>${key}</span> Массив: ${arr}</li>`);
// });

// animals.forEach(function (animal, key) {
//   console.log(`<li class="animals">${animal} ключ - ${key}<li>`);
// });

// animals.forEach(function (petsonly) {
//   console.log(`<li>$(Дом звери: ${petsonly}.<li>)`);
// });

// animals.forEach(function (animal, key) {
//   console.log(`<li class="animals animal-${key + 1}">${animal}.
//     ключ: <span>${key}</span></li>`);
// });

// pets.forEach(function (pet) {
//   console.log(pet);
// });

// console.log(result);
// let cats = [
//   {
//     name: "Ллойд",
//     color: "Черный",
//     age: 12,
//     city: "Москва",
//     owner: "Василий",
//   },
//   {
//     name: "Барсик",
//     color: "Серый",
//     age: 6,
//     city: "Москва",
//     owner: "Анна",
//   },
//   {
//     name: "Мурка",
//     color: "Белый",
//     age: 2,
//     city: "Самара",
//     owner: "Инна",
//   },
// ];
// cats.forEach(function (cat) {
//   console.log(cat.city);
// });
// <p>Кличка: Мурка. Цвет шерсти: Белый. Возраст: 2. Город проживания: Самара. Владелец: Инна</p>

// cats.forEach(function (cat) {
//   console.log(`<p>Кличка: ${cat.name}. Цвет шерсти: ${cat.color}. Возраст: ${cat.age}. Город проживания: ${cat.city}. Владелец: ${cat.owner}</p>`);
// });
// let sumAge = 0;
// cats.forEach(function (cat) {
//   sumAge += cat.age;
// });
// console.log(sumAge);

// map
// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
// let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];

// let petsLength = pets.map(function (pet) {
//   return pet.length;
// });
// console.log(pets);
// console.log(petsLength);

// let newAnimals = animals
//   .map(function (animal, key) {
//     return `<li>Животное: ${animal}. Индекс: ${key}</li>`;
//   })
//   .join("");
// console.log(newAnimals);

// let catNames = cats.map(function (cat) {
//   return cat.name;
// });
// console.log(catNames);

// let catNames = cats.map(function (cat, index) {
//   return cats[2].name;
// });
// console.log(catNames);

// let catOwners = cats.map(function (cat) {
//   return cat.name + ", " + cat.owner;
// });
// console.log(catOwners);

// let cats = [
//   {
//     name: "Ллойд",
//     color: "Черный",
//     age: 12,
//     owner: {
//       name: "Василий",
//       city: "Москва",
//       phones: [333, 543, 123],
//     },
//   },
//   {
//     name: "Барсик",
//     color: "Серый",
//     age: 6,
//     owner: {
//       name: "Анна",
//       city: "Москва",
//       phones: [523, 653, 532],
//     },
//   },
//   {
//     name: "Мурка",
//     color: "Белый",
//     age: 2,
//     owner: {
//       name: "Инна",
//       city: "Самара",
//       phones: [187, 466, 643],
//     },
//   },
//   {
//     name: "Пусик",
//     color: "Серый",
//     age: 5,
//     owner: {
//       name: "Николай",
//       city: "Москва",
//       phones: [345, 678, 543],
//     },
//   },
// ];

// let owners = newCats.map(function (cat) {
//   return cat.owner.phones[0];
// });
// console.log(owners);

// let owners = cats.map(function (cat) {
//   return `Кошка: ${cat.name}. Владелец: ${cat.owner.name}. Телефоны: ${cat.owner.phones.join(", ")}.`;
// });
// console.log(owners);
/*
let owners = cats
  .map(function (cat, index) {
    let phonesList = cat.owner.phones.join("</li><li>");
    console.log(phonesList);

    return `
    <div class="cat-${index + 1}">
        <h2>Кличка: ${cat.name}</h2>
        <p>Цвет шерсти: ${cat.color}</p>
        <p>Возраст: ${cat.age}</p>
        <div class="owner">
            <h3>Данные о владельце кота: ${cat.name}</h3>
            <p>Имя: ${cat.owner.name}</p>
            <p>Город проживания: ${cat.owner.city}</p>
            <h4>Телефоны для связи:</h4>
            <ol>
                <li>${phonesList}</li>
            </ol>
            <ul>
            ${cat.owner.phones.map((phone) => `<li>${phone}</li>`).join("")}
            </ul>
        </div>
    </div>
  `;
  })
  .join("");

let box1 = document.querySelector("#box-1");
box1.insertAdjacentHTML("beforeend", owners);
*/
/*
$user = [
	'userName' => 'Ivan999',
	'firstName' => 'Ivan',
	'lastName' => 'Ivanov',
	'age' => 11,
	'phones' => ['911', '01', '9874'],
	'avatar' => 'https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dXNlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
];
json_encode($user)
*/

// fetch("https://jsonplaceholder.typicode.com/posts")
//   .then((response) => response.json())
//   .then((json) => console.log(json[0].title));

// стрелочные функции
// pets.forEach(function (pet, i) {
//   console.log(pet, i);
// });

// pets.forEach((pet, i) => {
//   console.log(pet, i);
// });

// let getSum = function (num1, num2) {
//   return num1 + num2;
// };
// console.log(getSum(5, 9));

// let getSumArr = (num1, num2) => {
//   return num1 + num2;
// };
// console.log(getSumArr(8, 2));

// function getStrFromArr(arr) {
//   let str = "";
//   for (let elem of arr) {
//     str += elem;
//   }
//   return str;
// }

// let getStrFromArr = (arr) => {
//   let str = "";
//   for (let elem of arr) {
//     str += elem;
//   }
//   return str;
// };

// let fruitsStr = getStrFromArr(fruits);
// console.log(fruitsStr);

// let getSum = function (num1, num2) {
//   return num1 + num2;
// };

// let getSumArr = (num1, num2) => {
//   return num1 + num2;
// };

// let getSumArr = (num1, num2) => num1 + num2;

// console.log(getSumArr(8, 2));

// find
// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
// let animal = animals.find(function (animal) {
//   return animal.length > 5;
// });

// console.log(animal);

let cats = [
  {
    name: "Ллойд",
    color: "Чёрный",
    age: 12,
    owner: {
      name: "Василий",
      city: "Москва",
      phones: [333, 543, 123],
    },
  },
  {
    name: "Барсик",
    color: "Серый",
    age: 6,
    owner: {
      name: "Анна",
      city: "Москва",
      phones: [523, 653, 532],
    },
  },
  {
    name: "Мурка",
    color: "Белый",
    age: 2,
    owner: {
      name: "Инна",
      city: "Самара",
      phones: [187, 466, 643],
    },
  },
  {
    name: "Пусик",
    color: "Серый",
    age: 5,
    owner: {
      name: "Николай",
      city: "Москва",
      phones: [345, 678, 543],
    },
  },
];

// получить кота у которого возраст меньше 6 лет
// let cat = cats.find(function (cat) {
//   return cat.age < 6;
// });
// console.log(cat);
// let cat = cats.find((cat) => cat.age < 6);

// filter
// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
// let filteredAnimals = animals.filter(function (animal) {
//   return animal.length > 3;
// });
// console.log(filteredAnimals);

// let newCats = cats.filter(function (cat) {
//   return cat.owner.city === "Москва";
// });

// console.log(newCats);

// every
// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
// let result = animals.every(function (animal) {
//   return animal.length < 8;
// });
// console.log(result);

// let result = cats.every(function (cat) {
//   return cat.owner.city === "Москва";
// });
// console.log(result);

// let result = cats.every(function (cat) {
//   return cat.owner.phones.length >= 3;
// });
// console.log(result);

// some
// let some = (arr, func) => {
//   for (let el of arr) {
//     if (func(el)) {
//       return true;
//     }
//   }
//   return false;
// };
// console.log(some(cats, (cat) => cat.owner.city === "Самара"));

// есть ли черный или белый кот в массиве
// let res = cats.some(function (cat) {
//   return cat.color === "Черный" || cat.color === "Чёрный" || cat.color === "Белый";
// });
// console.log(res);

// reduce
//let numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// let sum = 0;
// for (let number of numbers) {
//   sum += number;
// }
// console.log(sum);

// let sum = numbers.reduce(function (accumulator, number) {
//   return accumulator + number;
// });
//console.log(numbers.reduce((sum, number) => sum + number));
// 1. accumulator = 1, number = 2, return = 3
// 2. accumulator = 3, number = 3, return = 6
// 3. accumulator = 6, number = 4, return = 10
// 4. accumulator = 10, number = 5, return = 15
//console.log(sum);

// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
// console.log(animals.reduce((str, animal) => str + " " + animal));
// console.log(animals.reduce((str, animal) => str + ", " + animal));
// const strAnimals = animals.reduce((result, animal) => result + animal + " ", "");
// console.log(strAnimals);

// let strAnimls = animals.reduce(function (str, animal) {
//   return `${str} ${animal}`;
// }, "");
// console.log(strAnimls);

// let sum = numbers.reduce(function (accumulator, number) {
//   return accumulator + number;
// }, 100);
// console.log(sum);

/*
let nums = [7, 2, 8, 5, 15, 21, 33, 19];
// получить максимальное значение
let maximum = nums.reduce(function (max, currentValue) {
  if (max >= currentValue) {
    return max;
  } else {
    return currentValue;
  }
}, 0);
// 1. max = 0, currentValue = 7, return = 7
// 2. max = 7, currentValue = 2, return = 7
// 3. max = 7, currentValue = 8, return = 8
console.log(maximum);*/

// sort
//let nums = [7, 2, 8, 5, 15, 21, 33, 19];
// nums.sort(function (a, b) {
//   return a - b;
// });
// // 1. a = 7, b = 2; 7-2=5
// // 2. a = 7, b = 8; 7-8=-1

// console.log(nums);

// nums.sort(function (a, b) {
//   return b - a;
// });
// console.log(nums);

// сортируем котов по возрасту
// cats.sort(function (cat1, cat2) {
//   return cat1.age - cat2.age;
// });
// console.log(cats);
