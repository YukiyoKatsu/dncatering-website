<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title id="headTitle" class="headTitle">Log In</title>
        <link rel="icon" type="image/x-icon" href="Logo\Logo.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Styles\LogInPage.css">
    </head>

    <body>
        <header class="header">
            <div class="logo">
                <a href="../index.php"><img src="images\logo\logo.png" alt="logo"></a>
            </div>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="about-page.php">About</a></li>
                <li><a href="packages-page.php">Packages</a></li>
                <li><a href="formal-quote.php">Get Formal Quote</a></li>
                <!-- <li><a href="MyReservations.php">My Reservations</a></li> -->
            </ul>
            <!-- <button onclick="window.location.href='LogInPage.php'">LOG IN</button> -->
        </header>


        <div class="box">
            <div class="container">
                <div class="picture">
                    <img src="Header\LogInPage_Photo.png" alt="LogInPage_Photo">
                </div>
                <div class="logIn_SignUp">
                    <div class="Left_form_container" id="login_form">
                        <form class="login_form">
                            <h1>Log In</h1>
                            <label for="phoneNum" class="label">Phone No.</label>
                            <input 
                                placeholder="09xxxxxxxxx"
                                class="input" 
                                type="tel"
                                pattern="09[0-9]{2}[0-9]{3}[0-9]{4}"
                                title="It must contain 11-digit number in PH format(09xxxxxxxxx)."
                                required>
                            <label for="password" class="label">Password</label>
                            <input 
                                placeholder="Enter your password"
                                id="userInput"
                                class="input" 
                                type="password"  
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Must contain at least one number, one uppercase, one lowercase letter, and at least 8 or more characters"
                                required>
                            <div class="encrypt">
                                <p class="recoverPass"><a href="#">Forgot Password?</a></p>
                                <div>
                                    <input type="checkbox" onclick="myFunction()">
                                    <p>Show Password</p>
                                </div>
                            </div>
                            <input type="submit" value="Submit" class="button">
                            <div class="text">
                                <p>Don't have an account? <a href="#" onclick="signUp()">Click Here</a></p>
                            </div>
                            <!-- <button class="button1" onclick="signUp()">Create an account</button> -->
                        </form>
                    </div>
    
                    <div class="Right_form_container" id="signUp_form">
                        <form class="signUp_form" onsubmit="return validatePassword(event)">
                            <h1>Sign Up</h1>
                            <label for="name" class="label">Name</label>
                            <input 
                                placeholder="Enter your name"
                                class="input" 
                                type="text"
                                required>
                            <label for="phoneNum" class="label">Phone No.</label>
                            <input 
                                placeholder="09xxxxxxxxx"
                                class="input" 
                                type="tel"
                                pattern="09[0-9]{2}[0-9]{3}[0-9]{4}"
                                title="It must contain 11-digit number in PH format(09xxxxxxxxx)."
                                required>
                            <label for="password" class="label">Password</label>
                            <input 
                                placeholder="Enter your password"
                                id="signup_userInput"
                                class="input" 
                                type="password"
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Must contain at least one number, one uppercase, one lowercase letter, and at least 8 or more characters"
                                required>
                            <div class="encrypt">
                                <div>
                                    <input type="checkbox" onclick="myFunction1()">
                                    <p>Show Password</p>
                                </div>
                            </div>
                            <label for="repassword" class="label">Re-Password</label>
                            <input 
                                placeholder="Re-enter your password"
                                id="repassword"
                                class="input" 
                                type="password"
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Must contain at least one number, one uppercase, one lowercase letter, and at least 8 or more characters"
                                required>
                            <div class="encrypt">
                                <div>
                                    <input type="checkbox" onclick="myFunction2()">
                                    <p>Show Password</p>
                                </div>
                            </div>
                            <input type="submit" value="Submit" class="button">
                            <div class="text">
                                <p>Already have an account? <a href="#" onclick="logIn()">Click Here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- <script src="Script\LogInPage.js"></script> -->
    <script>
//Show password
function myFunction() {
  var x = document.getElementById("userInput");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
}
function myFunction1() {
	var x = document.getElementById("signup_userInput");
	  if (x.type === "password") {
		  x.type = "text";
	  } else {
		  x.type = "password";
	  }
  }
function myFunction2() {
	var x = document.getElementById("repassword");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
}

//validate password
function validatePassword(event) {
    event.preventDefault(); // Prevent form submission
    
    var password = document.getElementById("signup_userInput").value;
    var repassword = document.getElementById("repassword").value;
    
    if (password !== repassword) {
        alert("Passwords do not match. Please try again.");
        return false;
    }
    
    return true;
}

//change page
var login_form = document.getElementById("login_form");
var signUp_form = document.getElementById("signUp_form");

var signUpTitle = `Sign Up`;
var headTitle = document.getElementById("headTitle");
var originalheadTitle = headTitle.innerHTML;

function signUp() {
    login_form.style.top = "-430px";
    signUp_form.style.top = "-290px";
	document.querySelector('.headTitle').innerHTML = signUpTitle;
}
function logIn() {
    login_form.style.top = "40px";
    signUp_form.style.top = "150px";
	document.querySelector('.headTitle').innerHTML = originalheadTitle;
}
    </script>
    </body>
</html>