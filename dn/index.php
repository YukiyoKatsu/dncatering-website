<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DN | Home Page</title>
        <link rel="icon" type="image/x-icon" href="user-files\images\logo\logo.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="user-files\Styles\HomePage.css">
        <link rel="stylesheet" href="user-files\styles\footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link rel="stylesheet" href="user-files\styles\to-top.css">
    </head>
    <body>
        <header class="header">
            <div class="logo">
                <a href="index.php"><img src="user-files\images\logo\logo.png" alt="logo"></a>
            </div>
            <ul>
                <li class="active"><a href="index.php" aria-current="page">Home</a></li>
                <li><a href="user-files\about-page.php">About</a></li>
                <li><a href="user-files\packages-page.php">Packages</a></li>
                <li><a href="user-files\formal-quote.php">Get Formal Quote</a></li>
                <!-- <li><a href="MyReservations.php">My Reservations</a></li> -->
            </ul>
            <!-- <button onclick="window.location.href='LogInPage.php'">LOG IN</button> -->
        </header>

        <div class="headerphoto">
            <img src="user-files\images\header\homepage_photo.png" class="image">
            <div class="HeaderText">
                <a href="#CustomersFeedback">
                    <button>
                        <p>Customer's Feedback</p>
                    </button>
                </a>
                <p class="page">HOME</p>
                <p class="dns">DN's Catering Services</p>
                <p class="motto">"YOUR OCCASION & VISION + OUR PLANNING & MANAGEMENT = THE PERFECT EVENT"</p>
            </div>
        </div>
        
        <div class="categories">
            <div class="title">Our Categories</div>
            <div class="carousel">
                <ul class="list">
                    <li class="item">
                        <a href="user-files\packages-page.php#wedding">
                            <div class="container_categories" >
                                <img src="user-files\images\categories\wedding_categories.png" class="categories_image">
                                <h3 class="categories_text">Wedding</h3>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <a href="user-files\packages-page.php#adultParty">
                            <div class="container_categories">
                                <img src="user-files\images\categories\adult-party_categories.png" class="categories_image">
                                <h3 class="categories_text">Adult Party</h3>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <a href="user-files\packages-page.php#birthday">
                            <div class="container_categories">
                                <img src="user-files\images\categories\birthday-party_categories.png" class="categories_image">
                                <h3 class="categories_text">Birthday Party</h3>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <a href="user-files\packages-page.php#debut">
                            <div class="container_categories">
                                <img src="user-files\images\categories\debut_categories.png" class="categories_image">
                                <h3 class="categories_text">Debut</h3>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <a href="user-files\packages-page.php#baptism">
                            <div class="container_categories">
                                <img src="user-files\images\categories\baptism_categories.png" class="categories_image">
                                <h3 class="categories_text">Baptism</h3>
                            </div>
                        </a>
                    </li>
                </ul>
                <button onclick="handleClick('previous')" class="button button--previous" type="button">➤</button>
                <button onclick="handleClick('next')" class="button button--next" type="button">➤</button>
            </div>
        </div>

        <div class="picWithText">
            <div class="pictures">
                <div>
                    <img src="user-files\images\home\home-pic-02.png" class="picRight">
                </div>
                <div>
                    <img src="user-files\images\home\home-pic-01.png" class="picLeft">
                </div>
            </div>
            <div class="textOverlay">
                <p class="text1">We're here to make your event unforgettable. Let's party with</p>
                <p class="text2">DN's Kreative Events & Party Needs</p>
            </div>
        </div>

        <div class="CustomersFeedback" id="CustomersFeedback">
            <div class="head">
                <div class="title">Customer’s Feedback</div>
                <div class="subtitle">
                    <p class="UsersSayAboutUs"> WHAT OUR <span class="UsersSay">USERS SAY</span> ABOUT US </p>
                    <button class="SendFeedback" data-open-modal>Send Feedback</button>
                </div>
            </div>
            <div class="carousel">
                <ul class="list2" id="list2">
                    <?php
                        include("user-files/php/config.php");
                        include("user-files/php/client-feedback.php");
                    ?>
                    <button onclick="handleClick1('previous')" id="button--previous" class="button button--previous" type="button">➤</button>
                    <button onclick="handleClick1('next')" id="button--next" class="button button--next" type="button">➤</button>
                </ul>
                <p class="nodisplay" id="nodisplay">How was your experience with DN? Let us know by clicking the <span style="color: #B78628;">"Send Feedback"</span> button.</p>
            </div>
        </div>

        
        <dialog class="SendFeedback_wrapper" data-modal>
            <div class="SendFeedback_header">
                <div class="SendFeedback_Title">Send <span style="color: #B78628;">Feedback</span></div>
                <button data-close-modal class="close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 8 8">
                        <path fill="#3F3F3F" d="M1.41 0L0 1.41l.72.72L2.5 3.94L.72 5.72L0 6.41l1.41 1.44l.72-.72l1.81-1.81l1.78 1.81l.69.72l1.44-1.44l-.72-.69l-1.81-1.78l1.81-1.81l.72-.72L6.41 0l-.69.72L3.94 2.5L2.13.72z" />
                    </svg>
                </button>
            </div>
            <form id="feedbackForm" class="SendFeedback_Content" action="" method="post" onsubmit="submitForm(event);">
                <div class="ratingTitle">
                    <p>Rate Us</p>
                </div>
                <div class="starContainer">
                    <div class="star-widget">
                        <input type="radio" name="rate" value="5" id="rate-5" required>
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" value="4" id="rate-4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" value="3" id="rate-3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" value="2" id="rate-2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" value="1" id="rate-1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                </div>

                <label for="FeedbackName" class="label">Name</label>
                <input type="text" id="name" name="name" placeholder="(Optional)" class="inputName">
                <label for="FeedbackContent" class="label">Comments</label>
                <textarea type="text" id="comments" name="comments" placeholder="Tell us about your experience..." class="inputComment" maxlength="500" oninput="countCharacters(this)" required></textarea>
                <div class="characterCount" style="display: flex; justify-content: flex-end;">
                    <p><span id="characterCount"></span>/500</p>
                </div>
                <div class="g-recaptcha" id="g-recaptcha" data-sitekey="6Lca0vApAAAAAHmwCzTYrTec1mAVXHb3cPIkGMYI"></div>
                <input type="submit" name="submit" value="Submit" class="SubmitButton">
                <?php
                    include("user-files/php/config.php");
                    include("user-files/php/feedback-db-connector.php");
                ?>
            </form>
        </dialog>
        <?php include("user-files/php/recaptcha.php"); ?>
        <footer>
            <div class="footer">
                <div class="footerLogo">
                    <img src="user-files\images\logo\footer-logo.png" alt="logo" class="footerLogo" onclick="window.open('https://www.facebook.com/DNskreativepartyneeds')">
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
    </body>
    <script src="user-files\script\homepage.js"></script>
    <script src="user-files\script\to-top.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</html>