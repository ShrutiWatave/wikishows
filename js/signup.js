import {validateContact,validateEmail,validatePassword,confirmPassword} from './functions.js';

const form = document.getElementById('signup');

form.addEventListener("submit",(e)=>{
    if(validatePassword() && validateContact() && validateEmail() && confirmPassword()){
    }
    else{
        e.preventDefault();
    }
})