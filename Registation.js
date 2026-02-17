//adding birth date
document.addEventListener("DOMContentLoaded", function(){
let today= new Date();
let month = today.getMonth() + 1; 
let year = today.getUTCFullYear();
let tdate = today.getDate();

if(month < 10){
    month = "0" + month;
}

if(tdate < 10){
    tdate = "0" + tdate;
}

let lastDate = year + "-" + month + "-" + tdate;
document.getElementById("dob").setAttribute("max", lastDate);
});

//registation functions
function registation() {
    const Name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();

    // Patterns for validation
    const namePattern = /^[a-zA-Z\s]+$/;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // First name validation
    if (Name === "") {
        alert("Name is required.");
        return false;
        
    } else if (!namePattern.test(Name)) {
        alert("Name must contain only letters.");
        return false;
    }

    // Email validation
    if (email === "" || !emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Address validation
    if (address === "") {
        alert("Your address is required.");
        return false;
    }
}


//password confirmation
document.querySelector('.submit').onclick=function(){

    let password=document.querySelector(".password").value,
        confirmPassword=document.querySelector(".con-password").value;

    if(password == ""){
        alert("Enter a Password!");
    }
    else if(password!=confirmPassword){
        alert("Password doesn't match. Try again!");
        return false;
    }
    else if(password==confirmPassword){
        var response = confirm("registation Successfully! Go to the Home page and Log In");
        
    }
    return true;
}

