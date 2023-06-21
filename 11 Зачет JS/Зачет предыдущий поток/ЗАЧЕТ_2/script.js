// Validation conditions:
// - empty fields
// - email format (@ and .), allows digits after ., works only for latin characters
// - password: 8+ characters, checks for minimum 1 lower case letter, 1 upper case letter, 1 numeric character
// 'submit' button works only if validation completes successfully

document.addEventListener('DOMContentLoaded', handleForm());

function handleForm() {
    const inputFields = document.querySelectorAll('form input');
    // validation status object (general status, empty field status, element)
    const isValid = {
        'First Name': {status: false},
        'Last Name': {status: false},
        Email: {status: false},
        Password: {status: false}
    };

    inputFields.forEach(input => input.addEventListener('blur', handleBlur));
    inputFields.forEach(input => input.addEventListener('change', handleInputChange));
    document.querySelector('form button').addEventListener('click', handleSubmit);

    function handleSubmit(e) {
        let invalidCount = 0;
        // check if any field is empty on submit button click and show error visuals for empty fields
        inputFields.forEach((item, index) => {
            if (isEmpty(item, Object.keys(isValid)[index])) isValid[Object.keys(isValid)[index]].status = false;
        });
        // final check if all fields are valid before submiit
        for (const key in isValid) {
            isValid[key]['status'] === false && invalidCount++;
        }
        // if any field failed validation --> don't submit form
        invalidCount > 0 && e.preventDefault();
    }

    function handleBlur(e) {
        e.target.getAttribute('id') === "fname" && validateForm(e.target, true, 'First Name');
        e.target.getAttribute('id') === "lname" && validateForm(e.target, true, 'Last Name');
        e.target.getAttribute('id') === "email" && validateForm(e.target, true, 'Email');
        e.target.getAttribute('id') === "pword" && validateForm(e.target, true, 'Password');

        function validateForm(elem, isRequied, fieldName) {
            if (isRequied) {
                if (isEmpty(elem, fieldName)) {
                    isValid[fieldName]['elem'] = elem;
                    return isValid[fieldName]['status'] = false;
                }
            }           
            if (fieldName === 'Password' && !validatePassword(elem, fieldName)) {
                isValid[fieldName]['elem'] = elem;
                return isValid[fieldName]['status'] = false;
            }
            if (fieldName === 'Email' && !validateEmail(elem, fieldName)) {
                isValid[fieldName]['elem'] = elem;
                return isValid[fieldName]['status'] = false;
            }
          
            return isValid[fieldName]['status'] = true;
        }
    }
    // check if field is empty
    function isEmpty(elem, fieldName) {
        if (!elem.value) {
            showError(elem, `${fieldName} cannont be empty`);
            return true;
        } else return false;
    }
    // password specific validation checks
    function validatePassword(elem, fieldName) {
        if (fieldName === 'Password' && elem.value.length < 8) {
            showError(elem, `${fieldName} must be at least 8 characters`);
            return false;
        }

        let countUpperCase = 0;
        let countLowerCase = 0;
        let countNumbers = 0;

        elem.value.match(/.*[0-9]+.*/) && countNumbers++;
        elem.value.split('').forEach(item => item == item.toLowerCase() && countLowerCase++);
        elem.value.split('').forEach(item => {
            if (item == item.toUpperCase() && !item.match(/[0-9]/)) countUpperCase++;
        });

        if (countUpperCase === 0 || countLowerCase === 0 || countNumbers === 0) {
            showError(elem, `${fieldName} must contain: a minimum of 1 lower case letter [a-z], 
                1 upper case letter [A-Z] and 1 numeric character`);
            return false;
        }
        
        return true;
    }
    // email specific validation checks
    function validateEmail(elem, fieldName) {
        if (!elem.value.match(/[-.\w\d]+@([\w-]+\.)+\w+/g)) {
            showError(elem, `${fieldName} must contain '@' and '.' characters. Example: email@somedomain.com`);
            return false;
        }

        return true;
    }
    // function handles 'error' visuals (message, colors etc) if validation fails
    function showError(elem, message) {
        elem.nextElementSibling.textContent = message;
        elem.classList.add('error', 'isRed');
    }
    // function removes 'error' visuals (message, colors etc)
    function handleInputChange(e) {
        if (e.target.classList.contains('error')) {
            e.target.classList.remove('error');
            e.target.nextElementSibling.textContent = '';
            e.target.classList.remove('error', 'isRed');
        }
    }
}