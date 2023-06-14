// getElementById
// let head1 = document.getElementById("head-1");
// console.log(head1);

// let lastName = document.getElementById("last_name");
// let firstName = document.getElementById("first_name");
// console.log(lastName);
// console.log(firstName);

//getElementsByTagName
// let images = document.getElementsByTagName("img");
// console.log(images);

// let pars = document.getElementsByTagName("p");
// console.log(pars);

// let parsArr = [...pars];
// console.log(parsArr);

//getElementsByClassName
// let heads = document.getElementsByClassName("head");
// console.log(heads);

// let getByClassName = (element) => {
//   let arr = [];
//   for (let el of document.getElementsByClassName(element)) {
//     arr.push(el);
//   }
//   return arr;
// };
// console.log(getByClassName("head"));
// console.log(getByClassName("news_item"));

// q u e r y S e l e c t o r
// let head1 = document.querySelector("h1"); // получение по названию тега
// console.log(head1);

// let img = document.querySelector("img"); // получение по названию тега
// console.log(img);

// let head = document.querySelector(".head"); // получение по названию класса
// console.log(head);

// let head1 = document.querySelector("#head-1"); // получение по идентификатору
// console.log(head1);

// console.log(document.querySelector("h2"));
// let h2 = document.querySelector(".news_item h2");
// console.log(h2);

// q u e r y S e l e c t o r A l l
// let images = document.querySelectorAll("img");
// console.log(images);

// // получим все значения alt каринок
// let alts = [];
// images.forEach(function (image) {
//   console.log(image.alt);
//   alts.push(image.alt);
// });
// console.log(alts);

// let h2Elements = document.querySelectorAll(".news_container .news_item h2");
// console.log(h2Elements);

// let h2text = [...h2Elements].map((h2elem) => h2elem.innerText).join(". ");
// console.log(h2text);

// let h2Elements = document.querySelectorAll(".news_container .news_item h2");
// for (let h2Element of h2Elements) {
//   console.log(h2Element.innerText);
// }

// let texts = "";
// document.querySelectorAll(".news_container .news_item h2").forEach((el) => (texts += el.innerText + "\n"));
// console.log(texts);

// let str3 = h2Elements[0].innerText + ` ` + h2Elements[1].innerText + ` ` + h2Elements[2].innerText;
// console.log(str3);

// let news_container = document.querySelector(".news_container");
// console.log(news_container.innerText);

// замена текстового содержимого элемента
//let head1 = document.querySelector("#head-1");
// head1.innerText = "Hello, summer";
// добавление содержимого
//head1.innerText += ". Hello, summer";
//let newStr = "Hello, summer. " + head1.innerText;
//head1.innerText = newStr;

// let news_container = document.querySelector(".news_container");
// console.log(news_container.innerText);
// news_container.innerText = "Новый текст";

// index.html
//index.html ? first_name=иван & last_name=иванов & email=ivanov%40rtfff.rr
// & password=89203urhksjdnf
/*
// события
let button1 = document.querySelector("#button-1");

button1.addEventListener("click", function (event) {
  //console.log(event.target);
  console.log(this.innerText);
  console.log(button1.innerText);
  //console.log("Кнопка нажата");
});

let head1 = document.getElementById("head-1");
head1.addEventListener("click", function () {
  console.log(head1.innerText);
});

let submitBtn = document.querySelector("#submit-btn");
submitBtn.addEventListener("click", function (event) {
  event.preventDefault(); // отменяем стандартное поведение, перезагрузку страницы
  console.dir(submitBtn.value);
  console.dir(submitBtn.id);
  submitBtn.value = "Выйти";
});

// let form1 = document.querySelector("#form-1");
// form1.addEventListener("mouseover", function () {
//   console.log("Мышь зашла в область формы");
//   head1.style.background = "silver";
// });
// form1.addEventListener("mouseout", function () {
//   console.log("Мышь ушла из области формы");
//   head1.style.background = "transparent";
// });

// focus / blur
// focus - активация поля ввода
// blur - деактивация поля ввода
let first_name = document.querySelector("#first_name");
let first_name_error = document.querySelector("#first_name_error");

// focus - активация поля ввода
first_name.addEventListener("focus", function () {
  //console.log("активация поля ввода");
});

// blur - деактивация поля ввода
// если пользователь ввел имя, то выводим в консоль что ОК
// если пользователь оставил поле пустым, то выводим в консоль ошибку
first_name.addEventListener("blur", function () {
  // если пусто
  if (first_name.value === "") {
    first_name_error.innerText = "Введите имя";
  } else {
    first_name_error.innerText = "";
  }
});

// проверка фамилии
let last_name = document.getElementById("last_name");
let last_name_error = document.querySelector("#last_name_error");
last_name.addEventListener("blur", function () {
  if (last_name.value === "") {
    last_name_error.innerText = "Введите фамилию";
  } else if (last_name.value.length < 2) {
    last_name_error.innerText = "Фамилия должна состоять не менне чем из двух букв";
  } else {
    last_name_error.innerText = "";
  }
});
*/

// let last_name = document.getElementById("last_name");
// let last_name_error = last_name.nextElementSibling;

// last_name.addEventListener("blur", function () {
//   if (last_name.value === "") {
//     last_name_error.innerText = "Введите фамилию";
//   } else if (last_name.value.length < 2) {
//     last_name_error.innerText = "Фамилия должна состоять не менне чем из двух букв";
//   } else {
//     last_name_error.innerText = "";
//   }
// });

//let container = document.querySelector(".container");
//let str = "<h2>hello, summer</h2>";

// container.innerText = str;
// container.innerHTML = str;

// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
// let fruitsStr = fruits
//   .map(function (fruit) {
//     return `<p>${fruit}</p>`;
//   })
//   .join("");
// container.innerHTML = fruitsStr;

// let pars = document.querySelectorAll(".container p");
// console.log(pars);

/*
// 1. Получаем все заголовки h2
let h2Elements = document.querySelectorAll(".news_container .news_item h2");

// 2. Получаем контейнер для вставки
let newsContainer = document.querySelector(".news_container");

// 3. Помещаем заголовки внутрь контейнера
// 3.1 Формируем из NodeList строку
h2Elements = [...h2Elements]; // преобразовываем NodeList в массив
let h2ElementsText = h2Elements.map((element) => element.outerHTML).join("");
// 3.2 Вставляем строку в контейнер
newsContainer.innerHTML = h2ElementsText;*/

// let news_item = document.querySelector(".news_item");

// console.log(news_item.parentElement);
//console.log(news_item.children);
// console.log(news_item.children[0].parentElement);
// console.log(news_item.nextElementSibling);
// console.log(news_item.previousElementSibling);
// let news_container = document.querySelector(".news_container");
// console.log(news_container);

// style
// let head1 = document.querySelector("#head-1");
// console.log(head1.style);
