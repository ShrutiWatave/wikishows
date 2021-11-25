import {validateContact,validateEmail,validatePassword} from './functions.js';

const form = document.getElementById('signup');

form.addEventListener("submit",(e)=>{
    if(validatePassword() && validateContact() && validateEmail()){
    }
    else{
        e.preventDefault();
    }
})