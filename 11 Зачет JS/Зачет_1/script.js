//first name
const fnameP = document.querySelector("#fname-p");
const firstName = document.querySelector("#fname");
firstName.addEventListener("blur", () => {
    //console.log(firstName.value);
    //console.log(/^[a-z а-я'-]+$/i.test(firstName.value));
    if(firstName.value !== "" && /^[a-z а-я'-]+$/i.test(firstName.value)){
        firstName.style.background = "#cdf1c4";
        fnameP.innerText = "";
    }else if(firstName.value === ""){
        firstName.style.background = "#f99393";
        fnameP.innerText = "Поле не должно быть пустым!";
    }else{
        firstName.style.background = "#f99393";
        fnameP.innerText = "Имя не должно содержать специальные символы или цифры!";
    }
});


//last name
const lnameP = document.querySelector("#lname-p");
const lastName = document.querySelector("#lname");
lastName.addEventListener("blur", () => {
    //console.log(lastName.value);
    //console.log(/^[a-z а-я'-]+$/i.test(lastName.value));
    if(lastName.value !== "" && /^[a-z а-я'-]+$/i.test(lastName.value)){
        lastName.style.background = "#cdf1c4";
        lnameP.innerText = "";
    }else if(lastName.value === ""){
        lastName.style.background = "#f99393";
        lnameP.innerText = "Поле не должно быть пустым!";
    }else{
        lastName.style.background = "#f99393";
        lnameP.innerText = "Фамилия не должна содержать специальные символы или цифры!";
    }
});


//email
//должно содержать @
const emailP = document.querySelector("#email-p");
const email = document.querySelector("#email");
email.addEventListener("blur", () => {
    //console.log(email.value);
    if(email.value.includes("@")){ 
        email.style.background = "#cdf1c4";
        emailP.innerText = "";
    }else if(email.value === ""){
        email.style.background = "#f99393";
        emailP.innerText = "Поле не должно быть пустым!";
    }else{
        email.style.background = "#f99393";
        emailP.innerText = "Email должен содержать @!";
    }
});


//password
//должен содержать не менее 8 символов,цифры,буквы
const pwordP = document.querySelector("#pword-p");
const password = document.querySelector("#pword");
password.addEventListener("blur", () => {
    //console.log(password.value);
    //console.log(/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/.test(password.value));
    if(/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/.test(password.value)){
        password.style.background = "#cdf1c4";
        pwordP.innerText = "";
    }else if(password.value === ""){
        password.style.background = "#f99393";
        pwordP.innerText = "Поле не должно быть пустым!";
    }else{
        password.style.background = "#f99393";
        pwordP.innerText = "Пароль должен быть не менее 8 символов, а также содержать буквы, цифры и спец. символы!";
    }
});