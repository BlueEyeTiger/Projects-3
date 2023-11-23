const form = document.getElementById('form');
const ime = document.getElementById('ime');
const prezime = document.getElementById('prezime');
const ulica = document.getElementById('ulica');
const grad = document.getElementById('grad');
const datum = document.getElementById('datum');
const email = document.getElementById('email');
const username = document.getElementById('username');
const password1 = document.getElementById('password1');
const password2 = document.getElementById('password2');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {

    const imeValue = ime.value.trim();
    const prezimeValue = prezime.value.trim();
    const ulicaValue = ulica.value.trim();
    const gradValue = grad.value.trim();
    const datumValue = datum.value.trim();
    const emailValue = email.value.trim();
    const usernameValue = username.value.trim();
    const passwordValue = password1.value.trim();
    const password2Value = password2.value.trim();


    if(imeValue === '') {
        setError(ime, 'Ime je obavezno!');
    } else {
        setSuccess(ime);
    }

    if(prezimeValue === '') {
        setError(prezime, 'Prezime je obavezno!');
    } else {
        setSuccess(prezime);
    }

    if(ulicaValue === '') {
        setError(ulica, 'Ulica i kućni broj su obavezni!');
    } else {
        setSuccess(ulica);
    }

    if(gradValue === '') {
        setError(grad, 'Grad je obavezan!');
    } else {
        setSuccess(grad);
    }

    if(datumValue === '') {
        setError(datum, 'Datum je obavezan!');
    } else {
        setSuccess(datum);
    }

    if(emailValue === '') {
        setError(email, 'E-mail je obavezan!');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Unesite ispravnu e-mail adresu!');
    } else {
        setSuccess(email);
    }
    
    if(usernameValue === '') {
        setError(username, 'Korisničko ime je obavezno!');
    } else {
        setSuccess(username);
    }

    if(passwordValue === '') {
        setError(password1, 'Lozinka je obavezna!');
    } else if (passwordValue.length < 10 ) {
        setError(password1, 'Lozinka mora imati najmanje 10 znamenaka!')
    } else {
        setSuccess(password1);
    }

    if(password2Value === '') {
        setError(password2, 'Potvrdite lozinku!');
    } else if (password2Value !== passwordValue) {
        setError(password2, "Lozinke se ne podudaraju!");
    } else {
        setSuccess(password2);
    }

}
