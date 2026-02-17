console.log("Update Details function triggered.");

function updateDetails() {
    const Name = document.getElementById('fname').value.trim();
    const email = document.getElementById('email').value.trim();
    const contact = document.getElementById('contact').value.trim();
    const address = document.getElementById('address').value.trim();

    //const currentPassword = document.getElementById('current-password').value.trim();
    const newPassword = document.getElementById('new-password').value.trim();
    const confirmPassword = document.getElementById('confirm-password').value.trim();

    // Patterns for validation
    const namePattern = /^[a-zA-Z\s]+$/;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const contactPattern = /^\+94\d{9}$/;

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

    // Contact number validation
    if (contact === "" || !contactPattern.test(contact)) {
        alert("Please enter a valid contact number in the format 07XXXXXXXX.");
        return false;
    }

    // Address validation
    if (address === "") {
        alert("Delivery address is required.");
        return false;
    }

    if (newPassword === "") {
        alert("New Password is required.");
        return false;
    } else if (newPassword.length > 8) {
        alert("New Password cannot exceed 8 characters.");
        return false;
    }

    if (confirmPassword === "") {
        alert("Confirm Password is required.");
        return false;

    } else if (newPassword !== confirmPassword) {
        alert("New Password and Confirm Password do not match.");
        return false;
    }

    // Success message
    alert("Account details updated successfully!");
    return true;
}

function idGet(){
    alert("Your Account deleted!");
}