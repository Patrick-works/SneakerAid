$(document).ready(function () {
    // Initialize date picker
    $('#dp').datepicker({
        minDate: 0, // Prevent past dates
        dateFormat: 'yy-mm-dd' // Set date format as needed
    });

    // Initialize clock picker
    $('#appointmentTime').clockpicker({
        autoclose: true
    });

    // Validation for the form
    $('#bookAppointmentBtn').click(function (event) {
        event.preventDefault(); // Prevent form submission

        // Reset previous error messages
        $('.error-message').remove();
        $('.form-control').removeClass('is-invalid');

        // Validate form fields
        let isValid = true;

        // Booking Date validation
        let bookingDate = $('#dp').val();
        if (!bookingDate || bookingDate.trim() === "") {
            isValid = false;
            $('#dp').addClass('is-invalid');
            $('#dp').after('<div class="error-message">Booking Date is required.</div>');
        }

        // Booking Time validation
        let appointmentTime = $('#appointmentTime').val();
        if (!appointmentTime || appointmentTime.trim() === "") {
            isValid = false;
            $('#appointmentTime').addClass('is-invalid');
            $('#appointmentTime').after('<div class="error-message">Booking Time is required.</div>');
        }

        // Appointment Type validation
        let appointmentType = $('#appointmentType').val();
        if (!appointmentType) {
            isValid = false;
            $('#appointmentType').addClass('is-invalid');
            $('#appointmentType').after('<div class="error-message">Appointment Type is required.</div>');
        }

        // If the form is valid, show success message (replace this with your actual logic)
        if (isValid) {
            showSuccessMessage();
        }
    });

    // Function to show success message (replace this with your actual logic)
    function showSuccessMessage() {
        Swal.fire({
            icon: 'success',
            title: 'Form Submitted Successfully!',
            text: 'Thank you for booking your appointment.',
        });
    }
});
