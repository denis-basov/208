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
