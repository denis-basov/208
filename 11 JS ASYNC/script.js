// function getName() {
//   return "Bob";
// }

// function sayHi() {
//   console.log(`Hello, ${getName()}`);
// }

// sayHi();

// console.log("hello");
// console.log("summer");

// console.log("11111111111");
// setTimeout(function () {
//   console.log("22222222222");
// }, 5000);
// console.log("33333333333");

// async & await + fetch
let countryContainer = document.querySelector(".countries");
let country = "russia";

let showCountry = function (data) {
  let output = `
    <div class="country">
      <div class="country-img">
        <img src="${data.coatOfArms.svg}" alt="Герб страны ${data.translations.rus.common}">
        <img src="${data.flags.svg}" alt="${data.flags.alt}">
      </div>
      <h2>${data.translations.rus.common}</h2>
      <p>Площадь: ${data.area} кв/км</p>
      <p>Население: ${data.population} чел</p>
      <p>Регион: ${data.region}</p>
      <p>Столица: ${data.capital.join(", ")}</p>
      <h3>Граничащие страны:</h3>
      <p>${data.borders}</p>
      <h3>Временные зоны:</h3>
      <p>${data.timezones.join(", ")}</p>
    </div>
  `;
  countryContainer.insertAdjacentHTML("beforeend", output);
};

let getCountry = async function (country) {
  let response = await fetch(`https://restcountries.com/v3.1/name/${country}`);
  let data = (await response.json())[0];
  // console.log(data);

  // // если граничащие страны есть, формируем строку из массива
  // if (data.borders) {
  //   data.borders = data.borders.join(", ");
  // } else {
  //   // если границ нет, записываем просто текст об этом
  //   data.borders = "Граничащих стран нет";
  // }

  data.borders ? (data.borders = data.borders.join(", ")) : (data.borders = "Граничащих стран нет");

  showCountry(data);
};
getCountry(country);
getCountry("italy");
getCountry("australia");
