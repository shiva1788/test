
function validateForm() {
    let valid = true;
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    let pass = document.getElementById('password').value
    let experience = document.getElementById('experience').value;
    let gender = document.querySelector('input[name="gender"]:checked'); // it can used to select a single element 
    let hobbies = document.querySelectorAll('input[name="hobbies"]:checked'); //it can be used to select all element

    // Name validation
    const nameRegex = /^[A-Za-z]+$/;
    if (!name || !nameRegex.test(name)) {
        document.getElementById('nameError').innerText = "Name is required.";
        valid = false;
    } else {
        document.getElementById('nameError').innerText = "";
    }

    // Email validation
    const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!email || !emailRegex.test(email)) {
        document.getElementById('emailError').innerText = "Valid email is required.";
        valid = false;
    } else {
        document.getElementById('emailError').innerText = "";
    }

    // Phone number validation
    const numbRegex = /^\d{10}$/;
    if (!phone || !numbRegex.test(phone)) {
        document.getElementById('phoneError').innerText = "Phone number is required.";
        valid = false;
    } else {
        document.getElementById('phoneError').innerText = "";
    }
    const pwd = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    if(!pass || !pwd.test(pass)){
        document.getElementById('pwdError').innerText = "pwd is required.";
        valid = false;
    }else {
        document.getElementById('pwdError').innerText = "";
    }
    if (!experience) {
        alert("Experience is required.");
        valid = false;
    }
    if (!gender) {
        alert("Gender is required.");
        valid = false;
    }

   
    if (hobbies.length === 0) {
        alert("At least one hobby must be selected.");
        valid = false;
    }

    return valid;
}
