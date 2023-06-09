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
    color: "Черный",
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
