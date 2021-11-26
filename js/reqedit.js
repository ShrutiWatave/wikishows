import {validateEmail} from './functions.js';

const form = document.getElementById('editreq');

form.addEventListener("submit",(e)=>{
    if(validateEmail()){
    }
    else{
        e.preventDefault();
    }
})