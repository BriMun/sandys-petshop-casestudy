function validate() {
    var fname = document.getElementById('fName').value;
    var lname = document.getElementById('lName').value;
    var userEmail = document.getElementById('userEmail').value;
    var Message = document.getElementById('Message').value;
   

    var fnamecheck = /^[a-zA-Z\- ]+$/;
    var lnamecheck = /^[a-zA-Z\- ]+$/;
    var userEmailcheck = /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
    

    if(fnamecheck.test(fname)){
    document.getElementById("fName").style.backgroundColor = "";
    } else {
    document.getElementById("fNameError").innerHTML = "* Required ";
    document.getElementById("fName").style.borderColor = "#FDA07F";
    return false;
    }

    if(lnamecheck.test(lname)){
    document.getElementById("lName").style.backgroundColor = "";
    } else {
    document.getElementById("lNameError").innerHTML = "* Required ";
    document.getElementById("lName").style.borderColor = "#FDA07F";
    return false;
    }

    if(userEmailcheck.test(userEmail)) {
        document.getElementById("userEmail").style.border = "";
    } else {
        document.getElementById("userEmailError").innerHTML = "* Required ";
        document.getElementById("userEmail").style.borderColor = "#FDA07F";
    return false;
    }

    if(document.getElementById("Message").value != "") {
        document.getElementById("MessageError").style.border = "";   
    } else {
        document.getElementById("MessageError").innerHTML = "* Required ";
        document.getElementById("Message").style.borderColor = "#FDA07F";
    return false;
    }


    var formData = {
            'fName'              : $('input[name=fName]').val(),
            'lName'              : $('input[name=lName]').val(),
            'userEmail'              : $('input[name=userEmail]').val(),
            'Message'              : $('textarea[name=Message]').val()
           
        };

    jQuery.ajax({
            url: "email.php",
            data: formData,
            type: "POST",
            success:function(data){
                $("#success").html(data); 
            },
            error:function (){}
        });
        $('input[type="text"], textarea').val('');
        $('input[type="text"], textarea').removeAttr("style");
        $('#fNameError, #lNameError, #userEmailError, #MessageError').empty();
        
    }