<?php 
   include("php/check-login-session.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="view-transition" content="same-origin" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title id="headTitle" class="headTitle">Admin DN | Change Password</title>
        <link rel="icon" type="image/x-icon" href="pictures\logo.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="styles\styles.css">
        <link rel="stylesheet" href="styles\change-password.css">
        <link rel="stylesheet" href="styles\log-out-dialog.css">
    </head>
    <body>
        <nav class="leftnavbar">
            <a href="../index.php"><img src="pictures\logo.png" alt="" title="Click here to go to User Page."></a>
            <ul class="nav-list">
                <li>
                    <a href="feedback.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="3F3F3F" d="M12 15q.425 0 .713-.288T13 14t-.288-.712T12 13t-.712.288T11 14t.288.713T12 15m-1-4h2V5h-2zM2 22V4q0-.825.588-1.412T4 2h16q.825 0 1.413.588T22 4v12q0 .825-.587 1.413T20 18H6zm3.15-6H20V4H4v13.125zM4 16V4z" />
                        </svg>
                        <p>Customer's Feedback</p>
                    </a>
                </li>
                <li>
                    <a href="formal-quote.php" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="3F3F3F" d="M12 12h5v5h-5zm7-9h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2m0 2v2H5V5zM5 19V9h14v10z" />
                        </svg>
                        <p>Formal Quote</p>
                    </a>
                </li>
                <!-- <li>
                    <a href="calendar.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="3F3F3F" d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zm8-7L4 8v10h16V8zm0-2l8-5H4zM4 8V6v12z" />
                        </svg>
                        <p>View Calendar</p>
                    </a>
                </li> -->
                <li class="active">
                    <a class="active" href="change-password.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                            <path fill="#3f3f3f" d="m9.25 22l-.4-3.2q-.325-.125-.612-.3t-.563-.375L4.7 19.375l-2.75-4.75l2.575-1.95Q4.5 12.5 4.5 12.338v-.675q0-.163.025-.338L1.95 9.375l2.75-4.75l2.975 1.25q.275-.2.575-.375t.6-.3l.4-3.2h5.5l.4 3.2q.325.125.613.3t.562.375l2.975-1.25l2.75 4.75l-2.575 1.95q.025.175.025.338v.674q0 .163-.05.338l2.575 1.95l-2.75 4.75l-2.95-1.25q-.275.2-.575.375t-.6.3l-.4 3.2zM11 20h1.975l.35-2.65q.775-.2 1.438-.587t1.212-.938l2.475 1.025l.975-1.7l-2.15-1.625q.125-.35.175-.737T17.5 12t-.05-.787t-.175-.738l2.15-1.625l-.975-1.7l-2.475 1.05q-.55-.575-1.212-.962t-1.438-.588L13 4h-1.975l-.35 2.65q-.775.2-1.437.588t-1.213.937L5.55 7.15l-.975 1.7l2.15 1.6q-.125.375-.175.75t-.05.8q0 .4.05.775t.175.75l-2.15 1.625l.975 1.7l2.475-1.05q.55.575 1.213.963t1.437.587zm1.05-4.5q1.45 0 2.475-1.025T15.55 12t-1.025-2.475T12.05 8.5q-1.475 0-2.488 1.025T8.55 12t1.013 2.475T12.05 15.5M12 12" />
                        </svg>
                        <p>Settings</p>
                    </a>
                </li>
                <li>
                    <button class="logOut" name="Logout" data-open-modal>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20">
                            <path fill="3F3F3F" d="m19 10l-6-5v3H6v4h7v3zM3 3h8V1H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H3z" />
                        </svg>
                        <p>Log out</p>
                    </button>
                </li>
            </ul>
        </nav>

        <main>
            <header class="headerMain">
                <p class="hiAdmin">Hi, Admin!</p>
                <p class="title">DN's Kreative Events & Party Needs</p>
            </header>

            <!-- <hr class="headline"> -->
            
            <h1 class="pagetitle">Settings</h1>

            <table class="outerContainer">
                <tr>
                    <td style="width:50%">
                        <h1 class="subheadtitle">Change Username</h1>

                        <?php include("php/change-username-db.php"); ?>
                        <div class="changePassword_container">
                            <form action="" method="post" class="changePasswordField">
                                <table class="tablebox">
                                    <tr>
                                        <td class="left"><label for="">New Username:</label></td>
                                        <td class="right">
                                            <input type="text" name="newUsername" id="newUsername" title="Enter New Username." required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="left"><label for="confirmPassword1">Confirm Password:</label></td>
                                        <td class="right">
                                            <input type="password" oninput="conditions1()" name="confirmPassword1" id="confirmPassword1" required>
                                            <div class="showPass">
                                                <img  
                                                src="pictures\eye-close.png" 
                                                id="eyeicon-confirmPassword1" 
                                                onclick="myFunction2('confirmPassword1','eyeicon-confirmPassword1')">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><button type="submit" name="submit1" class="changePasswordButton">Change Username</button></td>
                                    </tr>   
                                </table>
                            </form>
                        </div>

                        <h1 class="subheadtitle">Change Registered Email</h1>

                        <?php include("php/change-email-db.php"); ?>
                        <div class="changePassword_container">
                            <form action="" method="post" class="changePasswordField">
                                <table class="tablebox">
                                    <tr>
                                        <td class="left"><label for="">New Email:</label></td>
                                        <td class="right">
                                            <input type="email" name="newEmail" id="newEmail" placeholder="user@email.com" pattern=".+@[a-z0-9.-]+\.[a-z]{2, 4}$" title="user@email.com" title="Enter New Email." required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="left"><label for="confirmPassword2">Confirm Password:</label></td>
                                        <td class="right">
                                            <input type="password" oninput="conditions1()" name="confirmPassword2" id="confirmPassword2" required>
                                            <div class="showPass">
                                                <img  
                                                src="pictures\eye-close.png" 
                                                id="eyeicon-confirmPassword2" 
                                                onclick="myFunction2('confirmPassword2','eyeicon-confirmPassword2')">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><button type="submit" name="submit2" class="changePasswordButton">Change Email</button></td>
                                    </tr>   
                                </table>
                            </form>
                        </div>
                    </td>

                    <td style="width:50%">
                        <h1 class="subheadtitle">Change Admin Password</h1>

                        <?php include("php/change-password-db.php"); ?>
                        <div id="notValid" class="notSuccessfullyChanged">Passwords did not match. Please try again.</div>
                        <div id="notValid1" class="notSuccessfullyChanged">New password cannot be the same as the old password.</div>

                        <div class="changePassword_container">
                            <form action="" method="post" class="changePasswordField" onsubmit="return validatePassword(event)">
                                <table class="tablebox">
                                    <tr>
                                        <td class="left"><label for="oldPassword">Old Password:</label></td>
                                        <td class="right">
                                            <input type="password" name="oldPassword" id="oldPassword" required>
                                            <div class="showPass">
                                                <img 
                                                src="pictures\eye-close.png" 
                                                id="eyeicon-oldPassword" 
                                                onclick="myFunction2('oldPassword','eyeicon-oldPassword')">
                                            </div>
                                        </td>
                                    </tr>   
                                    <tr></tr>
                                    <tr>
                                        <td class="left"><label for="newPassword">New Password:</label></td>
                                        <td class="right">
                                            <input 
                                                type="password" 
                                                name="newPassword" 
                                                id="newPassword" 
                                                oninput="check()"
                                                onfocus="conditions()"
                                                pattern="^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*+=>\x22\x27\x28\x29\x2C\x2D\x2E\x1B\x1D\x1F\x7B\x7C\x7D\x7F\x2F\x3A\x3B\x60\x5F\x5B\x5D\x3F]).{8,}$"
                                                title="Must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character. The following are not allowed:  \ , ~,  <, space, and tab"
                                                required>
                                            <div class="showPass">
                                                <img 
                                                src="pictures\eye-close.png" 
                                                id="eyeicon-newPassword" 
                                                onclick="myFunction2('newPassword','eyeicon-newPassword')">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div id="check0" class="validation">
                                                <i class="far fa-check-circle"></i><span> At least eight (8) characters long.</span>
                                            </div>
                                            <div id="check1" class="validation">
                                                <i class="far fa-check-circle"></i><span> At least one (1) uppercase (A through Z).</span>
                                            </div>
                                            <div id="check2" class="validation">
                                                <i class="far fa-check-circle"></i><span> At least one (1) lowercase (a through z).</span>
                                            </div>
                                            <div id="check3" class="validation">
                                                <i class="far fa-check-circle"></i><span> At least one (1) number (0 through 9).</span>
                                            </div>
                                            <div id="check4" class="validation">
                                                <i class="far fa-check-circle"></i><span> At least one (1) special character. <br>&nbsp&nbsp&nbsp&nbsp <i>(excluding: \ , ~,  <, space, and tab)</i></span>
                                            </div>
                                            <div id="valid" class="validation">Password is strong.</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="left"><label for="confirmPassword">Confirm Password:</label></td>
                                        <td class="right">
                                            <input type="password" oninput="conditions1()" name="confirmPassword" id="confirmPassword" required>
                                            <div class="showPass">
                                                <img  
                                                src="pictures\eye-close.png" 
                                                id="eyeicon-confirmPassword" 
                                                onclick="myFunction2('confirmPassword','eyeicon-confirmPassword')">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><button type="submit" name="submit" class="changePasswordButton">Change Password</button></td>
                                    </tr>
                                </table>
                            </form>
                            
                        </div>
                    </td>
                </tr>
            </table>
        </main>

        <dialog class="dialogLogout" data-modal>
            <div class='dialogLogOutHeader'>
                <p class='logoutText'>
                    Are you sure you want to log out?
                </p>
            </div>
            <div class='buttonsLogout'>
                <a href="php/logout.php"><button class='yesButton'>Logout</button></a>
                <button class='closeButton' data-close-modal>Cancel</button>
            </div>
        </dialog>
        
    </body>
    <style>
        .outerContainer{
            border-spacing: 20px 0;
        }
        .outerContainer td{
            align-content: flex-start;
        }
        .subheadtitle{
            color: #B78628;
            padding: 20px 0;
            font-size: 25px;
        }
    </style>
    <script src="scripts\script.js"></script>
    <script src="scripts/log-out-dialog.js"></script>
</html>