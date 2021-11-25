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

function validateContact(){
    var contact = document.getElementById("contact").value;
    console.log("Checked Contact");
    if(contact.length == 14){
        return true;
    }
    else{
        alert("Please correct contact no.");
        return false;
    }
}

export {validateContact,validateEmail,validatePassword};