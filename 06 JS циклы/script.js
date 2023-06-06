//let fruits = ["Банан", "Ананас", "Слива", "Кокос", "Виноград"];

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
/*
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
*/

// for (let i = 10; i >= 0; i--) {
//   console.log(i);
// }

// let fruits = ["Банан", "Ананас", "Слива", "Кокос", "Виноград", "Арбуз"];

// 'Банан, Ананас, Слива...'
// let fruitsStr = "";
// for (let i = 0; i < fruits.length; i++) {
//   fruitsStr += fruits[i] + ", ";
// }
// console.log(fruitsStr);

// <li>Банан</li><li>Ананас</li><li>Слива...
// let fruitsStr = "";
// for (let i = 0; i < fruits.length; i++) {
//   fruitsStr += `<li>${fruits[i]}</li>`;
// }
// console.log(`<ul class="list">${fruitsStr}</ul>`);

// let colors = [
//   ["red", "orange"],
//   ["green", "salad", "silver"],
//   ["blue", "skyblue"],
// ];
//console.log(colors);

// for (let i = 0; i < colors.length; i++) {
//   //console.log(colors[i]);
//   for (let j = 0; j < colors[i].length; j++) {
//     console.log(colors[i][j]);
//   }
// }

// for (let arr of colors) {
//   for (let el of arr) {
//     console.log(el);
//   }
// }

// let fruits = ["Банан", "Ананас", "Слива", "Кокос", "Виноград", "Арбуз"];
// let searchElement = "Кокос";

// for (let i = 0; i < fruits.length; i++) {
//   console.log(fruits[i]);
//   // если есть в массиве Кокос, прерываем цикл
//   if (searchElement === fruits[i]) {
//     console.log(`${searchElement} найден по индексу ${i}!!!`);
//     break;
//   }
// }

// let fruits = ["Банан", "Ананас", "Слива", "Кокос", "Виноград", "Арбуз"];
// let searchElement = "Кокос";

// for (let i = 0; i < fruits.length; i++) {
//   // если есть в массиве Кокос, перейти к следующей итерации
//   if (searchElement === fruits[i]) {
//     continue;
//   }
//   console.log(fruits[i]);
// }

/*
const cat = {
  name: "Ллойд",
  color: "Черный",
  age: 12,
  city: "Москва",
  owner: "Василий",
};

// let prop = "name";
// console.log(cat[prop]);

for (let key in cat) {
  console.log(`${key}: ${cat[key]}`);
}*/

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
/*
  <div class="cat">
  <h2>Кличка: ${cats[0].name}</h2>
  <p>Цвет шерсти: ${cats[0].color}</p>
  <p>Возраст: ${cats[0].age}</p>
  <p>Город: ${cats[0].city}</p>
  <p>Владелец: ${cats[0].owner}</p>
  </div>
*/
// сформируйте разметку для массива объектов cats используя любой цикл
/* 1
let catsHtmlStr = ``;
for (let i = 0; i < cats.length; i++) {
  catsHtmlStr += `
      <div class = "cat">
      <h2>Кличка: ${cats[i].name}</h2>
      <p>Цвет шерсти: ${cats[i].color}</p>
      <p>Возраст: ${cats[i].age}</p>
      <p>Город: ${cats[i].city}</h3>
      <p>Владелец: ${cats[i].owner}</p>
      </div>
`;
}

let box = document.getElementById("box-1");
box.insertAdjacentHTML("beforeend", catsHtmlStr);
*/

/* 2
let str = "";
for (elem of cats) {
  str =
    str +
    `<div class="cat">
      <h2>Кличка: ${elem.name}</h2>
      <p>Цвет шерсти: ${elem.color}</p>
      <p>Возраст: ${elem.age}</p>
      <p>Город: ${elem.city}</p>
      <p>Владелец: ${elem.owner}</p>
    </div>`;
}
let box = document.getElementById("box-1");
box.insertAdjacentHTML("beforeend", str);
*/

/*
let catsr = ``;
let i = 0;
while (i < cats.length) {
  catsr += `
    <div class="cat">
      <h2>Кличка: ${cats[i].name}</h2>
      <p>Цвет шерсти: ${cats[i].color}</p>
      <p>Возраст: ${cats[i].age}</p>
      <p>Город: ${cats[i].city}</h3>
      <p>Владелец: ${cats[i].owner}</p>
    </div>`;
  i++;
}
let box = document.getElementById("box-1");
box.insertAdjacentHTML("beforeend", catsr);
*/

// let box1 = document.querySelector("#box-1");
// let box2 = document.getElementById("box-1");
