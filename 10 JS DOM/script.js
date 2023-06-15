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

// head1.style.background = "orangered";
// head1.style.color = "white";
// head1.style.border = "3px solid gray";
// head1.style.borderRadius = "10px";
//head1.style["border-radius"] = "10px";

// let newsContainer = document.querySelector(".news_container");
// newsContainer.style.display = "none";

// newsContainer.style.background = "thistle";
// newsContainer.style.color = "white";
// newsContainer.style.border = "2px solid gray";
// newsContainer.style.fontSize = "14px";

// newsContainer.style.padding = "10px";
// newsContainer.style.border = "2px solid darkviolet";
// newsContainer.style.borderRadius = "10px";
// newsContainer.style.backgroundColor = "lavender";
// newsContainer.style.color = "darkviolet";

// let news_container = document.querySelector(".news_container");
// news_container.style.color = "#660033";
// news_container.style.background = "pink";
// news_container.style.border = "thick double #FF9933";
// news_container.style.borderRadius = "10px";
// news_container.style.padding = "10px";

// let parNewsContainer = document.querySelector(".news_container p");
// let hNewsContainer = document.querySelector(".news_container h2");
// parNewsContainer.style.color = "red";
// parNewsContainer.style.background = "blue";
// hNewsContainer.style.color = "white";
// hNewsContainer.style.background = "blue";

// console.dir(parNewsContainer);
// console.dir(hNewsContainer);

// let newsContainer = document.querySelector(".news_container");
// newsContainer.style.padding = "10px";
// newsContainer.style.border = "2px solid darkviolet";
// newsContainer.style.borderRadius = "10px";
// newsContainer.style.backgroundColor = "lavender";
// newsContainer.style.color = "darkviolet";
// newsContainer.style.fontStyle = "italic";
// [...newsContainer.children].forEach((node) => {
//   node.style.backgroundColor = "darkviolet";
//   node.style.color = "lavender";
// });
// let newsContainer = document.querySelector(".news_container");
// newsContainer.style.padding = "20px";
// newsContainer.style.margin = "10px";
// newsContainer.style.border = "5px solid #C71585";
// newsContainer.style.background = "#FFA07A";
// newsContainer.style.color = "#DC143C";

// скрываем заголовок по нажатию кнопки
// let button1 = document.querySelector("#button-1");
// let head1 = document.querySelector("#head-1");

// button1.addEventListener("click", function () {
//   head1.style.display = "none";
//   button1.style.display = "none";
// });

// classList
// let newsItem2 = document.querySelector(".news_item.news_item-2");
// console.log(newsItem2.classList);

// let head1 = document.querySelector("#head-1");
// head1.classList.add("head-style"); // добавляем класс заголовку
// console.log(head1.classList);

// let button1 = document.querySelector("#button-1");
// let head1 = document.querySelector("#head-1");

// button1.addEventListener("click", function () {
//   head1.classList.add("head-style"); // добавляем класс
//   head1.classList.remove("head-style"); // удаляем класс
// });

// let button1 = document.querySelector("#button-1");
// let head1 = document.querySelector("#head-1");

// // если класс есть, удаляем, если нет, добавляем
// button1.addEventListener("click", function () {
//   // если класс head-style есть
//   if (head1.classList.contains("head-style")) {
//     // убираем
//     head1.classList.remove("head-style");
//   } else {
//     head1.classList.add("head-style");
//   }
// });

// напишите код так, чтобы при нажатии на кнопку форма появлялась
// а при повторном нажатии скрывалась
// let button1 = document.querySelector("#button-1");
// let enter = document.querySelector("#enter");
// enter.classList.add("hidden");

// button1.addEventListener("click", function () {
//   if (enter.classList.contains("hidden")) {
//     enter.classList.remove("hidden");
//   } else {
//     enter.classList.add("hidden");
//   }
// });

// let button1 = document.querySelector("#button-1");
// let enter = document.querySelector("#enter");
// enter.classList.add("hidden");

// button1.addEventListener("click", function () {
//   enter.classList.toggle("hidden");
// });

// button1.addEventListener("click", () => enter.classList.toggle("hidden"));

// enter.classList.__proto__.newMethod = function () {
//   console.log("Hello");
// };
// console.log(enter.classList.__proto__);
// enter.classList.newMethod();

// let img1 = document.querySelector(".img-1");
// let img2 = document.querySelector(".img-2");

// let altImg1 = img1.getAttribute("alt");
// img2.setAttribute("alt", altImg1);

// let altSrc1 = img1.getAttribute("src");
// img2.setAttribute("src", altSrc1);

// let s1 = img1.getAttribute("src"); // "images/image-1.jpg"
// let s2 = img2.getAttribute("src"); // "images/image-2.jpg"

// img1.setAttribute("src", s2);
// img2.setAttribute("src", s1);

// let temp = img1.getAttribute("src");
// img1.setAttribute("src", img2.getAttribute("src"));
// img2.setAttribute("src", temp);

// createElement
// let newDiv = document.createElement("section");
// newDiv.innerHTML = "<h2>Hello, summer</h2>";
// newDiv.classList.add("head", "head-2");
// newDiv.setAttribute("title", "Подсказка");
// newDiv.style.background = "skyblue";

// let container = document.querySelector(".container");
// container.append(newDiv);
// container.append(newDiv);

// let h1 = document.createElement("h1");
// h1.innerText = "Hello!";
// h1.style.color = "blue";
// let container = document.querySelector(".container");
// container.append(h1);

// let newElem = document.createElement("div");
// newElem.innerHTML = "<span>I`m here!</span>";
// newElem.classList.add("head");
// newElem.style.fontSize = "bold";

// let container = document.querySelector(".news_container");
// container.prepend(newElem);

// let card = document.createElement("div");
// card.classList.add("card");
// card.style.width = "200px";
// card.style.padding = "10px";
// card.style.textAlign = "center";
// card.style.border = "2px solid darkviolet";
// card.style.borderRadius = "10px";
// card.style.backgroundColor = "lavender";
// let heading = document.createElement("h1");
// heading.style.color = "darkviolet";
// heading.innerText = "Чебурашка";
// let paragraph = document.createElement("p");
// paragraph.style.color = "darkviolet";
// paragraph.style.fontWeight = "bold";
// paragraph.style.fontStyle = "italic";
// paragraph.style.fontSize = "26px";
// paragraph.innerText = "- он такой!";
// let container = document.querySelector(".container");
// card.append(heading, paragraph);
// container.append(card);

// let newDiv = document.createElement("div");
// newDiv.innerHTML = "<h2>Hello, summer</h2>";
// newDiv.children[0].classList.add("head", "head-2");
// newDiv.setAttribute("title", "Подсказка");
// newDiv.style.background = "skyblue";

// let container = document.querySelector(".news_container");
// container.insertAdjacentElement("afterend", newDiv);

// let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
// let container = document.querySelector(".container");

// let output = pets
//   .map(function (pet, i) {
//     return `<span class="pet pet-${i + 1}">${pet}</span>`;
//   })
//   .join("");
// "<span>cat</span><span>dog</span><span>bat</span>"

// let output = pets.reduce((acc, el) => `${acc}<span>${el}</span>`, "");

// container.insertAdjacentHTML("beforeend", output);

let first_name = document.querySelector("#first_name");
let first_name_error = document.querySelector("#first_name_error");

first_name.addEventListener("blur", function () {
  // если пусто
  if (first_name.value === "") {
    first_name_error.innerText = "Введите имя";
    // сделать фон инпута красным
    first_name.style.background = "pink";
    // first_name.style.border = "2px solid pink";
  } else {
    first_name_error.innerText = "";
    first_name.style.background = "yellowgreen";
  }
});
