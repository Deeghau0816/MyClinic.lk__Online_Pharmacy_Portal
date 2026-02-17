const username = document.getElementById('name');
const email = document.getElementById('email');
const feedback = document.getElementById('message'); // Changed to match the textarea ID
const form = document.getElementById('form');
const name_error = document.getElementById('name_error');  // Display error message in span
const email_error = document.getElementById('email_error');
const message_error = document.getElementById('message_error');

// Condition for email validation
var email_check = /^([a-zA-Z0-9._-])+@([a-zA-Z0-9.-_])+\.[a-zA-Z]{2,6}$/;

form.addEventListener('submit', (e) => {
    // Clear previous error messages
    name_error.innerHTML = "";
    email_error.innerHTML = "";
    message_error.innerHTML = "";

    var hasErrors = false; // Track errors

    // Validation for the name field
    if (username.value === '' || username.value == null) {
        e.preventDefault(); // Prevent form submission
        name_error.innerHTML = "Please enter your name."; // Display error message
        hasErrors = true;
    }

    // Validation for the email field
    if (!email.value.match(email_check)) {
        e.preventDefault(); // Prevent form submission
        email_error.innerHTML = "Please enter a valid email address."; // Display error message
        hasErrors = true;
    }

    // Validation for the feedback field
    if (feedback.value.trim() === '') {
        e.preventDefault(); // Prevent form submission
        message_error.innerHTML = "Feedback cannot be empty. We value your thoughts!"; // Display error message
        hasErrors = true;
    }

});

// Clear error messages on input
username.addEventListener('input', () => {
    if (username.value !== '') {
        name_error.innerHTML = ""; // Clear name error message
    }
});

email.addEventListener('input', () => {
    if (email.value.match(email_check)) {
        email_error.innerHTML = ""; // Clear email error message
    }
});

feedback.addEventListener('input', () => {
    if (feedback.value.trim() !== '') {
        message_error.innerHTML = ""; // Clear feedback error message
    }
});
