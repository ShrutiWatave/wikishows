import {validateContact,validateEmail,validatePassword,confirmPassword} from './functions.js';

const form = document.getElementById('signup');

form.addEventListener("submit",(e)=>{
    if(validateEmail() && validatePassword() && confirmPassword() && validateContact()){
    }
    else{
        e.preventDefault();
    }
})