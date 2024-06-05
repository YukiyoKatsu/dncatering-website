<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title id="headTitle" class="headTitle">DN | Formal Quote</title>
        <link rel="icon" type="image/x-icon" href="images\logo\logo.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Styles\FormalQuote.css">
        <link rel="stylesheet" href="styles\footer.css">
        <link rel="stylesheet" href="styles\to-top.css">
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
                <li class="active"><a href="formal-quote.php" aria-current="page">Get Formal Quote</a></li>
                <!-- <li><a href="MyReservations.php">My Reservations</a></li> -->
            </ul>
            <!-- <button onclick="window.location.href='LogInPage.php'">LOG IN</button> -->
        </header>

        <div class="headerphoto">
            <img src="images\header\get-formal-quote_photo.png" class="image">
            <div class="HeaderText">
                <a href="packages-page.php">
                    <button>
                        <p>Event Packages</p>
                    </button>
                </a>
                <p class="page">Get Formal Quote</p>
                <p class="dns">DN's Catering Services</p>
                <p class="motto">"YOUR OCCASION & VISION + OUR PLANNING & MANAGEMENT = THE PERFECT EVENT"</p>
            </div>
        </div>

        <div class="formalQuote_container" id="formalQuote_container">
            <?php
                include("php/config.php");
                include("php/formal-quote-db-connector.php");
            ?>
            <div class="title">Didn’t see what you’re looking for? <br> GET A FORMAL QUOTE!</div>
            <div class="instruction">
                <p><i>To ensure we provide you with an accurate and comprehensive quote for your catering needs, <b>PLEASE FILL OUT THE FORMAL QUOTE FORM ACCURATELY</b>. Your thorough and detailed responses will help us tailor our services to meet your specific requirements.</i></p>
            </div>
            <form action="formal-quote.php" method="post" class="formalQuote_form" onsubmit="submitForm(event);">
                <div class="row">
                    <div class="inputform">
                        <label for="formalquote_fName" class="label">First Name (Required)</label>
                        <input maxlength="" type="text" id="first_name" name="first_name" class="input" required>
                    </div>
                    <div class="inputform">
                        <label for="formalquote_mName" class="label">Middle Name</label>
                        <input type="text" id="middle_name" name="middle_name" class="input">
                    </div>
                    <div class="inputform">
                        <label for="formalquote_sName" class="label">Surname (Required)</label>
                        <input type="text" id="last_name" name="last_name" class="input" required>
                    </div>
                    <div class="inputform">
                        <label for="formalquote_Email" class="label">Email (Required)</label>
                        <input 
                            type="email"
                            id="email"
                            name="email" 
                            placeholder="user@email.com" 
                            pattern=".+@[a-z0-9.-]+\.[a-z]{2, 4}$"
                            title="user@email.com" 
                            class="input" 
                            required>
                    </div>
                    <div class="inputform">
                        <label for="formalquote_PhoneNum" class="label">Phone No. (Required)</label>
                        <input 
                            placeholder="09xxxxxxxxx"
                            class="input"
                            id="phone_number"
                            name="phone_number" 
                            type="tel"
                            pattern="09[0-9]{2}[0-9]{3}[0-9]{4}"
                            title="It must contain 11-digit number in PH format(09xxxxxxxxx)."
                            required>
                    </div>
                    <div class="inputform">
                        <label for="formalquote_Date" class="label">Date of Event</label>
                        <input type="date" id="date" name="date" class="input">
                    </div>
                    <div class="inputform">
                        <label for="formalquote_EventType" class="label">Type of Event</label>
                        <select name="event_type" id="eventType">
                            <option value="" selected="selected" class="input">Select Type of Event</option>
                        </select>
                    </div>
                    <div class="inputform">
                        <label for="formalquote_Package" class="label">Package</label>
                        <select name="package" id="package">
                            <option value="" selected="selected" class="input">Select a Package</option>
                        </select>
                    </div>
                </div>
                <div class="textfield">
                    <label for="formalquote_OtherDetails" class="label">Other Details (Such as Time, Venue, Theme, Special Needs, Food Allergens, etc.)</label>
                    <textarea name="other_details" id="other_details" class="input" placeholder="(Required) Tell us what you need..." required></textarea>
                </div>
                <div class="recaptchaAndSubmit">
                    <div class="g-recaptcha" id="g-recaptcha" data-sitekey="6Lca0vApAAAAAHmwCzTYrTec1mAVXHb3cPIkGMYI"></div>
                    <input type="submit" name="submit" value="Submit" class="fq_button">
                </div>
            </form>
            <!-- <div class="instruction">
                <p><i>Our team will review your request and prepare a formal quote based on the details you have provided. If we need any additional information, we will contact you using the provided contact details. Thank you for considering our catering services for your event!</i></p>
            </div> -->
        </div>

        <footer>
            <div class="footer">
                <div class="footerLogo">
                    <img src="images\logo\footer-logo.png" alt="logo" class="footerLogo" onclick="window.open('https://www.facebook.com/DNskreativepartyneeds')">
                </div>
                <div class="footerText">
                    <div class="Your_Perfect_Celebration_Starts_Here">
                        <p class="Your_Perfect_Celebration_Starts_Here_Text">
                            Your <span class="PerfectCelebration">Perfect Celebration</span> Starts Here
                        </p>
                    </div>
                    <div class="Mail_and_address">
                        <div class="mail">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29.17px" height="29.17px" viewBox="0 0 24 24">
                                <path fill="#2c220f" d="M22 8.608v8.142a3.25 3.25 0 0 1-3.066 3.245L18.75 20H5.25a3.25 3.25 0 0 1-3.245-3.066L2 16.75V8.608l9.652 5.056a.75.75 0 0 0 .696 0zM5.25 4h13.5a3.25 3.25 0 0 1 3.234 2.924L12 12.154l-9.984-5.23a3.25 3.25 0 0 1 3.048-2.919zh13.5z" />
                            </svg>
                            <p>kreativepartyneeds@gmail.com</p> 
                        </div>
                        <div class="address">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29.17px" height="29.17px" viewBox="0 0 24 24">
                                <path fill="#2c220f" d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7" />
                            </svg>
                            <p>Tambunting Street, Manila, Philippines, 1002</p>
                        </div>
                    </div>
                </div>
                <div class="footerSocialMedia">
                    <!--tiktok-->
                    <a target=”_blank” href="https://www.tiktok.com/@iamjasmiine16?is_from_webapp=1&sender_device=pc">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29.17px" height="29.17px" viewBox="0 0 24 24">
                            <path fill="#2c220f" d="M12 2a10 10 0 1 0 10 10A10.01 10.01 0 0 0 12 2m5.939 7.713v.646a.37.37 0 0 1-.38.37a5.364 5.364 0 0 1-2.903-1.108v4.728a3.938 3.938 0 0 1-1.18 2.81a4.011 4.011 0 0 1-2.87 1.17a4.103 4.103 0 0 1-2.862-1.17a3.98 3.98 0 0 1-1.026-3.805c.159-.642.48-1.232.933-1.713a3.58 3.58 0 0 1 2.79-1.313h.82v1.703a.348.348 0 0 1-.39.348a1.918 1.918 0 0 0-1.23 3.631c.27.155.572.246.882.267c.24.01.48-.02.708-.092a1.928 1.928 0 0 0 1.313-1.816V5.754a.359.359 0 0 1 .359-.36h1.415a.359.359 0 0 1 .359.34a3.303 3.303 0 0 0 1.282 2.245a3.25 3.25 0 0 0 1.641.636a.37.37 0 0 1 .338.35z" />
                        </svg>
                    </a>
                    <!--facebook-->
                    <a target=”_blank” href="https://www.facebook.com/DNskreativepartyneeds">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29.17px" height="29.17px" viewBox="0 0 24 24">
                            <path fill="#2c220f" d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95" />
                        </svg>
                    </a>
                </div>
            </div>
        </footer>
        
        <a href="#" class="to-top" title="Go to top.">
            <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 24 24">
                <path fill="#3f3f3f" d="M6 4h12v2H6zm.707 11.707L11 11.414V20h2v-8.586l4.293 4.293l1.414-1.414L12 7.586l-6.707 6.707z" />
            </svg>
        </a>

        <a href="https://m.me/DNskreativepartyneeds" class="chatWithUs" title="Chat with us." target="_blank">
            <svg class="pulse" xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 256 256">
                <defs>
                    <radialGradient id="logosMessenger0" cx="19.247%" cy="99.465%" r="108.96%" fx="19.247%" fy="99.465%">
                        <stop offset="0%" stop-color="#09f" />
                        <stop offset="60.975%" stop-color="#a033ff" />
                        <stop offset="93.482%" stop-color="#ff5280" />
                        <stop offset="100%" stop-color="#ff7061" />
                    </radialGradient>
                </defs>
                <path fill="url(#logosMessenger0)" d="M128 0C55.894 0 0 52.818 0 124.16c0 37.317 15.293 69.562 40.2 91.835c2.09 1.871 3.352 4.493 3.438 7.298l.697 22.77c.223 7.262 7.724 11.988 14.37 9.054L84.111 243.9a10.218 10.218 0 0 1 6.837-.501c11.675 3.21 24.1 4.92 37.052 4.92c72.106 0 128-52.818 128-124.16S200.106 0 128 0" />
                <path fill="#fff" d="m51.137 160.47l37.6-59.653c5.98-9.49 18.788-11.853 27.762-5.123l29.905 22.43a7.68 7.68 0 0 0 9.252-.027l40.388-30.652c5.39-4.091 12.428 2.36 8.82 8.085l-37.6 59.654c-5.981 9.489-18.79 11.852-27.763 5.122l-29.906-22.43a7.68 7.68 0 0 0-9.25.027l-40.39 30.652c-5.39 4.09-12.427-2.36-8.818-8.085" />
            </svg>
        </a>
        <script src="script/formalquote.js"></script>
        <script src="script/to-top.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </body>
</html>