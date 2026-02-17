document.addEventListener("DOMContentLoaded", function() {

    // Confirmation for "Delete All" link
    document.querySelector('.delete-btn').addEventListener('click', function(event) {
        const confirmed = confirm('Are you sure you want to delete all?');
         
    });

    
    document.querySelector('.checkout-btn').addEventListener('click', function(event) {
        const confirmed = confirm('Are you sure you want to proceed?');
        if (confirmed) {
            // if customer gives Ok, it will bring him to payment page
            window.location.href = 'payment.php';
        } else {
            event.preventDefault(); // Prevent the default action if not confirmed
        }
    });

});