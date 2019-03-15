
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.js"></script>

</head>
<body>


        <h2>Travel Community</h2>

    <div class="login-page">
        <div class="form">
            <form class="login-form">
                <form id = "login" method="post" action="login.php">
                <input type="text" placeholder="Username" name="username" class="inputtxt">
                <input type="password" placeholder="Password" name ="password" class="inputtxt">
                <button>login</button>
                <p class="message">Not Registered? <a href="#">Register</a></p>
            </form>


<!-- Main Starts -->


                <form class="register-form">
                    <form method="post" action="register.php" onsubmit="return Validate()" name="vform">
                    <h2>Sign Up</h2><br><br>
                    <div>
                    <Input type="text" placeholder="Enter username" name="username" class="textInput" required><br>
                    <div id="name_error" class="val_error"></div>
                    </div>
                        <div>
                    <Input type="email" placeholder="Enter email" name="email" class="textInput" required><br>
                            <div id="email_error" class="val_error"></div>
                        </div>
                        <div>
                    <input type="password" placeholder="Enter Password" name="password" class="textInput" required><br>
                        </div>
                        <div>
                    <input type="password" placeholder="Confirm Password" name="password2" class="textInput" required><br>
                            <div id="password_error" class="val_error"></div>
                        </div>
                        <div>
                            <input type="submit" value="Register" class="btn" name="register">
                        </div>
                    <p class="message">Already Registered? <a href="#">Login</a></p>
                </form>

        </div>
    </div>
        </section>



<script type="text/javascript">
    //RETRIEVE ALL INPUT TEXT OBJECTS
    var username = document.forms["vform"]["username"];
    var email = document.forms["vform"]["email"];
    var password = document.forms["vform"]["password"];
    var password2 = document.forms["vform"]["password2"];
    // GET ALL ERROR DISPLAY OBJECTS
    var name_error = document.getElementById("name_error");
    var email_error = document.getElementById("email_error");
    var password_error = document.getElementById("password_error");
    //SETTING ALL EVENT LISTENERS
    username.addEventListener("blur", nameVerify, true);
    email.addEventListener("blur", emailVerify, true);
    password.addEventListener("blur", passwordVerify, true);

    //validation function
    function Validate(){
        if(username.value==""){
            username.style.border = "1px solid red";
            name_error.textContent = "Username is required";
            username.focus();
            return false;
        }

        if(email.value==""){
            email.style.border="1px solid red";
            email_error.textContent = "email is required";
            email.focus();
            return false;
        }
        if(password.value==""){
            password.style.border="1px solid red";
            password_error.textContent = "Password is required";
            password.focus();
            return false;
        }
        function nameVerify(){
            username.style.border = "1px solid #5E6E66";
            username_error.innerHTML="";
            return true;
        }
        function nameVerify(){
            username.style.border = "1px solid #5E6E66";
            username_error.innerHTML="";
            return true;
        }
        function emailVerify(){
            email.style.border = "1px solid #5E6E66";
            email_error.innerHTML="";
            return true;
        }
        function passwordVerify(){
            password.style.border = "1px solid #5E6E66";
            password_error.innerHTML="";
            return true;
        }
        if(password.value()!= password2.value){
            password.style.border = "1px solid #5E6E66";
            password2.style.border = "1px solid red";
            password_error.innerHTML = "The two passwords do not match";
            return false;
            }
        }
    }
    </script>

</main>
<!-- Main Ends -->




</body>
</html>
