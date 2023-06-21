// ПРОВЕРКА ИМЕНИ НА ОШИБКИ ВВОДА
let fNameRes = '';
let fName = document.querySelector('#fname');                   // поле для ввода имени
let fnameError = document.querySelector('#fname-p');            // спан для вывода ошибки
fName.addEventListener('blur', function(){
    let value = fName.value;
    let res = /[^a-zа-яA-ZА-ЯёЁ0-9]+/g;
    if(value.length === 0){                                     // Проверка 1. если пользователь ничего не ввел
        fnameError.textContent = 'Введите имя';                 // выводим в спан текст ошибки
        fName.style.backgroundColor = 'hsl(0, 100%, 74%)';      // красим поле ввода в красный
        fName.style.color = 'black';                            // основной текст в черный
    }else if (value.match(/[0-9]/)) {                           // Проверка 2. если пользователь вместе с буквами ввел число             
        fnameError.textContent = 'В имени не должно быть цифр'; // выводим в спан текст ошибки
        fName.style.backgroundColor = 'hsl(0, 100%, 74%)';      // красим поле ввода в красный
        fName.style.color = 'black';                            // основной текст в черный
    }else if(value.length < 2){                                 // Проверка 3. если пользователь ввел менее 2 символов
        fnameError.textContent = 'Имя должно быть не короче двух знаков'; // выводим в спан текст ошибки
        fName.style.backgroundColor = 'hsl(0, 100%, 74%)';      // красим поле ввода в красный
        fName.style.color = 'black';                            // основной текст в черный
    }else if(res.test(value)){                                  // Проверка 4. если пользователь ввел спец.символы
        fnameError.textContent = 'В имени должны быть только буквы'; // выводим в спан текст ошибки
        fName.style.backgroundColor = 'hsl(0, 100%, 74%)';      // красим поле ввода в красный
        fName.style.color = 'black'; 
    }else{                                                      // все 4 проверки пройдены и данные введены верно
        fnameError.textContent = '.';                           // очищаем текст в спане
        fnameError.style.color = 'white';                       // точку красим в белый (чтобы не прыгала форма)
        fName.style.backgroundColor = 'hsl(154, 59%, 51%)';     // красим поле ввода в зеленый 
        fName.style.color = 'white';                            // основной текст в белый
        fNameRes = value;
        console.log(fNameRes)
    }    
});

// ПРОВЕРКА ФАМИЛИИ НА ОШИБКИ ВВОДА
let lNameRes = '';
let lName = document.querySelector('#lname');                   // поле для ввода фамилии
let lnameError = document.querySelector('#lname-p');            // спан для вывода ошибки
lName.addEventListener('blur', function(){
    let value = lName.value;
    let res = /[^a-zа-яA-ZА-ЯёЁ0-9]+/g;
    if(value.length === 0){                                     // Проверка 1. если пользователь ничего не ввел
        lnameError.textContent = 'Введите фамилию';             // выводим в спан текст ошибки
        lName.style.backgroundColor = 'hsl(0, 100%, 74%)';      // красим поле ввода в красный
        lName.style.color = 'black';                            // основной текст в черный
    }else if (value.match(/[0-9]/)) {                           // Проверка 2. если пользователь вместе с буквами ввел число             
        lnameError.textContent = 'В фамилии не должно быть цифр'; // выводим в спан текст ошибки
        lName.style.backgroundColor = 'hsl(0, 100%, 74%)';      // красим поле ввода в красный
        lName.style.color = 'black';                            // основной текст в черный
    }else if(value.length < 5){                                 // Проверка 3. если пользователь ввел менее 5 символов
        lnameError.textContent = 'Фамилия должна быть не короче пяти знаков'; // выводим в спан текст ошибки
        lName.style.backgroundColor = 'hsl(0, 100%, 74%)';      // красим поле ввода в красный
        lName.style.color = 'black';                            // основной текст в черный
    }else if(res.test(value)){                                  // Проверка 4. если пользователь ввел спец.символы
        lnameError.textContent = 'В фамилии должны быть только буквы'; // выводим в спан текст ошибки
        lName.style.backgroundColor = 'hsl(0, 100%, 74%)';      // красим поле ввода в красный
        lName.style.color = 'black';                            // основной текст в черный
    }else{                                                      // все 4 проверки пройдены и данные введены верно
        lnameError.textContent = '.';                           // очищаем текст в спане
        lnameError.style.color = 'white';                       // точку красим в белый (чтобы не прыгала форма)
        lName.style.backgroundColor = 'hsl(154, 59%, 51%)';     // красим поле ввода в зеленый 
        lName.style.color = 'white';                            // основной текст в белый
        lNameRes = value;
        console.log(lNameRes);
    } 
});

// 2 варианта проверки электронной почты на правильность ввода данных
// /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i
// или
// /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/

// ПРОВЕРКА ЭЛЕКТРОННОЙ ПОЧТЫ НА ОШИБКИ ВВОДА
let eMailRes = '';
let eMail = document.querySelector('#email');                   // поле для ввода электронной почты
let eMailError = document.querySelector('#email-p');            // спан для вывода ошибки
eMail.addEventListener('blur', function(){
    let value = eMail.value;
    let res = /^[0-9a-z^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;
    if(value.length === 0){                                     // Проверка 1. если пользователь ничего не ввел
        eMailError.textContent = 'Введите электронную почту';   // выводим в спан текст ошибки
        eMail.style.backgroundColor = 'hsl(0, 100%, 74%)';      // красим поле ввода в красный
        eMail.style.color = 'black';                            // основной текст черный
    }else if (res.test(value)) {                                 // Проверка 2. если пользователь ввел все правильно           
        eMailError.textContent = '.';                           // очищаем текст в спане
        eMailError.style.color = 'white';                       // точку красим в белый (чтобы не прыгала форма)
        eMail.style.backgroundColor = 'hsl(154, 59%, 51%)';     // красим поле ввода в зеленый 
        eMail.style.color = 'white';                            // основной текст в белый
        eMailRes = value;
        console.log(eMailRes);
    }else{                                                      // Проверка 3. если пользователь не ввел в написании знаки "@" и "."
        eMailError.textContent = 'Эл.почта вводится латинскими буквами со знаками "@" и "."'; // выводим в спан текст ошибки
        eMail.style.backgroundColor = 'hsl(0, 100%, 74%)';      // красим поле ввода в красный
        eMail.style.color = 'black';                            // основной текст в черный
    }
    });

// ПРОВЕРКА ПАРОЛЯ НА ПРАВИЛЬНОСТЬ ВВОДА
let pWordRes = '';
let pWord = document.querySelector('#pword');                   // поле для ввода пароля
let pWordError = document.querySelector('#pword-p');            // спан для вывода ошибки
pWord.addEventListener('blur', function(){
    let value = pWord.value;
    let s_letters = "qwertyuiopasdfghjklzxcvbnm";               // Буквы в нижнем регистре
    let b_letters = "QWERTYUIOPLKJHGFDSAZXCVBNM";               // Буквы в верхнем регистре
    let digits = "0123456789";                                  // Цифры
    let specials = "!@#$%^&*()_-+=\|/.,:;[]{}";                 // Спецсимволы
    let is_s = false;                                           // Есть ли в пароле буквы в нижнем регистре
    let is_b = false;                                           // Есть ли в пароле буквы в верхнем регистре
    let is_d = false;                                           // Есть ли в пароле цифры
    let is_sp = false;                                          // Есть ли в пароле спецсимволы
    for (let i = 0; i < value.length; i++) {                                                    
        if (!is_s && s_letters.indexOf(value[i]) != -1) is_s = true;    //Проверяем каждый символ пароля на принадлежность к тому или иному типу 
        else if (!is_b && b_letters.indexOf(value[i]) != -1) is_b = true;
        else if (!is_d && digits.indexOf(value[i]) != -1) is_d = true;
        else if (!is_sp && specials.indexOf(value[i]) != -1) is_sp = true;
        }
        let rating = 0;
            if (is_s) rating++;                                  // Если в пароле есть символы в нижнем регистре, то увеличиваем рейтинг сложности
            if (is_b) rating++;                                  // Если в пароле есть символы в верхнем регистре, то увеличиваем рейтинг сложности
            if (is_d) rating++;                                  // Если в пароле есть цифры, то увеличиваем рейтинг сложности
            if (is_sp) rating++;                                 // Если в пароле есть спецсимволы, то увеличиваем рейтинг сложности                                    
            if (value.length < 6 && rating < 3 || value.length >= 6 && rating == 1) {// Далее идёт анализ длины пароля и полученного рейтинга, и на основании этого готовится текстовое описание сложности пароля
                pWordError.textContent = 'Простой (должны быть цифры, спец.символы и загл.буквы)';   // выводим в спан текст ошибки
                pWord.style.backgroundColor = 'hsl(0, 100%, 74%)';      // красим поле ввода в красный
            }else if (value.length < 6 && rating >= 3 || value.length >= 8 && rating < 3 || value.length >= 6 && rating > 1 && rating < 4) { 
                pWordError.textContent = 'Средний (должны быть цифры, спец.символы и загл.буквы)';              // выводим в спан текст ошибки
                pWord.style.backgroundColor = 'hsl(0, 100%, 74%)';      // красим поле ввода в красный
            }else if (value.length >= 8 && rating >= 3 || value.length >= 6 && rating == 4) {
                pWord.style.backgroundColor = 'hsl(154, 59%, 51%)';     // красим поле ввода в красный
                pWordError.textContent = '.'; 
                pWordError.style.color = 'white';
                pWordRes = value;
                console.log(pWordRes);
            }
    });
    
    /*let btnClick = document.querySelector('#btnClick');
    btnClick.setAttribute('disabled', true);
    btnClick.addEventListener('click', function(){
        if (fNameRes.length < 2){
        btnClick.setAttribute('disabled', true)
        }else{btnClick.removeAttribute('disablled');}
    
    });*/
          
 
 