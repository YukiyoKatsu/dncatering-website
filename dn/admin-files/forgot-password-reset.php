<?php
    include("php/token-checker.php")
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="view-transition" content="same-origin" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title id="headTitle" class="headTitle">Admin DN | Reset Password</title>
        <link rel="icon" type="image/x-icon" href="pictures\logo.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles/log-in-styles.css">
        <link rel="stylesheet" href="styles/reset-password.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    </head>

    <body>

        <div class="box">
            <h1 class="title">Reset Password</h1>
            <p class="title">DN's Kreative Events & Party Needs</p>
            <?php
                include("php/process-reset-password.php");
            ?>
            <div id="notValid" class="notSuccessfullyChanged">Passwords did not match. Please try again.</div>

            <form action="" method="post" class="logIn_container" onsubmit="return validatePassword2(event)">
                <label class="label" for="newPassword">New Password:</label>
                <div class="input_password">
                    <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">
                    <input 
                        class="input"
                        type="password" 
                        name="newPassword" 
                        id="newPassword1" 
                        pattern="^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*+=>\x22\x27\x28\x29\x2C\x2D\x2E\x1B\x1D\x1F\x7B\x7C\x7D\x7F\x2F\x3A\x3B\x60\x5F\x5B\x5D\x3F]).{8,}$"    
                        title="Must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character. The following are not allowed:  \ , ~,  <, space, and tab"
                        oninput="check()"
                        onfocus="conditions()"
                        required>
                    <img 
                        src="pictures\eye-close.png" 
                        id="eyeicon-newPassword" 
                        onclick="myFunction2('newPassword1','eyeicon-newPassword')">
                </div>

                <div id="check0">
                    <i class="far fa-check-circle"></i><span> At least eight (8) characters long.</span>
                </div>
                <div id="check1">
                    <i class="far fa-check-circle"></i><span> At least one (1) uppercase (A through Z).</span>
                </div>
                <div id="check2">
                    <i class="far fa-check-circle"></i><span> At least one (1) lowercase (a through z).</span>
                </div>
                <div id="check3">
                    <i class="far fa-check-circle"></i><span> At least one (1) number (0 through 9).</span>
                </div>
                <div id="check4">
                    <i class="far fa-check-circle"></i><span> At least one (1) special character. <br>&nbsp&nbsp&nbsp&nbsp <i>(excluding: \ , ~,  <, space, and tab)</i></span>
                </div>
                <div id="valid">Password is strong.</div>

                <label class="label" for="confirmPassword">Confirm Password:</label>
                <div class="input_password">
                    <input 
                        class="input"
                        oninput="conditions1()"
                        type="password" 
                        name="confirmPassword" 
                        id="confirmPassword1" 
                        required>
                    <img 
                        src="pictures\eye-close.png" 
                        id="eyeicon-currentPassword" 
                        onclick="myFunction2('confirmPassword1', 'eyeicon-currentPassword')">
                </div>

                <div id="notValid">Passwords did not match. Please try again.</div>

                <button type="submit" name="submit" class="submitbutton">Reset Password</button>
            </form>
        </div>
    </body>
    <script>
        function validatePassword2(event) {
    var password = document.getElementById("newPassword1").value;
    var repassword = document.getElementById("confirmPassword1").value;
	var input = document.getElementById('newPassword1').value;
    
    if (password !== repassword) {
		event.preventDefault(); // Prevent form submission
        document.getElementById('notValid').style.display = 'block';
    }
	if (password == repassword){
		if(input.length < 8 || !input.match(/[A-Z]/) || !input.match(/[a-z]/) || !input.match(/[0-9]/) || specialCharacters.test(!input)){
			event.preventDefault();
		}
	}
}
    </script>
    <script src="scripts\reset-password.js"></script>
</html>