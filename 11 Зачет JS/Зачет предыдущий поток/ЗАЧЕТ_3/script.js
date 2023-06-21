const fname = document.querySelector('#fname');
const lname = document.querySelector('#lname');
const email = document.querySelector('#email');
const pword = document.querySelector('#pword');
const fnameErr = document.querySelector('#fname-p');
const lnameErr = document.querySelector('#lname-p');
const emailErr = document.querySelector('#email-p');
const pwordErr = document.querySelector('#pword-p');
const btn = document.querySelector('#btn');
const letters = /^[A-Za-z]+$/;
const at = '@';

fname.addEventListener('blur', () => {
    if(fname.value == '') {
        fnameErr.textContent = "User Name can't be blank";
        fnameErr.style.color = 'red';
    } else if (fname.value.length > 25) {
        fnameErr.textContent = "User Name can't be more than 24 characters long";
        fnameErr.style.color = 'red';
    } else if (fname.value.length < 2) {
        fnameErr.textContent = "User Name can't be less than 2 letters";
        fnameErr.style.color = 'red';
    } else if (!fname.value.match(letters)) {
        fnameErr.textContent = "User name must contain only Latin letters";
        fnameErr.style.color = 'red';
    } else {
        fnameErr.textContent = "Valid User Name!";
        fnameErr.style.color = 'green';
    }
});

lname.addEventListener('blur', () => {
    if(lname.value == '') {
        lnameErr.textContent = "Last Name can't be blank";
        lnameErr.style.color = 'red';
    } else if (lname.value.length < 2) {
        lnameErr.textContent = "Last Name can't be less than 2 letters";
        lnameErr.style.color = 'red';
    } 
    else if (lname.value.length > 25) {
        lnameErr.textContent = "Last Name can't be more than 24 characters long";
        lnameErr.style.color = 'red';
    } else if (!lname.value.match(letters)) {
        lnameErr.textContent = "Last name must contain only Latin letters";
        lnameErr.style.color = 'red';
    } else {
        lnameErr.textContent = "Valid Last Name!";
        lnameErr.style.color = 'green';
    }
});

email.addEventListener('blur', () => {
    if(email.value == '') {
        emailErr.textContent = "Email field can't be blank";
        emailErr.style.color = 'red';
    } else if (!email.value.match(at)) {
        emailErr.textContent = "Email must include @";
        emailErr.style.color = 'red';
    } else if (email.value[email.value.length - 1] === at) {
        emailErr.textContent = "Email can't finish with @";
        emailErr.style.color = 'red';
    } else {
        emailErr.textContent = "Valid email address!";
        emailErr.style.color = 'green';
    }
});

pword.addEventListener('blur', () => {
    if(pword.value == '') {
        pwordErr.textContent = "Password field can't be blank";
        pwordErr.style.color = 'red';
    } else if (pword.value.length > 0 && pword.value.length < 6) {
        pwordErr.textContent = "Password must be at least 6 characters long";
        pwordErr.style.color = 'red';
    } else if (pword.value.length > 15) {
            pwordErr.textContent = "Password must be less than 15 characters ";
            pwordErr.style.color = 'red';
    } else {
        pwordErr.textContent = 'Valid password';
        pwordErr.style.color = 'green';
    }
});
