document.addEventListener("DOMContentLoaded", function () {
    var content = document.querySelector(".fade-in");
    content.classList.add("fade-in");
});

// Initialize date picker
$('#dp').datepicker({
    minDate: 0, // Prevent past dates
    dateFormat: 'yy-mm-dd' // Set date format as needed
});

// Initialize clock picker
$('.clockpicker').clockpicker();

// Validation for the form
$('#bookAppointmentBtn').click(function (event) {
    event.preventDefault(); // Prevent form submission

    // Reset previous error messages
    $('.error-message').html('');
    $('.form-control').removeClass('is-invalid');

    // Validate form fields
    let isValid = true;

    // Booking Date validation
    let bookingDate = $('#dp').val().trim();
    if (bookingDate === "") {
        isValid = false;
        $('#dp').addClass('is-invalid');
        $('#dp').siblings('.error-message').html('Booking Date is required.');
    }

    // Booking Time validation
    let bookingTime = $('#appointmentTime').val().trim();
    if (bookingTime === "") {
        isValid = false;
        $('#appointmentTime').addClass('is-invalid');
        $('#appointmentTime').siblings('.error-message').html('Booking Time is required.');
    }

    // If the form is valid, submit via AJAX
    if (isValid) {
        // AJAX code
        $.ajax({
            url: "../Ajax/registerajax.php", // Replace with the actual URL of your server-side script
            type: "POST",
            data: {
                bookingDate: bookingDate,
                bookingTime: bookingTime,
                // Add more data as needed
            },
            success: function (response) {
                // Handle the response from the server
                console.log(response);
                if (response == 1) {
                    // Handle success case
                    console.log("Appointment scheduled successfully");
                } else {
                    // Handle failure case
                    console.log("Failed to schedule appointment");
                }
            },
            error: function (error) {
                // Handle errors
                console.error(error);
            },
        });
    }
});