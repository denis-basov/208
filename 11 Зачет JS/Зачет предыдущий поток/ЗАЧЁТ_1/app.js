let firstName = document.querySelector ('#fname');
let lastName = document.querySelector ('#lname');
let eMail = document.querySelector ('#email');
let password = document.querySelector ('#pword');
let firstNameSpan = document.querySelector ('#fname-p');
let lastNameSpan = document.querySelector ('#lname-p');
let eMailSpan = document.querySelector ('#email-p');
let passwordSpan = document.querySelector ('#pword-p');

firstName.addEventListener('focus', function() {
    firstName.style.background = '#f0f0f0';
    firstName.placeholder = 'First Name';
    firstNameSpan.textContent = '';
});

firstName.addEventListener('blur', function() {
    firstName.style.background = 'transparent';
    let value = firstName.value;
    if (value.length === 0) {
        firstName.style.background = '#ffdede'
        firstName.placeholder = 'Please, input your First Name.';
        console.log('input name')
    } else if (value.length < 2){
        firstName.style.background = '#ffdede'
        firstNameSpan.textContent = 'Entered First Name is too short.';
        console.log('nope');
    }
});

lastName.addEventListener('focus', function() {
    lastName.style.background = '#f0f0f0';
    lastName.placeholder = 'Last Name';
    lastNameSpan.textContent = '';
});

lastName.addEventListener('blur', function() {
    lastName.style.background = 'transparent';
    let value = lastName.value;
    if (value.length === 0) {
        lastName.style.background = '#ffdede'
        lastName.placeholder = 'Please, input your Last Name.';
    } else if (value.length < 2){
        lastName.style.background = '#ffdede'
        lastNameSpan.textContent = 'Entered Last Name is too short.';
    }
});

eMail.addEventListener('focus', function() {
    eMail.style.background = '#f0f0f0';
    eMail.placeholder = 'Please, input your e-mail.';
    eMailSpan.textContent = '';
});

eMail.addEventListener('blur', function() {
    eMail.style.background = 'transparent';
    let value = eMail.value;
    if (value.length === 0) {
        eMail.style.background = '#ffdede'
        eMail.placeholder = 'Please, input your e-mail.';
    } else if (value.length < 2){
        eMail.style.background = '#ffdede'
        eMailSpan.textContent = 'Entered e-mail is too short.';
    }
});

password.addEventListener('focus', function() {
    password.style.background = '#f0f0f0';
    password.placeholder = 'Please, input your password.';
    passwordSpan.textContent = '';
});

password.addEventListener('blur', function() {
    password.style.background = 'transparent';
    let value = password.value;
    if (value.length === 0) {
        password.style.background = '#ffdede'
        password.placeholder = 'Please, input your password.';
    } else if (value.length < 5){
        password.style.background = '#ffdede'
        passwordSpan.textContent = 'Entered password is too short.';
    }
});

// lastName.addEventListener('focus', function() {
//     lastName.style.background = '#f0f0f0';
// });

// lastName.addEventListener('blur', function() {
//     lastName.style.background = 'transparent';
//     let value = lastName.value;
// });
// eMail.addEventListener('focus', function() {
//     eMail.style.background = '#f0f0f0';
// });

// eMail.addEventListener('blur', function() {
//     eMail.style.background = 'transparent';
//     let value = eMail.value;
// });
// password.addEventListener('focus', function() {
//     password.style.background = '#f0f0f0';
// });

// password.addEventListener('blur', function() {
//     password.style.background = 'transparent';
//     let value = password.value;
// });
// console.log('done');