

<?php 
session_start(); 
if(isset($_SESSION["email"]) && isset($_SESSION["firstname"]) && isset($_SESSION["lastname"]) && isset($_SESSION["type"])  )
{
    $email = $_SESSION["email"];
    $firstname=$_SESSION["firstname"];
    $lastname=$_SESSION["lastname"];

}else{
    // echo ("<script>location.href='sign.php'</script>");

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/clockpicker/dist/bootstrap-clockpicker.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/clockpicker/dist/bootstrap-clockpicker.min.js"></script>
    <script src="../../assets/../js/appoint.js"></script>

    <style>
        @import url(//fonts.googleapis.com/css?family=Montserrat:400,500,700);

        .banner3 {
            font-family: "Montserrat", sans-serif;
            color: red;
            font-weight: 300;
            max-height: 800px;
        }

        .banner3 .banner {
            position: relative;
            height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center top;
            width: 100%;
            display: table;
            transition: background-position 0.5s ease-in-out;
        }

        .banner3:hover .banner {
            background-position: center center;
        }

        .banner3 h1,
        .banner3 h2,
        .banner3 h3,
        .banner3 h4,
        .banner3 h5,
        .banner3 h6 {
            color: red;
            transition: color 0.3s ease-in-out;
        }

        .banner3:hover h3 {
            color: #ff6a5b;
        }

        .banner3 .font-weight-medium {
            font-weight: 500;
        }

        .banner3 .subtitle {
            color: black;
            line-height: 24px;
        }

        .banner3 .btn-danger-gradiant {
            background: #ff4d7e;
            background: -webkit-linear-gradient(legacy-direction(to right), black 0%, red 100%);
            background: -webkit-gradient(linear, left top, right top, from(#ff4d7e), to(#ff6a5b));
            background: -webkit-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
            background: -o-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
            background: linear-gradient(to right, #ff4d7e 0%, #ff6a5b 100%);
            border: 0px;
            transition: background-color 0.3s ease-in-out;
        }

        .banner3 .btn-danger-gradiant:hover {
            background: #ff6a5b;
            transform: scale(1.05);
        }

        .banner3 .btn-danger-gradiant.active,
        .banner3 .btn-danger-gradiant:active,
        .banner3 .btn-danger-gradiant:focus {
            -webkit-box-shadow: 0px;
            box-shadow: 0px;
            opacity: 1;
        }

        .banner3 .btn-md {
            padding: 15px 45px;
            font-size: 16px;
        }

        .banner3 .form-row {
            margin: 0;
        }

        .banner3 label.font-12 {
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .banner3 .form-control {
            color: black;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .banner3 .form-control:hover,
        .banner3 .form-control:focus {
            border-color: #ff6a5b;
            box-shadow: 0 0 10px rgba(255, 106, 91, 0.3);
            transform: translateY(-5px);
        }

        .banner3 .date label {
            cursor: pointer;
            margin: 0;
        }

        @media (max-width: 370px) {
            .banner3 .left,
            .banner3 .right {
                padding: 25px;
            }
        }

        @media (max-width: 320px) {
            .banner3 .left,
            .banner3 .right {
                padding: 25px 15px;
            }
        }

        .banner3 .font-14 {
            font-size: 14px;
        }

        .banner3 .text-inverse {
            color: #3e4555 !important;
        }

        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 4px;
            transition: color 0.3s ease-in-out;
        }

        .form-control.is-invalid {
            border-color: red;
        }

        .error-message.is-invalid {
            display: block;
            margin-top: 4px;
        }

        /* Floating effect */
        .float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            70% {
                transform: translateY(-4px);
            }
        }

        /* Fade in animation */
        .fade-in {
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Styling for clock picker */
        .clockpicker-popover {
            z-index: 999999; /* Adjust z-index as needed */
        }
    </style>
</head>

<body>
<input type="text" id="useremail_booking" value="<?php echo($email) ?>" style="display:none">
    <!-- Your existing code with the added fade-in class -->
    <div class="banner3 fade-in">
        <div class="py-5 banner float" style="background-image:url(../../assets/img/bro.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-5">
                        <h3 class="my-3 text-red font-weight-medium text-uppercase">Book an Appointment</h3>
                        <div class="bg-white">
                            <div class="form-row border-bottom">
                            <div class="form-row border-bottom p-4 position-relative">
                                <label class="text-inverse font-12 text-uppercase">Booking Date</label>
                                <div class="input-group date">
                                    <input type="text" id="dp" class="border-0 p-0 font-14 form-control float"
                                        placeholder="Select the Appointment Date" />
                                    <label class="mt-2" for="dp"><i class="icon-calendar mt-1"></i></label>
                                </div>
                            </div>
                            <div class="form-row border-bottom p-4 position-relative">
                                <label class="text-inverse font-12 text-uppercase">Booking Time</label>
                                <div class="input-group clockpicker">
                                    <input type="text" id="appointmentTime"
                                        class="border-0 p-0 font-14 form-control float"
                                        placeholder="Select the Appointment Time" />
                                    <label class="mt-2" for="appointmentTime"><i class="icon-clock mt-1"></i></label>
                                </div>
                            </div>
                            <div class="form-row border-bottom p-4">
                                <label class="text-inverse font-12 text-uppercase">Appointment Type</label>
                                <select id="appointmentType" class="form-control border-0 p-0 font-14 float">
                                    <option value="" disabled selected>Select Appointment Type</option>
                                    <option value="deepCleaning">Deep Cleaning</option>
                                    <option value="fullRestore">Full Restore</option>
                                    <option value="pieceReplace">Piece Replace</option>
                                </select>
                            </div>
                            <div>
                                <button id="bookAppointmentBtn"
                                    class="m-0 border-0 py-4 font-14 font-weight-medium btn btn-danger-gradiant btn-block position-relative rounded-0 text-center text-white text-uppercase float">
                                    <span>Book Your Appointment Now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
                                       
    <script>
        // JavaScript to add fade-in class after the page is fully loaded
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
        $('#appointmentTime').clockpicker({
            autoclose: true
        });

        // JavaScript for form validation and submission (unchanged)
        $(document).ready(function () {
            // ... (your existing code)
        });
    </script>
</body>

</html>
