document.getElementById("fname-p").addEventListener("submit", function(event){	
let nameInput = document.getElementById("fname");
let namePattern = /^[A-Za-zА-Яа-яЁё]{2,30}$/;
if (!namePattern.test(nameInput.value)) {
	alert("Введите, пжл, корректное имя");
	event.preventDefault();
}
});

document.getElementById("lname-p").addEventListener("submit", function(event){	
  let nameInput = document.getElementById("lname");
  let namePattern = /^[A-Za-zА-Яа-яЁё]{2,30}$/;
  if (!namePattern.test(nameInput.value)) {
    alert("Введите, пжл, корректную фамилию");
    event.preventDefault();
  }
  });


  let myInput = document.getElementById("psw");
  let letter = document.getElementById("letter");
  let capital = document.getElementById("capital");
  let number = document.getElementById("number");
  let length = document.getElementById("length");
 // При нажатии на поле Пароль, отображается окно сообщения
myInput = function() {
  document.getElementById("message").style.display = "block"; 
}
  // При нажатии за пределами поля пароля, скрывается окно сообщения
myInput = function() {
    document.getElementById("message").style.display = "none";
  }
  
  // Если вводить что-то в поле пароля
  myInput = function() {
    // Проверка строчных букв
    let lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)) {
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
  }
  
    // Проверка заглавных букв
    let upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) {
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }
  
    // Проверка чисел
    let numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) {
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }
  
    // Проверить длину
    if(myInput.value.length >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
    } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }
  }