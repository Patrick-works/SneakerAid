
$(document).ready(function () {
    $email=$('#useremail_booking').val();
    var bookingDate = $('#dp').val();
    var appointmentTime = $('#appointmentTime').val();
    var appointmentType = $('#appointmentType').val();
console.log($email);
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
            // showSuccessMessage();
            event.preventDefault();
      $.ajax({
        url: "../Ajax/appointajax.php", // Replace with the actual URL of your server-side script
        type: "POST",
        data: {
          date:  bookingDate ,
          time:  appointmentTime,
          type: appointmentType,
          user: $email
          // Add more data as needed
        },
        success: function (response) {
          // Handle the response from the server
          console.log(response);
          if (response == 1) {
            Toastify({
              text: "Booked Successfully",
              duration: 3000,
              destination: "https://github.com/apvarun/toastify-js",
              newWindow: true,
              close: true,
              gravity: "top", // `top` or `bottom`
              position: "center", // `left`, `center` or `right`
              stopOnFocus: true, // Prevents dismissing of toast on hover
              style: {
                background: "linear-gradient(to right, #00b09b, #96c93d)",
              }, // Callback after click
            }).showToast();

            // window.location.href="cust_template.php"
          } else {
            Toastify({
              text: "Booking Failed",
              duration: 3000,
              destination: "https://github.com/apvarun/toastify-js",
              newWindow: true,
              close: true,
              gravity: "top", // `top` or `bottom`
              position: "center", // `left`, `center` or `right`
              stopOnFocus: true, // Prevents dismissing of toast on hover
              style: {
                background: "linear-gradient(to right, #00b09b, #96c93d)",
              }, // Callback after click
            }).showToast();
          }
        },
        error: function (error) {
          // Handle errors
          console.error(error);
        },
      });

        }
    });

    // Function to show success message (replace this with your actual logic)
    // function showSuccessMessage() {
    //     Swal.fire({
    //         icon: 'success',
    //         title: 'Form Submitted Successfully!',
    //         text: 'Thank you for booking your appointment.',
    //     });
    // }
});
