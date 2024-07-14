function validate() {
    var username1 = document.getElementById("username1").value;
    var studentId = document.getElementById("studentId").value;

    var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var email1 = document.getElementById("email1").value;

    var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,12}$/;
    var pwd1 = document.getElementById("password1").value;

    var conpwd1 = document.getElementById("confirmPassword1").value;

    var dobformat = /^(0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])[\/\-]\d{4}$/;
    var dob1 = document.getElementById("dob").value;

    var add1 = document.getElementById("address1").value;
    
    var phoneformat = /^[0-9]{10}$/;
    var phn1 = document.getElementById("phn1").value;
    

    if (studentId==""){
        alert("Enter Your Student ID.");
        return false;
        
    }else if (username1==""){
        alert("Please Type Your User Name.");
        return false;
        
    }else if (email1=="") {
        alert("Enter Your Email Address.");
        return false;
    }else if (!email1.match(emailformat)) {
        alert("Enter correct formet(eg.XXXXX@gmail.com).");
        return false;
    }else if (pwd1=="") {
        alert("Enter Your Password");
        return false;
    }else if (!pwd1.match(passformat)) {
        alert("Invalid password! Password must have contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character (#,$,%,& etc.) ");
        return false;
    }else if (conpwd1=="") {
        alert("Re-type Your password");
        return false;

    }else if (pwd1 !=conpwd1) {
        alert("password don't match");
        return false;
    }else if (dob1=="") {
        alert("Enter Your Age.");
        return false;
    }else if (!dob1.match(dobformat)) {
        alert("Invalid Data Format (eg. MM/DD/YYYY");
        return false;
    }else if (add1=="") {
        alert("Enter Your Address (eg. 5/520 Collins Stree, Hobart, TAS).");
        return false;
    }else if (phn1=="") {
        alert("Enter Your Phone Number.");
        return false;
    }else if (!phn1.match(phoneformat)) {
        alert("Invalid Phone Number. Follow the example (eg. 04XXXXXXXX)");
        return false;
    }
}


/*
this is for staff Registration
*/

function validation() {
    var username2 = document.getElementById("username2").value;
    var staffId = document.getElementById("staffId").value;

    var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var email2 = document.getElementById("email2").value;

    var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,12}$/;
    var pwd2 = document.getElementById("password2").value;

    var conpwd2 = document.getElementById("confirmPassword2").value;

    var add2 = document.getElementById("address2").value;

    var qulification = document.getElementById("qualification").value;
    var expertise = document.getElementById("expertise").value;
    
    var phoneformat = /^[0-9]{10}$/;
    var phn2 = document.getElementById("phn2").value;
    

    
    if (staffId==""){
        alert("Enter Your Staff ID.");
        return false;
        
    }else if (username2==""){
        alert("Please Type Your User Name.");
        return false;
        
    }else if (email2=="") {
        alert("Enter Your Email Address.");
        return false;
    }else if (!email2.match(emailformat)) {
        alert("Enter correct formet(eg.XXXXX@gmail.com).");
        return false;
    }else if (pwd2=="") {
        alert("Enter Your Password");
        return false;
    }else if (!pwd2.match(passformat)) {
        alert("Invalid password! Password must have contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character (#,$,%,& etc.) ");
        return false;
    }else if (conpwd2=="") {
        alert("Re-type Your password");
        return false;

    }else if (pwd2 !=conpwd2) {
        alert("password don't match");
        return false;
    }else if (add2=="") {
        alert("Enter Your Address (eg. 5/520 Collins Stree, Hobart, TAS).");
        return false;
    }else if (qulification=="") {
        alert("Enter your Qualification eg.(PhD in Computer Science");
        return false;
    }else if (expertise=="") {
        alert("Enter Your Expertise eg.(Web development)");
        return false;
    }else if (phn2=="") {
        alert("Enter Your Phone Number.");
        return false;
    }else if (!phn2.match(phoneformat)) {
        alert("Invalid Phone Number. Follow the example (eg. 04XXXXXXXX)");
        return false;
    }
}

