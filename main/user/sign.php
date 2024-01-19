<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR.LOGIN/SIGNUP</title>
    <link rel="stylesheet" href="../../css/signcss.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
    
</head>

<body>
    <div class="row">
        <div class="col-md-6 mx-auto p-0">
            <div class="card">
                <div class="login-box">
                    <div class="login-snip">
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                            class="tab">Login</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2"
                            class="tab">Sign Up</label>
                        <div class="login-space">
                            <!-- Login Form -->
                            <div class="login">
                                <div class="group">
                                    <label for="user" class="label">Username</label>
                                    <input id="user" type="text" class="input" placeholder="Enter your username">
                                    <span id="userError" class="error"></span>
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="pass" type="password" class="input" data-type="password"
                                        placeholder="Enter your password">
                                    <span id="passError" class="error"></span>
                                </div>
                                <div class="group">
                                    <input id="check" type="checkbox" class="check" checked>
                                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Sign In"
                                        onclick="validateLoginForm()">
                                </div>
                                <div class="hr"></div>
                                <div class="foot">
                                    <a href="#">Forgot Password?</a>
                                </div>
                            </div>

                            <!-- Sign Up Form -->
                            <div class="sign-up-form" id="signupForm">
                            <div class="sign-up-form">
                                <div class="group">
                                    <label for="firstNameSignUp" class="label">First Name</label>
                                    <input id="firstNameSignUp" type="text" class="input"
                                        placeholder="Enter your first name">
                                    <span id="firstNameSignUpError" class="error"></span>
                                </div>
                                <div class="group">
                                    <label for="MiddleNameSignUp" class="label">Middle Name</label>
                                    <input id="MiddleNameSignUp" type="text" class="input"
                                        placeholder="Enter your Middle Name">
                                    <span id="MiddleNameSignUpError" class="error"></span>
                                </div>
                                <div class="group">
                                    <label for="lastNameSignUp" class="label">Last Name</label>
                                    <input id="lastNameSignUp" type="text" class="input"
                                        placeholder="Enter your last name">
                                    <span id="lastNameSignUpError" class="error"></span>
                                </div>
                                
                                <div class="group">
                                    <label for="passSignUp" class="label">Password</label>
                                    <input id="passSignUp" type="password" class="input" data-type="password"
                                        placeholder="Create your password">
                                    <span id="passSignUpError" class="error"></span>
                                </div>
                                <div class="group">
                                    <label for="passRepeat" class="label">Repeat Password</label>
                                    <input id="passRepeat" type="password" class="input" data-type="password"
                                        placeholder="Repeat your password">
                                    <span id="passRepeatError" class="error"></span>
                                </div>
                                <div class="group">
                                    <label for="emailSignUp" class="label">Email Address</label>
                                    <input id="emailSignUp" type="text" class="input"
                                        placeholder="Enter your email address">
                                    <span id="emailSignUpError" class="error"></span>
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Sign Up"
                                        onclick="validateSignUpForm(),submitSignUpForm()">
                                </div>
                                <div class="hr"></div>
                                <div class="foot">
                                    <label for="tab-1">Already Member?</label>
    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../js/signup.js"></script>
</body>

</html>
