 // Hide Show Breed JS function Begin
 /*function breed(x) {
    if(x == 0)
    document.getElementById('breed').style.visibility='hidden';
    else
    document.getElementById('breed').style.visibility='visible';
    return;
} */

// Hide Show Breed JS function End
function show1(){
    document.getElementById('breed').style.visibility ='hidden';
  }
  function show2(){
    document.getElementById('breed').style.visibility = 'visible';
  }


// Begin Validation Script
function validate(){

    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var address = document.getElementById('address').value;
    var city = document.getElementById('city').value;
    var zip = document.getElementById('zip').value;
    var pname = document.getElementById('pname').value;
    

    var fnamecheck = /^[a-zA-Z\- ]+$/;
    var lnamecheck = /^([A-Z][A-Za-z']+ )*[A-Z][A-Za-z']+$/;
    var emailcheck = /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
    var phonecheck = /^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/;
    var citycheck = /^[a-zA-Z\- ]+$/;
    var zipcheck = /^\d{5}(\-\d{4})?$/;
    var pnamecheck = /^[a-zA-Z\- ]+$/;

    if(fnamecheck.test(fname)){
        document.getElementById('fnameerror').innerHTML = " ";
    } else {
        document.getElementById('fnameerror').innerHTML = "* Required ";
        return false;
    }
    if(lnamecheck.test(lname)){
        document.getElementById('lnameerror').innerHTML = " ";
    } else {
        document.getElementById('lnameerror').innerHTML = "* Required ";
        return false;
    }
    if(emailcheck.test(email)){
        document.getElementById('emailerror').innerHTML = " ";
    } else {
        document.getElementById('emailerror').innerHTML = " * Required ";
        return false;
    }
    if(phonecheck.test(phone)){
        document.getElementById('phoneerror').innerHTML = " ";
    } else {
        document.getElementById('phoneerror').innerHTML = "* Required ";
        return false;
    }
    if(citycheck.test(city)){
        document.getElementById('cityerror').innerHTML = " ";
    } else {
        document.getElementById('cityerror').innerHTML = "* Required ";
        return false;
    }
    if(zipcheck.test(zip)){
        document.getElementById('ziperror').innerHTML = " ";
    } else {
        document.getElementById('ziperror').innerHTML = "* Required ";
        return false;
    }
    if(pnamecheck.test(pname)){
        document.getElementById('pnameerror').innerHTML = " ";
    } else {
        document.getElementById('pnameerror').innerHTML = "* Required ";
        return false;
    }

    if(document.querySelector('input[name="pettype"]:checked') == null) {
        document.getElementById('radioerror').innerHTML = "*";
        return false;
    }
}    
    

 

//END Validation Script