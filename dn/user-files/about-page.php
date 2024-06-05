<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DN | About Us</title>
        <link rel="icon" type="image/x-icon" href="images\logo\logo.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Styles\AboutPage.css">
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
                <li class="active"><a href="about-page.php" aria-current="page">About</a></li>
                <li><a href="packages-page.php">Packages</a></li>
                <li><a href="formal-quote.php">Get Formal Quote</a></li>
                <!-- <li><a href="MyReservations.php">My Reservations</a></li> -->
            </ul>
            <!-- <button onclick="window.location.href='LogInPage.php'">LOG IN</button> -->
        </header>

        <div class="headerphoto">
            <img src="images\header\about_photo.png" class="image">
            <div class="HeaderText">
                <a href="#ourCategories">
                    <button>
                        <p>Our Categories</p>
                    </button>
                </a>
                <p class="page">About Us</p>
                <p class="dns">DN's Catering Services</p>
                <p class="motto">"YOUR OCCASION & VISION + OUR PLANNING & MANAGEMENT = THE PERFECT EVENT"</p>
            </div>
        </div>

        <div class="introText_container">
            <div class="textBehind"> DN
                <div class="textFront">Your Perfect Celebration Starts Here</div>
            </div>
        </div>

        <div class="section_Container">
            <img src="images\about-us\who-we-are.jpg">
            <div class="textContainer">
                <p class="title">WHO WE ARE</p>
                <p class="sub_title">Savor the Moment, We'll Handle the Flavor</p>
                <p class="paragraph">
                    DN's Kreative Events & Party Needs started in 2016. 
                    As a custom caterer we create & customize appropriate 
                    to our client's taste preferences, budget demands and
                    theme considerations. As a full-service caterer, we 
                    can plan and coordinate all aspects of your affair. 
                    Our event proposal will encompass all other aspects 
                    beyond food and beverage, including all rentals, 
                    decorations, and layout, lighting,  and more.
                </p>
            </div>
        </div>

        <div class="imagefull">
            <img src="images\about-us\about-us_pic01.png">
        </div>

        <div class="section_Container">
            <img src="images\about-us\why-choose-us.jpg">
            <div class="textContainer">
                <p class="title">WHY CHOOSE US</p>
                <p class="sub_title">Crafting Memories, One Bite at a Time</p>
                <p class="paragraph">
                    Our event specialists can help you with the planning 
                    of your event. Feel free to contact us if you need 
                    assistance with menu development. We are happy to help 
                    and able to create custom proposals and cost summaries. 
                    Contact us anytime for questions. If you don’t see 
                    something listed that you’re looking for, simply ask us.
                </p>
            </div>
        </div>

        <div class="categories" id="ourCategories">
            <div class="title">Our Categories</div>
            <div class="carousel">
                <ul class="list">
                    <li class="item">
                        <a href="packages-page.php#wedding">
                            <div class="container_categories" >
                                <img src="images\categories\wedding_categories.png" class="categories_image">
                                <h3 class="categories_text">Wedding</h3>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <a href="packages-page.php#adultParty">
                            <div class="container_categories">
                                <img src="images\categories\adult-party_categories.png" class="categories_image">
                                <h3 class="categories_text">Adult Party</h3>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <a href="packages-page.php#birthday">
                            <div class="container_categories">
                                <img src="images\categories\birthday-party_categories.png" class="categories_image">
                                <h3 class="categories_text">Birthday Party</h3>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <a href="packages-page.php#debut">
                            <div class="container_categories">
                                <img src="images\categories\debut_categories.png" class="categories_image">
                                <h3 class="categories_text">Debut</h3>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <a href="packages-page.php#baptism">
                            <div class="container_categories">
                                <img src="images\categories\baptism_categories.png" class="categories_image">
                                <h3 class="categories_text">Baptism</h3>
                            </div>
                        </a>
                    </li>
                </ul>
                <button onclick="handleClick('previous')" class="button button--previous" type="button">➤</button>
                <button onclick="handleClick('next')" class="button button--next" type="button">➤</button>
            </div>
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
    </body>
    <script src="Script\HomePage.js"></script>
    <script src="script\to-top.js"></script>
</html>
