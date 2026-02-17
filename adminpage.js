function validateForm() {
        var name = document.getElementById("A_name").value;
        var email = document.getElementById("A_email").value;
        var role = document.getElementById("A_role").value;
        var password = document.getElementById("A_password").value;
        var contactno = document.getElementById("A_contactno").value;

        // Validate name 
        if (name.length < 3) {
            alert("Name must be at least 3 characters long.");
            return false;
        }

        // Validate email format
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
            alert("Please enter a valid email address.");
            return false;
        }

        // Validate role 
        if (role === "") {
            alert("Please select a role.");
            return false;
        }

        // Validate password 
        var passwordPattern = /^(?=.*\d).{6,}$/;
        if (!passwordPattern.test(password)) {
            alert("Password must be at least 6 characters long and include a number.");
            return false;
        }

        // Validate contact number 
        var contactPattern = /^[0-9]{10}$/;
        if (!contactPattern.test(contactno)) {
            alert("Contact number must be 10 digits.");
            return false;
        }

        return true; // Form is valid
    }

