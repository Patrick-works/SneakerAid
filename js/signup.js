
        function clearErrors() {
            var errorMessages = document.querySelectorAll('.error');
            errorMessages.forEach(function (error) {
                error.textContent = '';
            });
        }

        function validateLoginForm(e) {
            clearErrors();

            var userLogin = document.getElementById('user').value;
            var passLogin = document.getElementById('pass').value;
            var isValid = true;

            // Example validation: Check if fields are not empty
            if (userLogin.trim() === '') {
                document.getElementById('userError').textContent = 'Username is required.';
                isValid = false;
            }

            if (passLogin.trim() === '') {
                document.getElementById('passError').textContent = 'Password is required.';
                isValid = false;
            }

            // You can add more advanced validation here if needed

            // If validation passes, you can submit the form or perform further actions
            if (isValid) {
            
                // e.preventDefault();
                $.ajax({
                  url: "../Ajax/loginajax.php", // Replace with the actual URL of your server-side script
                  type: "POST",
                  data: {
                    email: userLogin,
                    password: passLogin,
                    // Add more data as needed
                  },
                  success: function (response) {
                    // Handle the response from the server
                    console.log(response);
                    if (response == 1) {
                      Toastify({
                        text: "Login Successfully",
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
          
                      $("#email").val("");
                      $("#password").val("");
                      window.location.href="index.php"
                    } else {
                      Toastify({
                        text: "Login Failed",
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

            return isValid;
        }

        function validateSignUpForm() {
            clearErrors();

            var firstNameSignUp = document.getElementById('firstNameSignUp').value;
            var lastNameSignUp = document.getElementById('lastNameSignUp').value;
            var MiddleNameSignUp = document.getElementById('MiddleNameSignUp').value;
            var passSignUp = document.getElementById('passSignUp').value;
            var passRepeat = document.getElementById('passRepeat').value;
            var emailSignUp = document.getElementById('emailSignUp').value;
            var isValid = true;

            // Example validation: Check if fields are not empty
            if (firstNameSignUp.trim() === '') {
                document.getElementById('firstNameSignUpError').textContent = 'First Name is required.';
                isValid = false;
            }

            if (lastNameSignUp.trim() === '') {
                document.getElementById('lastNameSignUpError').textContent = 'Last Name is required.';
                isValid = false;
            }

            if (MiddleNameSignUp.trim() === '') {
                document.getElementById('MiddleNameSignUpError').textContent = 'MiddleName is required.';
                isValid = false;
            }

            if (passSignUp.trim() === '') {
                document.getElementById('passSignUpError').textContent = 'Password is required.';
                isValid = false;
            }

            if (passRepeat.trim() === '') {
                document.getElementById('passRepeatError').textContent = 'Please repeat the password.';
                isValid = false;
            }

            if (emailSignUp.trim() === '') {
                document.getElementById('emailSignUpError').textContent = 'Email is required.';
                isValid = false;
            }

            // Example validation: Check if passwords match
            if (passSignUp !== passRepeat) {
                document.getElementById('passRepeatError').textContent = 'Passwords do not match.';
                isValid = false;
            }

            // Example validation: Check if the email is in a valid format
            var emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailFormat.test(emailSignUp)) {
                document.getElementById('emailSignUpError').textContent = 'Enter a valid email address.';
                isValid = false;
            }

            // Example validation: Check if the password meets strong requirements
            var strongPasswordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            if (!strongPasswordRegex.test(passSignUp)) {
                document.getElementById('passSignUpError').textContent = 'Password must be at least 8 characters long and include at least one lowercase letter, one uppercase letter, one number, and one special character.';
                isValid = false;
            }

            // If validation passes, you can submit the form or perform further actions
            if (isValid) {
                // Your sign-up logic here
                $.ajax({
                    url: "../Ajax/registerajax.php", // Replace with the actual URL of your server-side script
                    type: "POST",
                    data: {
                        firstNameSignUp : firstNameSignUp,
                        lastNameSignUp: lastNameSignUp,
                        MiddleNameSignUp : MiddleNameSignUp,
                        passSignUp :  passSignUp,
                        emailSignUp : emailSignUp,



                        
                      // Add more data as needed
                    },
                    success: function (response) {
                      // Handle the response from the server
                      console.log(response);
                      if (response == 1) {
                        Toastify({
                          text: "Registered Successfully",
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
                          text: "Register Failed",
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

            return isValid;
        }

    