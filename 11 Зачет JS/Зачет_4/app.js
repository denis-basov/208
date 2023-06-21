
// Check FirstName

let firstName= document.getElementById("fname");
let firstNameValidation=function(){
   firstNameValue=firstName.value.trim(); 
   validFirstName=/^[а-яА-ЯёЁa-zA-Z0-9]+$/;
   firstNameErr=document.getElementById('fname-p');
   if(firstNameValue=="")
   {
    firstNameErr.innerHTML="Нужно ввести имя";
   }else if(!validFirstName.test(firstNameValue)){
     firstNameErr.innerHTML="Имя нужно ввести без пробелов";
   }else{
     firstNameErr.innerHTML="";
     return true;
    
   }
}
firstName.oninput=function(){
   
   firstNameValidation();
}


// Check LastName

  let lastName= document.getElementById("lname");

  let lastNameValidation= function(){

   lastNameValue=lastName.value.trim(); 
   validLastName=/^[а-яА-ЯёЁa-zA-Z0-9]+$/;
   lastNameErr=document.getElementById('lname-p');

   if(lastNameValue=="")
   {
    lastNameErr.innerHTML="Нужно ввести фамилию";

   }else if(!validLastName.test(lastNameValue)){
     lastNameErr.innerHTML="Фамилия должна быть только строкой без пробелов";
   }else{
     lastNameErr.innerHTML="";
     return true;
   }
  }

lastName.oninput=function(){

   lastNameValidation();
}

// Check Email

// Email Address Validation
 let emailAddress= document.getElementById("email");;
 let emailAddressValidation= function(){

  emailAddressValue=emailAddress.value.trim(); 
   validEmailAddress=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   emailAddressErr=document.getElementById('email-p');

   if(emailAddressValue=="")
   {
    emailAddressErr.innerHTML="Нужно ввести адрес электронной почты ";

   }else if(!validEmailAddress.test(emailAddressValue)){
     emailAddressErr.innerHTML="Адрес электронной почты должен быть в допустимом формате с символом @.";
   }else{
     emailAddressErr.innerHTML="";
     return true;
   }

 }

emailAddress.oninput=function(){

   emailAddressValidation();
}

//Password validation

// Password Validation
let password= document.getElementById("pword");;

let passwordValidation = function(){

  passwordValue=password.value.trim(); 
   validPassword=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/
   
   passwordErr=document.getElementById('pword-p');

   if(passwordValue=="")
   {
    passwordErr.innerHTML="Введите пароль";
   }else if(!validPassword.test(passwordValue)){
     passwordErr.innerHTML="Пароль должен содержать как минимум один верхний регистр, нижний регистр, цифру, специальные символы  и быть не менее 8 символов.";
   }
   else{
     passwordErr.innerHTML="";
     return true;
   }
}

password.oninput=function(){

   passwordValidation();

 confirmPasswordValidation();
   
}

//Confirm password
let confirmPassword= document.getElementById("confirmPassword");;

let confirmPasswordValidation=function(){
   confirmPasswordValue=confirmPassword.value.trim(); 
   
   confirmPasswordErr=document.getElementById('pword-conf');
   if(confirmPasswordValue==""){
       confirmPasswordErr.innerHTML="Требуется подтверждение пароля";
   }

  else if(confirmPasswordValue!=password.value){
     confirmPasswordErr.innerHTML="Подтверждение пароля не совпадает";
   }
   else{
     confirmPasswordErr.innerHTML="";
     return true;
   }
}

confirmPassword.oninput=function(){

 confirmPasswordValidation();
   
}

document.getElementById("registrationForm").onsubmit=function(e){

  
  firstNameValidation();
  lastNameValidation();
  emailAddressValidation();
  passwordValidation();
  confirmPasswordValidation();

  if(firstNameValidation()==true && 
    lastNameValidation()==true && 
    emailAddressValidation() == true &&
    passwordValidation()==true && 
    confirmPasswordValidation()==true){
    return true;
  }else{
    return false;
  }
}