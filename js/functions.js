function validateEmail()
{
   var email = document.getElementById("email").value;
   var regx = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+).([a-z]{2,10})(\.[a-z]{2,5})?$/;
   console.log("Checked Email");
   if(regx.test(email))
   {
      return true;
   }
   else
   {
        alert("Please enter correct email.");
        return false;
   }
}

function validatePassword(){
    var password = document.getElementById("pass").value;
    console.log("Checked Password");
    if(password.length < 8){
        alert("Please enter password longer than 4 characters.");
        return false;
    }
    else{
        return true;
    }
}

function confirmPassword(){
    var password = document.getElementById("pass").value;
    var pass_con = document.getElementById("pass_con").value;
    var result = password.localeCompare(pass_con);
    console.log("Matched Password")
    if(result != 0){
        alert("Passwords do not match.");
        return false;
    }
    else{
        return true;
    }
}

function validateContact(){
    var contact = document.getElementById("contact").value;
    console.log("Checked Contact");
    if(contact.length == 14 && !isNaN(contact.slice(4))){
        return true;
    }
    else{
        alert("Please correct contact no.");
        return false;
    }
}

export {validateContact,validateEmail,validatePassword,confirmPassword};