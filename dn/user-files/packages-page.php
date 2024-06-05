<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DN | Packages</title>
        <link rel="icon" type="image/x-icon" href="images\logo\logo.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Styles\PackagesPage.css">
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
              <li class="active"><a href="packages-page.php" aria-current="page">Packages</a></li>
              <li><a href="formal-quote.php">Get Formal Quote</a></li>
                <!-- <li><a href="MyReservations.php">My Reservations</a></li> -->
            </ul>
            <!-- <button onclick="window.location.href='LogInPage.php'">LOG IN</button> -->
        </header>

        <div class="headerphoto">
            <img src="images\header\event-packages_photo.png" class="image">
            <div class="HeaderText">
				<a href="formal-quote.php#formalQuote_container">
                    <button>
                        <p>Get Formal Quote</p>
                    </button>
                </a>
                <p class="page">Event Packages</p>
                <p class="dns">DN's Catering Services</p>
                <p class="motto">"YOUR OCCASION & VISION + OUR PLANNING & MANAGEMENT = THE PERFECT EVENT"</p>
            </div>
        </div>

<!-- Wedding Packages -->
        <div class="category" id="wedding">
            <div class="title">Wedding Packages</div>
            <div class="carousel">
                <ul class="list">
                    <li class="item">
                        <div onclick="openDialog('majestyWedding')" class="container_categories" >
                            <img src="images\packages\home-packages-pics\wedding_majesty.png" class="categories_image">
                            <div class="categories_text">
                                <h1>PHP 185,000</h1>
                                <h3>Majesty Wedding Package</h3>
                                <p>| 100 Pax</p>
                            </div>
                        </div>
                        <dialog class="modal" id="majestyWedding">
                            <div class="column_left">
                                <div class="modal_title">
                                    <button onclick="closeDialog('majestyWedding')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29px" height="29px" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                <path fill="#3F3F3F" d="M3.283 10.94a1.5 1.5 0 0 0 0 2.12l5.656 5.658a1.5 1.5 0 1 0 2.122-2.122L7.965 13.5H19.5a1.5 1.5 0 0 0 0-3H7.965l3.096-3.096a1.5 1.5 0 1 0-2.122-2.121z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="modal_categorytitle">
                                        <h1>Majesty Wedding Package</h1>
                                        <p>| 100 Pax</p>
                                    </div>
                                </div>
                                <div class="modal_pictures">
                                    <img src="images\packages\pictures-dn\Wedding\Majesty\wedding_majesty_01.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Wedding\Majesty\wedding_majesty_02.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Wedding\Majesty\wedding_majesty_03.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Wedding\Majesty\wedding_majesty_04.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Wedding\Majesty\wedding_majesty_05.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Wedding\Majesty\wedding_majesty_06.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                </div>
                                <div class="modal_bottom">
                                    <h1>PHP 185,000</h1>
                                    <button onclick="redirectToFormalQuote(0,0)">Get Formal Quote</button>
                                </div>
                            </div>
                            <div class="column_right">
                                <p>Other Details</p>
                                <div class="details">
                                    <h1>Catering Service</h1>
                                    <ul>
                                      <li>Pork or Beef</li>
                                      <li>Chicken</li>
                                      <li>Fish</li>
                                      <li>Veggies</li>
                                      <li>Pasta</li>
                                      <li>Dessert</li>
                                      <li>Rice</li>
                                      <li>Drinks</li>
                                      <li>Pica-Pica</li>
                                    </ul>
                                    
                                    <h1>Complete Catering Equipment</h1>
                                    <ul>
                                      <li>Round tables with Table number</li>
                                      <li>Chairs Mono blocks for guest</li>
                                      <li>Vip Tables with Centerpiece & Infinity Chairs (max 20)</li>
                                      <li>Buffet Table</li>
                                      <li>Registration Table</li>
                                      <li>Gift & Cake Table</li>
                                      <li>Waiter & Servers</li>
                                      <li>Table napkin</li>
                                    </ul>
                                    
                                    <h1>Theme Backdrop with Couples Name</h1>
                                    <ul>
                                      <li>Couples Couch & Couples Table</li>
                                      <li>Entrance Arch with Entrance Signage</li>
                                      <li>Ceiling Decorations & Centerpiece</li>
                                    </ul>
                                    
                                    <h1>Sounds and Lights with DJ</h1>
                                    <ul>
                                      <li>Projector & White Screen</li>
                                    </ul>
                                    
                                    <h1>Photo & Videographer</h1>
                                    <ul>
                                      <li>Prenup Photo & Video Shoot</li>
                                      <li>Save the Date Video</li>
                                      <li>Photo & Video on the day</li>
                                      <li>Same day edit video</li>
                                      <li>MTV style video clip (additional if full video)</li>
                                      <li>8x11 magazine type photoboo,000</li>
                                      <li>Free AVP video (optional)</li>
                                      <li>USB Copy & Google Drive Upload</li>
                                    </ul>
                                    
                                    <h1>Lively Host/Emcee</h1>
                                    <ul>
                                      <li>Program Flow</li>
                                    </ul>
                                    
                                    <h1>Bridal Car</h1>
                                    <ul>
                                      <li>Hotel-Church-Venue</li>
                                    </ul>
                                    
                                    <h1>Wedding Coordinator</h1>
                                    <ul>
                                      <li>Hotel</li>
                                      <li>Church</li>
                                      <li>Venue</li>
                                    </ul>
                                    
                                    <h1>2hrs Unlimited Photobooth</h1>
                                    <ul>
                                      <li>(4r or strips) with props</li>
                                      <li>Theme layout design</li>
                                      <li>(additional if upgrade magnet)</li>
                                    </ul>
                                    
                                    <h1>Hair & Make-up</h1>
                                    <ul>
                                      <li>Bride</li>
                                      <li>Groom</li>
                                      <li>2 Mothers</li>
                                      <li>With Retouch</li>
                                    </ul>
                                    
                                    <h1>2 Layer Cake</h1>
                                    <ul>
                                      <li>Theme design (Customized) with free Cupcakes</li>
                                    </ul>
                                    
                                    <h1>Gowns & Suits</h1>
                                    <ul>
                                      <li>Made to own/Customized with Accessories</li>
                                      <li>Veil-Cord-Pillow-Coins-Candles</li>
                                    </ul>
                                    
                                    <h1>Flowers for Entourage</h1>
                                    <ul>
                                      <li>Bride for Bouquet</li>
                                      <li>Groom</li>
                                      <li>2 pairs parents</li>
                                      <li>10 pairs for principal</li>
                                      <li>Maid of honor & Bestman</li>
                                      <li>3 pairs secondary principals</li>
                                      <li>3 pairs Groomsmen & Bridesmaid</li>
                                      <li>3 flower girls</li>
                                    </ul>
                                    
                                    <h1>Freebies</h1>
                                    <ul>
                                      <li>50 invitations</li>
                                      <li>50 guest souvenirs</li>
                                      <li>Wine for couple toasting</li>
                                      <li>Here comes the bride banner</li>
                                      <li>Robe for bride</li>
                                      <li>Signature frame</li>
                                      <li>Free use of red carpet</li>
                                      <li>Free use of mannequin for the bride</li>
                                      <li>Dove for picture taking</li>
                                      <li>Wedding wands</li>
                                      <li>12x16 frame</li>
                                      <li>Find your seats board</li>
                                    </ul>
                                </div>
                            </div>
                        </dialog>
                    </li>
                    <li class="item">
                        <div onclick="openDialog('emeraldWedding')" class="container_categories">
                            <img src="images\packages\home-packages-pics\wedding_emerald.png" class="categories_image">
                            <div class="categories_text">
                                <h1>PHP 130,000</h1>
                                <h3>Emerald Wedding Package</h3>
                                <p>| 100 Pax</p>
                            </div>
                        </div>
                        <dialog class="modal" id="emeraldWedding">
                            <div class="column_left">
                                <div class="modal_title">
                                    <button onclick="closeDialog('emeraldWedding')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29px" height="29px" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                <path fill="#3F3F3F" d="M3.283 10.94a1.5 1.5 0 0 0 0 2.12l5.656 5.658a1.5 1.5 0 1 0 2.122-2.122L7.965 13.5H19.5a1.5 1.5 0 0 0 0-3H7.965l3.096-3.096a1.5 1.5 0 1 0-2.122-2.121z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="modal_categorytitle">
                                        <h1>Emerald Wedding Package</h1>
                                        <p>| 100 Pax</p>
                                    </div>
                                </div>
                                <div class="modal_pictures">
                                    <img src="images\packages\pictures-dn\Wedding\Emerald\wedding_emerald_01.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Wedding\Emerald\wedding_emerald_02.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Wedding\Emerald\wedding_emerald_03.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Wedding\Emerald\wedding_emerald_04.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                </div>
                                <div class="modal_bottom">
                                    <h1>PHP 130,000</h1>
                                    <button onclick="redirectToFormalQuote(0,1)">Get Formal Quote</button>
                                </div>
                            </div>
                            <div class="column_right">
                                <p>Other Details</p>
                                <div class="details">
                                    <h1>Catering Service</h1>
                                    <ul>
                                      <li>Pork or Beef</li>
                                      <li>Chicken</li>
                                      <li>Fish</li>
                                      <li>Veggies</li>
                                      <li>Pasta</li>
                                      <li>Dessert</li>
                                      <li>Rice</li>
                                      <li>Drinks</li>
                                    </ul>
                                    
                                    <h1>Catering Equipment</h1>
                                    <ul>
                                      <li>Couples table</li>
                                      <li>Complete Catering utensils</li>
                                      <li>Tables & Chairs Monoblocks for guest</li>
                                      <li>Vip Tables Long (max 20)</li>
                                      <li>Centerpiece with table number</li>
                                      <li>Buffet Table</li>
                                      <li>Registration Table</li>
                                      <li>Gift Table</li>
                                    </ul>
                                    
                                    <h1>Theme Backdrop</h1>
                                    <ul>
                                      <li>Backdrop & Couples name with couch</li>
                                      <li>Entrance & Venue Styling</li>
                                    </ul>
                                    
                                    <h1>Photo & Video Coverage</h1>
                                    <ul>
                                      <li>Photo on the Day</li>
                                      <li>My highlights video</li>
                                      <li>Same day edit</li>
                                      <li>8x8 Magazine type photoboo,000</li>
                                      <li>USB/Google Drive Upload</li>
                                    </ul>
                                    
                                    <h1>Hair & Make-up</h1>
                                    <ul>
                                      <li>Bride and Groom</li>
                                      <li>2 Mother</li>
                                    </ul>
                                    
                                    <h1>1 Layer Cake</h1>
                                    <ul>
                                      <li>With free Cupcakes</li>
                                    </ul>
                                    
                                    <h1>Sounds & Lights</h1>
                                    <ul>
                                      <li>Projector with white screen</li>
                                    </ul>
                                    
                                    <h1>Coordinator</h1>
                                    <ul>
                                      <li>Hotel & Venue only</li>
                                    </ul>
                                    
                                    <h1>Photo Booth</h1>
                                    <ul>
                                      <li>2 hrs unlimited shots</li>
                                      <li>Theme Layout</li>
                                    </ul>
                                    
                                    <h1>Pica-Pica Table</h1>
                                    <ul>
                                      <li>Nachos</li>
                                      <li>Peanuts</li>
                                      <li>Mini cookies</li>
                                      <li>Pretzels sticks</li>
                                      <li>Puto flan/ Ensaymadas</li>
                                      <li>Stick-O</li>
                                      <li>Biscuits</li>
                                      <li>Mallows & Gems</li>
                                      <li>Small donut holder</li>
                                      <li>Chocolate fountain</li>
                                    </ul>
                                    
                                    <h1>Bride bouquet</h1>
                                    <ul>
                                      <li>Groom corsage or Bride & Groom Robe with names</li>
                                    </ul>
                                    
                                    <h1>Freebies</h1>
                                    <ul>
                                      <li>40 souvenirs</li>
                                      <li>40 invitations</li>
                                      <li>Here comes the bride banner</li>
                                      <li>Free use of red carpet</li>
                                      <li>Dove for picture taking</li>
                                      <li>Wine for couple toasting</li>
                                      <li>12x16 frame</li>
                                      <li>Find your seats board</li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </dialog>
                    </li>
                    <li class="item">
                        <div onclick="openDialog('coralWedding')" class="container_categories">
                            <img src="images\packages\home-packages-pics\wedding_coral.png" class="categories_image">
                            <div class="categories_text">
                                <h1>PHP 88,000</h1>
                                <h3>Coral Wedding Package</h3>
                                <p>| 100 Pax</p>
                            </div>
                        </div>
                        <dialog class="modal" id="coralWedding">
                            <div class="column_left">
                                <div class="modal_title">
                                    <button onclick="closeDialog('coralWedding')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29px" height="29px" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                <path fill="#3F3F3F" d="M3.283 10.94a1.5 1.5 0 0 0 0 2.12l5.656 5.658a1.5 1.5 0 1 0 2.122-2.122L7.965 13.5H19.5a1.5 1.5 0 0 0 0-3H7.965l3.096-3.096a1.5 1.5 0 1 0-2.122-2.121z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="modal_categorytitle">
                                        <h1>Coral Wedding Package</h1>
                                        <p>| 100 Pax</p>
                                    </div>
                                </div>
                                <div class="modal_pictures">
                                    <img src="images\packages\pictures-dn\Wedding\Coral\wedding_coral_01.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Wedding\Coral\wedding_coral_02.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Wedding\Coral\wedding_coral_03.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                </div>
                                <div class="modal_bottom">
                                    <h1>PHP 88,000</h1>
                                    <button onclick="redirectToFormalQuote(0,2)">Get Formal Quote</button>
                                </div>
                            </div>
                            <div class="column_right">
                                <p>Other Details</p>
                                <div class="details">
                                    <h1>Catering Services</h1>
                                    <ul>
                                      <li>Pork or Beef</li>
                                      <li>Chicken</li>
                                      <li>Fish or Veggies</li>
                                      <li>Pasta</li>
                                      <li>Dessert</li>
                                      <li>Rice</li>
                                      <li>Drinks</li>
                                      <li>Pica-Pica</li>
                                    </ul>
                                    
                                    <h1>Complete Catering Equipment</h1>
                                    <ul>
                                      <li>Round tables with Table number</li>
                                      <li>Chairs Monoblocks for guest</li>
                                      <li>Vip Tables with Centerpiece</li>
                                      <li>Buffet Table</li>
                                      <li>Registration Table</li>
                                      <li>Gift & Cake Table</li>
                                      <li>Waiter & Servers</li>
                                      <li>Table napkin</li>
                                    </ul>
                                    
                                    <h1>Theme Backdrop with Couples Name</h1>
                                    <ul>
                                      <li>Couples Table</li>
                                      <li>Entrance arch with entrance signage</li>
                                      <li>Ceiling decorations & Centerpiece</li>
                                    </ul>
                                    
                                    <h1>Photo & Videographer</h1>
                                    <ul>
                                      <li>Photo & Video on the day</li>
                                      <li>MTV style video clip (additional if full video)</li>
                                      <li>USB Copy & Google Drive Upload</li>
                                    </ul>
                                    
                                    <h1>Lively Host/Emcee</h1>
                                    <ul>
                                      <li>Program Flow</li>
                                    </ul>
                                    
                                    <h1>Wedding Coordinator</h1>
                                    <ul>
                                      <li>Venue only</li>
                                    </ul>
                                    
                                    <h1>Photobooth</h1>
                                    <ul>
                                      <li>2 hrs unlimited</li>
                                      <li>(4r or strips) with Props</li>
                                      <li>Theme layout design</li>
                                      <li>(additional upgrade if magnet)</li>
                                    </ul>
                                    
                                    <h1>Hair & Make-up</h1>
                                    <ul>
                                      <li>Bride & Groom</li>
                                    </ul>
                                    
                                    <h1>1 Layer cake</h1>
                                    <ul>
                                      <li>Theme design (customized) with free Cupcakes</li>
                                    </ul>
                                    
                                    <h1>Sounds & Lights</h1>
                                    <ul>
                                      <li>With DJ</li>
                                    </ul>
                                    
                                    <h1>Freebies</h1>
                                    <ul>
                                      <li>30 souvenirs</li>
                                      <li>30 invitations</li>
                                      <li>Free use of red carpet</li>
                                      <li>Signature Frame</li>
                                      <li>Dove for picture taking</li>
                                      <li>Wine for couple toasting</li>
                                      <li>Find your seats board</li>
                                    </ul>                                        
                                </div>
                            </div>
                        </dialog>
                    </li>
                    <li class="item">
                        <div onclick="openDialog('affordableWedding')" class="container_categories">
                            <img src="images\packages\home-packages-pics\wedding_affordable.png" class="categories_image">
                            <div class="categories_text">
                                <h1>Customized Price</h1>
                                <h3>Affordable Wedding Package</h3>
                                <p>| 50 Pax to 100 Pax</p>
                            </div>
                        </div>
                        <dialog class="modal" id="affordableWedding">
                            <div class="column_left">
                                <div class="modal_title">
                                    <button onclick="closeDialog('affordableWedding')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29px" height="29px" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                <path fill="#3F3F3F" d="M3.283 10.94a1.5 1.5 0 0 0 0 2.12l5.656 5.658a1.5 1.5 0 1 0 2.122-2.122L7.965 13.5H19.5a1.5 1.5 0 0 0 0-3H7.965l3.096-3.096a1.5 1.5 0 1 0-2.122-2.121z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="modal_categorytitle">
                                        <h1>Affordable Wedding Package</h1>
                                        <p>| 50 Pax to 100 Pax</p>
                                    </div>
                                </div>
                                <div class="modal_pictures">
                                    <img src="images\packages\pictures-dn\Wedding\Affordable\wedding_affordable_01.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Wedding\Affordable\wedding_affordable_02.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Wedding\Affordable\wedding_affordable_03.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Wedding\Affordable\wedding_affordable_04.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                </div>
                                <div class="modal_bottom">
                                    <h1>Customized Price</h1>
                                    <button onclick="redirectToFormalQuote(0,3)">Get Formal Quote</button>
                                </div>
                            </div>
                            <div class="column_right">
                                <p>Other Details</p>
                                <div class="details">
                                    <h1>Catering Services</h1>
                                    <ul>
                                      <li>Pork or Beef</li>
                                      <li>Chicken</li>
                                      <li>Fish or Veggies</li>
                                      <li>Pasta</li>
                                      <li>Dessert</li>
                                      <li>Rice</li>
                                      <li>Drinks</li>
                                      <li>Pica-Pica</li>
                                    </ul>
                                    
                                    <h1>Complete Catering Equipment</h1>
                                    <ul>
                                      <li>Round tables with Table number</li>
                                      <li>Chairs Monoblocks for guest</li>
                                      <li>Vip Tables with Centerpiece</li>
                                      <li>Buffet Table</li>
                                      <li>Registration Table</li>
                                      <li>Gift & Cake Table</li>
                                      <li>Waiter & Servers</li>
                                      <li>Table napkin</li>
                                    </ul>
                                    
                                    <h1>Theme Backdrop with Couples Name</h1>
                                    <ul>
                                      <li>Couples Table</li>
                                      <li>Entrance arch with entrance signage</li>
                                      <li>Ceiling decorations & Centerpiece</li>
                                    </ul>
                                    
                                    <h1>Photo & Videographer</h1>
                                    <ul>
                                      <li>Photo & Video on the day</li>
                                      <li>MTV style video clip (additional if full video)</li>
                                      <li>USB Copy & Google Drive Upload</li>
                                    </ul>
                                    
                                    <h1>Lively Host/Emcee</h1>
                                    <ul>
                                      <li>Program Flow</li>
                                    </ul>
                                    
                                    <h1>Wedding Coordinator</h1>
                                    <ul>
                                      <li>Venue only</li>
                                    </ul>
                                    
                                    <h1>Photobooth</h1>
                                    <ul>
                                      <li>2 hrs unlimited</li>
                                      <li>(4r or strips) with Props</li>
                                      <li>Theme layout design</li>
                                      <li>(additional upgrade if magnet)</li>
                                    </ul>
                                    
                                    <h1>Hair & Make-up</h1>
                                    <ul>
                                      <li>Bride & Groom</li>
                                    </ul>
                                    
                                    <h1>1 Layer cake</h1>
                                    <ul>
                                      <li>Theme design (customized) with free Cupcakes</li>
                                    </ul>
                                    
                                    <h1>Sounds & Lights</h1>
                                    <ul>
                                      <li>With DJ</li>
                                    </ul>
                                    
                                    <h1>Freebies</h1>
                                    <ul>
                                      <li>30 souvenirs</li>
                                      <li>30 invitations</li>
                                      <li>Free use of red carpet</li>
                                      <li>Signature Frame</li>
                                      <li>Dove for picture taking</li>
                                      <li>Wine for couple toasting</li>
                                      <li>Find your seats board</li>
                                    </ul>                                                                     
                                </div>
                            </div>
                        </dialog>
                    </li>
                </ul>
                <button onclick="handleClick('previous')" class="button button--previous" type="button">➤</button>
                <button onclick="handleClick('next')" class="button button--next" type="button">➤</button>
            </div>
        </div>

<!-- Adult Party Packages -->
        <div class="category" id="adultParty">
            <div class="title">Adult Party Packages</div>
            <div class="carousel">
                <ul class="list1">
                    <li class="item1">
                        <div onclick="openDialog('bronzeAdult')" class="container_categories" >
                            <img src="images\packages\home-packages-pics\adult_bronze.png" class="categories_image">
                            <div class="categories_text">
                                <h1>PHP 50,000</h1>
                                <h3>Bronze Package</h3>
                                <p>| 100 Pax / 50 Pax</p>
                            </div>
                        </div>
                        <dialog class="modal" id="bronzeAdult">
                            <div class="column_left">
                                <div class="modal_title">
                                    <button onclick="closeDialog('bronzeAdult')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29px" height="29px" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                <path fill="#3F3F3F" d="M3.283 10.94a1.5 1.5 0 0 0 0 2.12l5.656 5.658a1.5 1.5 0 1 0 2.122-2.122L7.965 13.5H19.5a1.5 1.5 0 0 0 0-3H7.965l3.096-3.096a1.5 1.5 0 1 0-2.122-2.121z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="modal_categorytitle">
                                        <h1>Bronze Package</h1>
                                        <p>| 100 Pax / 50 Pax</p>
                                    </div>
                                </div>
                                <div class="modal_pictures">
                                    <img src="images\packages\pictures-dn\adult-party\Bronze\adultParty_bronze_01.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\adult-party\Bronze\adultParty_bronze_02.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\adult-party\Bronze\adultParty_bronze_03.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\adult-party\Bronze\adultParty_bronze_04.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                </div>
                                <div class="modal_bottom">
                                    <h1>PHP 50,000</h1>
                                    <button onclick="redirectToFormalQuote(1,0)">Get Formal Quote</button>
                                </div>
                            </div>
                            <div class="column_right">
                                <p>Other Details</p>
                                <div class="details">
                                    <h1>Catering Service</h1>
                                    <ul>
                                      <li>Rice</li>
                                      <li>Pork or Beef</li>
                                      <li>Chicken</li>
                                      <li>Fish or Veggies</li>
                                      <li>Pasta</li>
                                      <li>Dessert</li>
                                      <li>Drinks</li>
                                    </ul>
                                    
                                    <h1>Skirted Buffet Table</h1>
                                    <ul>
                                      <li>Tables & Chairs with Cover (Theme Color)</li>
                                      <li>Complete Utensils Equipment</li>
                                      <li>Centerpiece</li>
                                      <li>Cake Table</li>
                                      <li>Registration Table</li>
                                      <li>Gift Table</li>
                                    </ul>
                                    
                                    <h1>Theme Backdrop</h1>
                                    <ul>
                                      <li>Celebrant Couch/Chair</li>
                                      <li>Venue Decors</li>
                                      <li>Entrance</li>
                                    </ul>
                                    
                                    <h1>Photo Coverage</h1>
                                    <ul>
                                      <li>On the day photographer</li>
                                      <li>6x6 Photobook Album</li>
                                      <li>Google drive & FB upload</li>
                                    </ul>
                                    
                                    <h1>Sounds System</h1>
                                    <ul>
                                      <li>Lights</li>
                                      <li>DJ</li>
                                    </ul>
                                    
                                    <h1>Lively Host/Emcee</h1>
                                    <ul>
                                      <li>Program flow with a twist</li>
                                    </ul>
                                    
                                    <h1>Photobooth</h1>
                                    <ul>
                                      <li>2hrs Unlimited Shots</li>
                                      <li>Theme Layout</li>
                                    </ul>
                                    
                                    <h1>1 Layer Cake</h1>
                                    <ul>
                                      <li>1 Layer Cake with 36 Cupcakes (Non fondant)</li>
                                    </ul>
                                    
                                    <h1>Freebies</h1>
                                    <ul>
                                      <li>Find Your Seats</li>
                                      <li>40/25 Souvenirs</li>
                                      <li>40/25 Invitations</li>
                                      <li>Letter Standee</li>
                                      <li>Welcome Signage</li>
                                    </ul>
                                </div>
                            </div>
                        </dialog>
                    </li>
                    <li class="item1">
                        <div onclick="openDialog('silverAdult')" class="container_categories">
                            <img src="images\packages\home-packages-pics\adult_silver.png" class="categories_image">
                            <div class="categories_text">
                                <h1>PHP 60,000</h1>
                                <h3>Silver Package</h3>
                                <p>| 100 Pax / 50 Pax</p>
                            </div>
                        </div>
                        <dialog class="modal" id="silverAdult">
                            <div class="column_left">
                                <div class="modal_title">
                                    <button onclick="closeDialog('silverAdult')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29px" height="29px" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                <path fill="#3F3F3F" d="M3.283 10.94a1.5 1.5 0 0 0 0 2.12l5.656 5.658a1.5 1.5 0 1 0 2.122-2.122L7.965 13.5H19.5a1.5 1.5 0 0 0 0-3H7.965l3.096-3.096a1.5 1.5 0 1 0-2.122-2.121z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="modal_categorytitle">
                                        <h1>Silver Package</h1>
                                        <p>| 100 Pax / 50 Pax</p>
                                    </div>
                                </div>
                                <div class="modal_pictures">
                                    <img src="images\packages\pictures-dn\adult-party\Silver\adultParty_silver_01.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\adult-party\Silver\adultParty_silver_02.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\adult-party\Silver\adultParty_silver_03.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\adult-party\Silver\adultParty_silver_04.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                </div>
                                <div class="modal_bottom">
                                    <h1>PHP 60,000</h1>
                                    <button onclick="redirectToFormalQuote(1,1)">Get Formal Quote</button>
                                </div>
                            </div>
                            <div class="column_right">
                                <p>Other Details</p>
                                <div class="details">
                                    <h1>Catering Service</h1>
                                    <ul>
                                      <li>Rice</li>
                                      <li>Pork or Beef</li>
                                      <li>Chicken</li>
                                      <li>Fish or Veggies</li>
                                      <li>Pasta</li>
                                      <li>Dessert</li>
                                      <li>Drinks</li>
                                    </ul>
                                    
                                    <h1>Skirted Buffet Table</h1>
                                    <ul>
                                      <li>Tables & Chairs with Cover (Theme Color)</li>
                                      <li>Complete Utensils Equipment</li>
                                      <li>Centerpiece</li>
                                      <li>Cake Table</li>
                                      <li>Registration Table</li>
                                      <li>Gift Table</li>
                                    </ul>
                                    
                                    <h1>Theme Backdrop</h1>
                                    <ul>
                                      <li>Celebrant Couch/Chair</li>
                                      <li>Venue Decors</li>
                                      <li>Entrance</li>
                                    </ul>
                                    
                                    <h1>Photo and Video Coverage</h1>
                                    <ul>
                                      <li>On the day photographer</li>
                                      <li>On the day videographer (MTV style video)</li>
                                      <li>6x8 Photobook Album</li>
                                      <li>Google drive & FB upload</li>
                                    </ul>
                                    
                                    <h1>Sounds System</h1>
                                    <ul>
                                      <li>Lights</li>
                                      <li>DJ</li>
                                    </ul>
                                    
                                    <h1>Lively Host/Emcee</h1>
                                    <ul>
                                      <li>Program flow with a twist</li>
                                    </ul>
                                    
                                    <h1>Photobooth</h1>
                                    <ul>
                                      <li>2hrs Unlimited Shots Theme Layout</li>
                                    </ul>
                                    
                                    <h1>1 Layer Cake</h1>
                                    <ul>
                                      <li>1 Layer Cake with 36 Cupcakes (Non fondant)</li>
                                    </ul>
                                    
                                    <h1>Freebies</h1>
                                    <ul>
                                      <li>Find Your Seats</li>
                                      <li>50/30 Souvenirs</li>
                                      <li>50/30 Invitations</li>
                                      <li>Letter Standee</li>
                                      <li>Welcome Signage</li>
                                    </ul>                                                                    
                                </div>
                            </div>
                        </dialog>
                    </li>
                    <li class="item1">
                        <div onclick="openDialog('goldAdult')" class="container_categories">
                            <img src="images\packages\home-packages-pics\adult_gold.png" class="categories_image">
                            <div class="categories_text">
                                <h1>PHP 75,000</h1>
                                <h3>Gold Package</h3>
                                <p>| 100 Pax</p>
                            </div>
                        </div>
                        <dialog class="modal" id="goldAdult">
                            <div class="column_left">
                                <div class="modal_title">
                                    <button onclick="closeDialog('goldAdult')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29px" height="29px" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                <path fill="#3F3F3F" d="M3.283 10.94a1.5 1.5 0 0 0 0 2.12l5.656 5.658a1.5 1.5 0 1 0 2.122-2.122L7.965 13.5H19.5a1.5 1.5 0 0 0 0-3H7.965l3.096-3.096a1.5 1.5 0 1 0-2.122-2.121z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="modal_categorytitle">
                                        <h1>Gold Package</h1>
                                        <p>| 100 Pax</p>
                                    </div>
                                </div>
                                <div class="modal_pictures">
                                    <img src="images\packages\pictures-dn\adult-party\Gold\adultParty_gold_01.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\adult-party\Gold\adultParty_gold_02.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\adult-party\Gold\adultParty_gold_03.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                </div>
                                <div class="modal_bottom">
                                    <h1>PHP 75,000</h1>
                                    <button onclick="redirectToFormalQuote(1,2)">Get Formal Quote</button>
                                </div>
                            </div>
                            <div class="column_right">
                                <p>Other Details</p>
                                <div class="details">
                                    <h1>Catering Service</h1>
                                    <ul>
                                      <li>Rice</li>
                                      <li>Pork or Beef</li>
                                      <li>Chicken</li>
                                      <li>Fish or Veggies</li>
                                      <li>Pasta</li>
                                      <li>Dessert</li>
                                      <li>Drinks</li>
                                    </ul>
                                    
                                    <h1>Skirted Buffet Table</h1>
                                    <ul>
                                      <li>Tables & Chairs with Cover (Theme Color)</li>
                                      <li>Complete Utensils Equipment</li>
                                      <li>Centerpiece</li>
                                      <li>Cake Table</li>
                                      <li>Registration Table</li>
                                      <li>Gift Table</li>
                                    </ul>
                                    
                                    <h1>Theme Backdrop</h1>
                                    <ul>
                                      <li>Celebrant Couch/Chair</li>
                                      <li>Venue Decors</li>
                                      <li>Entrance</li>
                                    </ul>
                                    
                                    <h1>Photo and Video Coverage</h1>
                                    <ul>
                                      <li>On the day photographer</li>
                                      <li>On the day videographer (MTV style video)</li>
                                      <li>8x11 Photobook Album</li>
                                      <li>Google drive & FB upload</li>
                                    </ul>
                                    
                                    <h1>Sounds System</h1>
                                    <ul>
                                      <li>Lights</li>
                                      <li>Projector with screen</li>
                                      <li>DJ</li>
                                    </ul>
                                    
                                    <h1>Lively Host/Emcee</h1>
                                    <ul>
                                      <li>Program flow with a twist</li>
                                    </ul>
                                    
                                    <h1>Photobooth</h1>
                                    <ul>
                                      <li>2hrs Unlimited Shots Theme Layout</li>
                                    </ul>
                                    
                                    <h1>1 Layer Cake</h1>
                                    <ul>
                                      <li>1 Layer Cake with 36 Cupcakes (Non fondant)</li>
                                    </ul>
                                    
                                    <h1>Freebies</h1>
                                    <ul>
                                      <li>Find Your Seats</li>
                                      <li>50/30 Souvenirs</li>
                                      <li>50/30 Invitations</li>
                                      <li>Letter Standee</li>
                                      <li>Welcome Signage</li>
                                    </ul>                                                                        
                                </div>
                            </div>
                        </dialog>
                    </li>
                </ul>
                <button onclick="handleClick1('previous')" class="button button--previous" type="button">➤</button>
                <button onclick="handleClick1('next')" class="button button--next" type="button">➤</button>
            </div>
        </div>

<!-- Birthday Party Packages -->
        <div class="category" id="birthday">
            <div class="title">Birthday Party Packages</div>
            <div class="carousel">
                <ul class="list2">
                    <li class="item2">
                        <div onclick="openDialog('bday1')"  class="container_categories" >
                            <img src="images\packages\home-packages-pics\bday_package1.png" class="categories_image">
                            <div class="categories_text">
                                <h1>PHP 52,000</h1>
                                <h3>Package 1</h3>
                                <p>| 70 Adults / 30 Kids</p>
                            </div>
                        </div>
                        <dialog class="modal" id="bday1">
                            <div class="column_left">
                                <div class="modal_title">
                                    <button onclick="closeDialog('bday1')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29px" height="29px" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                <path fill="#3F3F3F" d="M3.283 10.94a1.5 1.5 0 0 0 0 2.12l5.656 5.658a1.5 1.5 0 1 0 2.122-2.122L7.965 13.5H19.5a1.5 1.5 0 0 0 0-3H7.965l3.096-3.096a1.5 1.5 0 1 0-2.122-2.121z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="modal_categorytitle">
                                        <h1>Package 1</h1>
                                        <p>| 70 Adults / 30 Kids</p>
                                    </div>
                                </div>
                                <div class="modal_pictures">
                                    <img src="images/packages/pictures-dn/birthday/package-1/birthday_package1_01.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images/packages/pictures-dn/birthday/package-1/birthday_package1_02.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images/packages/pictures-dn/birthday/package-1/birthday_package1_03.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images/packages/pictures-dn/birthday/package-1/birthday_package1_04.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images/packages/pictures-dn/birthday/package-1/birthday_package1_05.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images/packages/pictures-dn/birthday/package-1/birthday_package1_06.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                </div>
                                <div class="modal_bottom">
                                    <h1>PHP 52,000</h1>
                                    <button onclick="redirectToFormalQuote(2,0)">Get Formal Quote</button>
                                </div>
                            </div>
                            <div class="column_right">
                                <p>Other Details</p>
                                <div class="details">
                                    <h1>Catering Service</h1>
                                    <h1>For Adults:</h1>
                                    <ul>
                                      <li>Controlled Buffet</li>
                                      <li>Rice</li>
                                      <li>Pork or Beef</li>
                                      <li>Chicken</li>
                                      <li>Fish or Veggies</li>
                                      <li>Pasta</li>
                                      <li>Dessert</li>
                                      <li>Drinks</li>
                                    </ul>
                                    
                                    <h1>For Kids:</h1>
                                    <ul>
                                      <li>Packed Meal Spaghetti or Rice</li>
                                      <li>Chicken Fillet or Shanghai</li>
                                      <li>Hotdog with Mallows</li>
                                      <li>Juice</li>
                                    </ul>
                                    
                                    <h1>Skirted Buffet Table</h1>
                                    <ul>
                                      <li>Tables & Chairs with Cover (Theme Cover)</li>
                                      <li>Complete Utensils Equipment</li>
                                      <li>Cake Table</li>
                                      <li>Gift Table</li>
                                      <li>Kids Tables & Chairs</li>
                                    </ul>
                                    
                                    <h1>Theme Backdrop</h1>
                                    <ul>
                                      <li>Name Celebrant</li>
                                      <li>Entrance</li>
                                    </ul>
                                    
                                    <h1>Balloon Decors</h1>
                                    <ul>
                                      <li>Pairs of Pillars</li>
                                      <li>Centerpiece</li>
                                      <li>Cake Arc</li>
                                      <li>Ceiling Balloons</li>
                                    </ul>
                                    
                                    <h1>Entertainment</h1>
                                    <ul>
                                      <li>2 Clowns</li>
                                      <li>Program</li>
                                      <li>Game Facilitator</li>
                                      <li>Magic</li>
                                      <li>Balloon Twisting</li>
                                    </ul>
                                    
                                    <h1>Basic Sound System with Mic</h1>
                                    
                                    <h1>1 Layer Cake</h1>
                                    <ul>
                                      <li>1 Layer Cake 36 Cupcakes (Non Fondant) OR</li>
                                      <li>1 Layer Cake with 12 Cupcakes (Fondant)</li>
                                    </ul>
                                    
                                    <h1>Candy Buffet</h1>
                                    
                                    <h1>Chocolate Fountain</h1>
                                    
                                    <h1>Photobooth</h1>
                                    <ul>
                                      <li>4r</li>
                                      <li>2hrs Unlimited Shot Theme Layout</li>
                                    </ul>
                                    
                                    <h1>Freebies</h1>
                                    <ul>
                                      <li>Free Venue Photo Coverage</li>
                                      <li>Game Prizes</li>
                                      <li>30 Giveaways/Lootbags for kids</li>
                                      <li>Facepainting</li>
                                      <li>Pinata or Pabitin</li>
                                    </ul>                                    
                                </div>
                            </div>
                        </dialog>
                    </li>
                    <li class="item2">
                        <div onclick="openDialog('bday2')" class="container_categories">
                            <img src="images\packages\home-packages-pics\bday_package2.png" class="categories_image">
                            <div class="categories_text">
                                <h1>PHP 47,000</h1>
                                <h3>Package 2</h3>
                                <p>| 70 Adults / 30 Kids</p>
                            </div>
                        </div>
                        <dialog class="modal" id="bday2">
                            <div class="column_left">
                                <div class="modal_title">
                                    <button onclick="closeDialog('bday2')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29px" height="29px" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                <path fill="#3F3F3F" d="M3.283 10.94a1.5 1.5 0 0 0 0 2.12l5.656 5.658a1.5 1.5 0 1 0 2.122-2.122L7.965 13.5H19.5a1.5 1.5 0 0 0 0-3H7.965l3.096-3.096a1.5 1.5 0 1 0-2.122-2.121z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="modal_categorytitle">
                                        <h1>Package 2</h1>
                                        <p>| 70 Adults / 30 Kids</p>
                                    </div>
                                </div>
                                <div class="modal_pictures">
                                    <img src="images/packages/pictures-dn/birthday/package-2/birthday_package2_01.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images/packages/pictures-dn/birthday/package-2/birthday_package2_02.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images/packages/pictures-dn/birthday/package-2/birthday_package2_03.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images/packages/pictures-dn/birthday/package-2/birthday_package2_04.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                </div>
                                <div class="modal_bottom">
                                    <h1>PHP 47,000</h1>
                                    <button onclick="redirectToFormalQuote(2,1)">Get Formal Quote</button>
                                </div>
                            </div>
                            <div class="column_right">
                                <p>Other Details</p>
                                <div class="details">
                                    <h1>Catering Service</h1>
                                    <h1>For Adults:</h1>
                                    <ul>
                                      <li>Controlled Buffet</li>
                                      <li>Rice</li>
                                      <li>Pork or Beef</li>
                                      <li>Chicken</li>
                                      <li>Fish or Veggies</li>
                                      <li>Pasta</li>
                                      <li>Dessert</li>
                                      <li>Drinks</li>
                                    </ul>
                                    
                                    <h1>For Kids:</h1>
                                    <ul>
                                      <li>Packed Meal</li>
                                      <li>Spaghetti or Rice</li>
                                      <li>Chicken Fillet or Shanghai</li>
                                      <li>Hotdog with Mallows</li>
                                      <li>Juice</li>
                                    </ul>
                                    
                                    <h1>Skirted Buffet Table</h1>
                                    <ul>
                                      <li>Tables & Chairs with Cover (Theme Cover)</li>
                                      <li>Complete Utensils Equipment</li>
                                      <li>Cake Table</li>
                                      <li>Gift Table</li>
                                      <li>Kids Tables & Chairs</li>
                                    </ul>
                                    
                                    <h1>Theme Backdrop</h1>
                                    <ul>
                                      <li>Name Celebrant</li>
                                      <li>Entrance</li>
                                    </ul>
                                    
                                    <h1>Balloon Decors</h1>
                                    <ul>
                                      <li>Pairs of Pillars</li>
                                      <li>Centerpiece</li>
                                      <li>Cake Arc</li>
                                      <li>Ceiling Balloons</li>
                                    </ul>
                                    
                                    <h1>Entertainment</h1>
                                    <ul>
                                      <li>1 Clown</li>
                                      <li>Program</li>
                                      <li>Game Facilitator</li>
                                      <li>Magic</li>
                                      <li>Balloon Twisting</li>
                                    </ul>
                                    
                                    <h1>Basic Sound System with Mic</h1>
                                    
                                    <h1>Freebies</h1>
                                    <ul>
                                      <li>Free Venue Photo Coverage</li>
                                      <li>Game Prizes</li>
                                      <li>30 Giveaways/Lootbags for kids</li>
                                      <li>Pinata or Pabitin</li>
                                    </ul>
                                    
                                    <h1>1 Layer Cake</h1>
                                    <ul>
                                      <li>1 Layer Cake 36 Cupcakes (Non Fondant) OR</li>
                                      <li>1 Layer Cake with 12 Cupcakes (Fondant)</li>
                                    </ul>
                                    
                                    <h1>Photobooth</h1>
                                    <ul>
                                      <li>4r</li>
                                      <li>2hrs Unlimited Shot</li>
                                      <li>Theme Layout</li>
                                    </ul>                         
                                </div>
                            </div>
                        </dialog>
                    </li>
                    <li class="item2">
                        <div onclick="openDialog('bday3')" class="container_categories">
                            <img src="images\packages\home-packages-pics\bday_package3.png" class="categories_image">
                            <div class="categories_text">
                                <h1>PHP 45,000</h1>
                                <h3>Package 3</h3>
                                <p>| 50 Adults / 20 Kids</p>
                            </div>
                        </div>
                        <dialog class="modal" id="bday3">
                            <div class="column_left">
                                <div class="modal_title">
                                    <button onclick="closeDialog('bday3')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29px" height="29px" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                <path fill="#3F3F3F" d="M3.283 10.94a1.5 1.5 0 0 0 0 2.12l5.656 5.658a1.5 1.5 0 1 0 2.122-2.122L7.965 13.5H19.5a1.5 1.5 0 0 0 0-3H7.965l3.096-3.096a1.5 1.5 0 1 0-2.122-2.121z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="modal_categorytitle">
                                        <h1>Package 3</h1>
                                        <p>| 50 Adults / 20 Kids</p>
                                    </div>
                                </div>
                                <div class="modal_pictures">
                                    <img src="images\packages\pictures-dn\birthday\package-3\birthday_package3_01.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\birthday\package-3\birthday_package3_02.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\birthday\package-3\birthday_package3_03.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\birthday\package-3\birthday_package3_04.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\birthday\package-3\birthday_package3_05.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\birthday\package-3\birthday_package3_06.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\birthday\package-3\birthday_package3_07.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                </div>
                                <div class="modal_bottom">
                                    <h1>PHP 45,000</h1>
                                    <button onclick="redirectToFormalQuote(2,2)">Get Formal Quote</button>
                                </div>
                            </div>
                            <div class="column_right">
                                <p>Other Details</p>
                                <div class="details">   
                                    <h1>Catering Service</h1>
                                    <h1>For Adults:</h1>
                                    <ul>
                                      <li>Controlled Buffet</li>
                                      <li>Rice</li>
                                      <li>Pork or Beef</li>
                                      <li>Chicken</li>
                                      <li>Fish or Veggies</li>
                                      <li>Pasta</li>
                                      <li>Dessert</li>
                                      <li>Drinks</li>
                                    </ul>
                                    
                                    <h1>For Kids:</h1>
                                    <ul>
                                      <li>Packed Meal</li>
                                      <li>Spaghetti or Rice</li>
                                      <li>Chicken Fillet or Shanghai</li>
                                      <li>Hotdog with Mallows</li>
                                      <li>Juice</li>
                                    </ul>
                                    
                                    <h1>Skirted Buffet Table</h1>
                                    <ul>
                                      <li>Tables & Chairs with Cover (Theme Cover)</li>
                                      <li>Complete Utensils Equipment</li>
                                      <li>Cake Table</li>
                                      <li>Gift Table</li>
                                      <li>Kids Tables & Chairs</li>
                                    </ul>
                                    
                                    <h1>Theme Backdrop</h1>
                                    <ul>
                                      <li>Name Celebrant</li>
                                      <li>Entrance</li>
                                    </ul>
                                    
                                    <h1>Balloon Decors</h1>
                                    <ul>
                                      <li>Pairs of Pillars</li>
                                      <li>Centerpiece</li>
                                      <li>Cake Arc</li>
                                      <li>Ceiling Balloons</li>
                                    </ul>
                                    
                                    <h1>Entertainment</h1>
                                    <ul>
                                      <li>1 Clown</li>
                                      <li>Program</li>
                                      <li>Game Facilitator</li>
                                      <li>Magic</li>
                                      <li>Balloon Twisting</li>
                                    </ul>
                                    
                                    <h1>Basic Sound System with Mic</h1>
                                    
                                    <h1>1 Layer Cake</h1>
                                    <ul>
                                      <li>1 Layer Cake 36 Cupcakes (Non Fondant) OR</li>
                                      <li>1 Layer Cake with 12 Cupcakes (Fondant)</li>
                                    </ul>
                                    
                                    <h1>Photobooth</h1>
                                    <ul>
                                      <li>4r</li>
                                      <li>2hrs Unlimited Shot</li>
                                      <li>Theme Layout</li>
                                    </ul>
                                    
                                    <h1>Freebies</h1>
                                    <ul>
                                      <li>Free Venue Photo Coverage</li>
                                      <li>Game Prizes</li>
                                      <li>20 Giveaways/Lootbags for kids</li>
                                      <li>Pinata or Pabitin</li>
                                    </ul>   
                                </div>
                            </div>
                        </dialog>
                    </li>
                    <li class="item2">
                        <div onclick="openDialog('bday4')" class="container_categories">
                            <img src="images\packages\home-packages-pics\bday_package4.png" class="categories_image">
                            <div class="categories_text">
                                <h1>PHP 38,000</h1>
                                <h3>Package 4</h3>
                                <p>| 50 Adults / 20 Kids</p>
                            </div>
                        </div>
                        <dialog class="modal" id="bday4">
                            <div class="column_left">
                                <div class="modal_title">
                                    <button onclick="closeDialog('bday4')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29px" height="29px" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                <path fill="#3F3F3F" d="M3.283 10.94a1.5 1.5 0 0 0 0 2.12l5.656 5.658a1.5 1.5 0 1 0 2.122-2.122L7.965 13.5H19.5a1.5 1.5 0 0 0 0-3H7.965l3.096-3.096a1.5 1.5 0 1 0-2.122-2.121z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="modal_categorytitle">
                                        <h1>Package 4</h1>
                                        <p>| 50 Adults / 20 Kids</p>
                                    </div>
                                </div>
                                <div class="modal_pictures">
                                    <img src="images\packages\pictures-dn\birthday\package-4\birthday_package4_01.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\birthday\package-4\birthday_package4_02.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\birthday\package-4\birthday_package4_03.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\birthday\package-4\birthday_package4_04.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\birthday\package-4\birthday_package4_05.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                </div>
                                <div class="modal_bottom">
                                    <h1>PHP 38,000</h1>
                                    <button onclick="redirectToFormalQuote(2,3)">Get Formal Quote</button>
                                </div>
                            </div>
                            <div class="column_right">
                                <p>Other Details</p>
                                <div class="details">
                                    <h1>Catering Service</h1>
                                    <h1>For Adults:</h1>
                                    <ul>
                                      <li>Controlled Buffet</li>
                                      <li>Rice</li>
                                      <li>Pork or Beef</li>
                                      <li>Chicken</li>
                                      <li>Fish or Veggies</li>
                                      <li>Pasta</li>
                                      <li>Dessert</li>
                                      <li>Drinks</li>
                                    </ul>
                                    
                                    <h1>For Kids:</h1>
                                    <ul>
                                      <li>Packed Meal</li>
                                      <li>Spaghetti or Rice</li>
                                      <li>Chicken Fillet or Shanghai</li>
                                      <li>Hotdog with Mallows</li>
                                      <li>Juice</li>
                                    </ul>
                                    
                                    <h1>Skirted Buffet Table</h1>
                                    <ul>
                                      <li>Tables & Chairs with Cover (Theme Cover)</li>
                                      <li>Complete Utensils Equipment</li>
                                      <li>Cake Table</li>
                                      <li>Gift Table</li>
                                      <li>Kids Tables & Chairs</li>
                                    </ul>
                                    
                                    <h1>Theme Backdrop</h1>
                                    <ul>
                                      <li>Name Celebrant</li>
                                      <li>Entrance</li>
                                    </ul>
                                    
                                    <h1>Balloon Decors</h1>
                                    <ul>
                                      <li>Pairs of Pillars</li>
                                      <li>Centerpiece</li>
                                      <li>Cake Arc</li>
                                      <li>Ceiling Balloons</li>
                                    </ul>
                                    
                                    <h1>Entertainment</h1>
                                    <ul>
                                      <li>1 Clown</li>
                                      <li>Program</li>
                                      <li>Game Facilitator</li>
                                      <li>Magic</li>
                                      <li>Balloon Twisting</li>
                                    </ul>
                                    
                                    <h1>Basic Sound System with Mic</h1>
                                    
                                    <h1>Freebies</h1>
                                    <ul>
                                      <li>Game Prizes</li>
                                      <li>30 Giveaways/Lootbags for kids</li>
                                      <li>Pinata or Pabitin</li>
                                    </ul>
                                    
                                    <h1>1 Layer Cake</h1>
                                    <ul>
                                      <li>1 Layer Cake 36 Cupcakes (Non Fondant) OR</li>
                                      <li>1 Layer Cake with 12 Cupcakes (Fondant)</li>
                                    </ul>
                                    
                                    <h1>Photobooth</h1>
                                    <ul>
                                      <li>4r</li>
                                      <li>2hrs Unlimited Shot</li>
                                      <li>Theme Layout</li>
                                    </ul>                                                                                            
                                </div>
                            </div>
                        </dialog>
                    </li>
                </ul>
                <button onclick="handleClick2('previous')" class="button button--previous" type="button">➤</button>
                <button onclick="handleClick2('next')" class="button button--next" type="button">➤</button>
            </div>
        </div>

<!-- Debut Packages -->
        <div class="category" id="debut">
            <div class="title">Debut Packages</div>
            <div class="carousel">
                <ul class="list3">
                    <li class="item3">
                        <div onclick="openDialog('ruby')" class="container_categories" >
                            <img src="images\packages\home-packages-pics\debut_ruby.png" class="categories_image">
                            <div class="categories_text">
                                <h1>PHP 120,000</h1>
                                <h3>Ruby Debut Package</h3>
                                <p>| 100 Pax</p>
                            </div>
                        </div>
                        <dialog class="modal" id="ruby">
                            <div class="column_left">
                                <div class="modal_title">
                                    <button onclick="closeDialog('ruby')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29px" height="29px" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                <path fill="#3F3F3F" d="M3.283 10.94a1.5 1.5 0 0 0 0 2.12l5.656 5.658a1.5 1.5 0 1 0 2.122-2.122L7.965 13.5H19.5a1.5 1.5 0 0 0 0-3H7.965l3.096-3.096a1.5 1.5 0 1 0-2.122-2.121z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="modal_categorytitle">
                                        <h1>Ruby Debut Package</h1>
                                        <p>| 100 Pax</p>
                                    </div>
                                </div>
                                <div class="modal_pictures">
                                    <img src="images\packages\pictures-dn\Debut\Ruby\debut_ruby_01.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Ruby\debut_ruby_02.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Ruby\debut_ruby_03.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Ruby\debut_ruby_04.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Ruby\debut_ruby_05.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Ruby\debut_ruby_06.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Ruby\debut_ruby_07.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Ruby\debut_ruby_08.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Ruby\debut_ruby_10.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Ruby\debut_ruby_11.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                </div>
                                <div class="modal_bottom">
                                    <h1>PHP 120,000</h1>
                                    <button onclick="redirectToFormalQuote(3,0)">Get Formal Quote</button>
                                </div>
                            </div>
                            <div class="column_right">
                                <p>Other Details</p>
                                <div class="details">
                                    <h1>Catering Services</h1>
                                    <ul>
                                      <li>Pork or beef</li>
                                      <li>Chicken</li>
                                      <li>Fish</li>
                                      <li>Veggies</li>
                                      <li>Pasta</li>
                                      <li>Dessert</li>
                                      <li>Rice</li>
                                      <li>Drinks</li>
                                    </ul>
                                    
                                    <h1>Complete Catering Equipment</h1>
                                    <ul>
                                      <li>Round tables with table number</li>
                                      <li>Chairs monoblocks</li>
                                      <li>Buffet table</li>
                                      <li>Registration table</li>
                                      <li>Gift & Cake table</li>
                                      <li>Waiter & servers</li>
                                    </ul>
                                    
                                    <h1>Backdrop</h1>
                                    <ul>
                                      <li>Debutant name</li>
                                      <li>Debutant couch</li>
                                      <li>Entrance arch with entrance signage</li>
                                      <li>Ceiling decorations & centerpiece</li>
                                    </ul>
                                    
                                    <h1>Photo & Video Coverage</h1>
                                    <ul>
                                      <li>Pre-debut shoot</li>
                                      <li>Save the date video</li>
                                      <li>Grown-up video (optional)</li>
                                      <li>Photographer on the day</li>
                                      <li>Same day edit</li>
                                      <li>MTV highlights video</li>
                                      <li>8x11 magazine type photoboo,000</li>
                                      <li>USB/ Google drive</li>
                                    </ul>
                                    
                                    <h1>Lively Host/Emcee</h1>
                                    <ul>
                                      <li>Program Flow</li>
                                    </ul>
                                    
                                    <h1>Photobooth</h1>
                                    <ul>
                                      <li>2 hrs unlimited shots</li>
                                      <li>(4r or strips) with props</li>
                                      <li>Theme layout design</li>
                                      <li>(additional if upgrade magnet)</li>
                                    </ul>
                                    
                                    <h1>2 Layer Cake</h1>
                                    <ul>
                                      <li>Theme design (Customized) with free Cupcakes</li>
                                    </ul>
                                    
                                    <h1>Hair & Makeup</h1>
                                    <ul>
                                      <li>On the day with retouch</li>
                                    </ul>
                                    
                                    <h1>Sounds & Lights</h1>
                                    <ul>
                                      <li>With DJ</li>
                                      <li>Projector with screen</li>
                                      <li>Smoke machine</li>
                                    </ul>
                                    
                                    <h1>Venue Coordinator</h1>
                                    
                                    <h1>Freebies</h1>
                                    <ul>
                                      <li>50 invitations</li>
                                      <li>50 souvenirs</li>
                                      <li>#18 Standee</li>
                                      <li>Roses for 18 roses</li>
                                      <li>Wine for 18 shots</li>
                                      <li>Candle for 18 candles</li>
                                      <li>Signature frame</li>
                                      <li>12x16 frame</li>
                                      <li>Free use of red carpet</li>
                                      <li>Find your seats board</li>
                                    </ul>                                                                        
                                </div>
                            </div>
                        </dialog>
                    </li>
                    <li class="item3">
                        <div onclick="openDialog('turquoise')" class="container_categories">
                            <img src="images\packages\home-packages-pics\debut_turquoise.png" class="categories_image">
                            <div class="categories_text">
                                <h1>PHP 75,000</h1>
                                <h3>Turquoise Debut Package</h3>
                                <p>| 100 Pax</p>
                            </div>
                        </div>
                        <dialog class="modal" id="turquoise">
                            <div class="column_left">
                                <div class="modal_title">
                                    <button onclick="closeDialog('turquoise')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29px" height="29px" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                <path fill="#3F3F3F" d="M3.283 10.94a1.5 1.5 0 0 0 0 2.12l5.656 5.658a1.5 1.5 0 1 0 2.122-2.122L7.965 13.5H19.5a1.5 1.5 0 0 0 0-3H7.965l3.096-3.096a1.5 1.5 0 1 0-2.122-2.121z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="modal_categorytitle">
                                        <h1>Turquoise Debut Package</h1>
                                        <p>| 100 Pax</p>
                                    </div>
                                </div>
                                <div class="modal_pictures">
                                    <img src="images\packages\pictures-dn\Debut\Turquoise\debut_turquoise_01.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Turquoise\debut_turquoise_02.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Turquoise\debut_turquoise_03.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Turquoise\debut_turquoise_04.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Turquoise\debut_turquoise_05.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Turquoise\debut_turquoise_06.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Turquoise\debut_turquoise_07.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Turquoise\debut_turquoise_08.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                </div>
                                <div class="modal_bottom">
                                    <h1>PHP 75,000</h1>
                                    <button onclick="redirectToFormalQuote(3,1)">Get Formal Quote</button>
                                </div>
                            </div>
                            <div class="column_right">
                                <p>Other Details</p>
                                <div class="details">
                                    <h1>Catering Services</h1>
                                    <ul>
                                      <li>Pork or beef</li>
                                      <li>Chicken</li>
                                      <li>Fish</li>
                                      <li>Veggies</li>
                                      <li>Pasta</li>
                                      <li>Dessert</li>
                                      <li>Rice</li>
                                      <li>Drinks</li>
                                    </ul>
                                    
                                    <h1>Complete Catering Equipment</h1>
                                    <ul>
                                      <li>Round tables with table number</li>
                                      <li>Chairs monoblocks</li>
                                      <li>Buffet table</li>
                                      <li>Registration table</li>
                                      <li>Gift & Cake table</li>
                                      <li>Waiter & servers</li>
                                    </ul>
                                    
                                    <h1>Backdrop with debutant name</h1>
                                    <ul>
                                      <li>Debutant couch</li>
                                      <li>Entrance arch with entrance signage</li>
                                      <li>Ceiling decorations & centerpiece</li>
                                    </ul>
                                    
                                    <h1>Photo & Video Coverage</h1>
                                    <ul>
                                      <li>Pre-debut shoot</li>
                                      <li>Save the date video</li>
                                      <li>Grown-up video (optional)</li>
                                      <li>Photographer on the day</li>
                                      <li>MTV highlights video</li>
                                      <li>8x11 magazine type photoboo,000</li>
                                      <li>USB/ Google drive</li>
                                    </ul>
                                    
                                    <h1>Lively Host/Emcee</h1>
                                    <ul>
                                      <li>Program Flow</li>
                                    </ul>
                                    
                                    <h1>Photobooth</h1>
                                    <ul>
                                      <li>2 hrs unlimited shots</li>
                                      <li>(4r or strips) with props</li>
                                      <li>Theme layout design</li>
                                      <li>(additional if upgrade magnet)</li>
                                    </ul>
                                    
                                    <h1>2 layer cake</h1>
                                    <ul>
                                      <li>Theme design (Customized) with free Cupcakes</li>
                                    </ul>
                                    
                                    <h1>Hair & Makeup</h1>
                                    <ul>
                                      <li>On the day with retouch</li>
                                    </ul>
                                    
                                    <h1>Sounds & lights with DJ</h1>
                                    <ul>
                                      <li>Projector with screen</li>
                                      <li>Smoke machine</li>
                                    </ul>
                                    
                                    <h1>Venue Coordinator</h1>
                                    
                                    <h1>Freebies</h1>
                                    <ul>
                                      <li>40 invitations</li>
                                      <li>40 souvenirs</li>
                                      <li>#18 Standee</li>
                                      <li>Roses for 18 roses</li>
                                      <li>Wine for 18 shots</li>
                                      <li>Candle for 18 candles</li>
                                      <li>12x16 frame</li>
                                      <li>Free use of red carpet</li>
                                      <li>Find your seats board</li>
                                    </ul>                                                                        
                                </div>
                            </div>
                        </dialog>
                    </li>
                    <li class="item3">
                        <div onclick="openDialog('amethyst')" class="container_categories">
                            <img src="images\packages\home-packages-pics\debut_amethyst.png" class="categories_image">
                            <div class="categories_text">
                                <h1>PHP 68,000</h1>
                                <h3>Amethyst Debut Package</h3>
                                <p>| 100 Pax</p>
                            </div>
                        </div>
                        <dialog class="modal" id="amethyst">
                            <div class="column_left">
                                <div class="modal_title">
                                    <button onclick="closeDialog('amethyst')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29px" height="29px" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                <path fill="#3F3F3F" d="M3.283 10.94a1.5 1.5 0 0 0 0 2.12l5.656 5.658a1.5 1.5 0 1 0 2.122-2.122L7.965 13.5H19.5a1.5 1.5 0 0 0 0-3H7.965l3.096-3.096a1.5 1.5 0 1 0-2.122-2.121z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="modal_categorytitle">
                                        <h1>Amethyst Debut Package</h1>
                                        <p>| 100 Pax</p>
                                    </div>
                                </div>
                                <div class="modal_pictures">
                                    <img src="images\packages\pictures-dn\Debut\Amethyst\debut_amethyst_01.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Amethyst\debut_amethyst_02.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Amethyst\debut_amethyst_03.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Amethyst\debut_amethyst_04.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Amethyst\debut_amethyst_05.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Amethyst\debut_amethyst_06.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Amethyst\debut_amethyst_07.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Amethyst\debut_amethyst_08.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                </div>
                                <div class="modal_bottom">
                                    <h1>PHP 68,000</h1>
                                    <button onclick="redirectToFormalQuote(3,2)">Get Formal Quote</button>
                                </div>
                            </div>
                            <div class="column_right">
                                <p>Other Details</p>
                                <div class="details">
                                    <h1>Catering Services</h1>
                                    <ul>
                                      <li>Pork or beef</li>
                                      <li>Chicken</li>
                                      <li>Fish or Veggies</li>
                                      <li>Pasta</li>
                                      <li>Dessert</li>
                                      <li>Rice</li>
                                      <li>Drinks</li>
                                    </ul>
                                    
                                    <h1>Complete Catering Equipment</h1>
                                    <ul>
                                      <li>Round tables with table number</li>
                                      <li>Chairs monoblocks</li>
                                      <li>Buffet table</li>
                                      <li>Registration table</li>
                                      <li>Gift & Cake table</li>
                                      <li>Waiter & servers</li>
                                    </ul>
                                    
                                    <h1>Backdrop with debutant name</h1>
                                    <ul>
                                      <li>Debutant couch</li>
                                      <li>Entrance arch with entrance signage</li>
                                      <li>Ceiling decorations & centerpiece</li>
                                    </ul>
                                    
                                    <h1>Photo & Video Coverage</h1>
                                    <ul>
                                      <li>Photographer on the day</li>
                                      <li>MTV highlights video</li>
                                      <li>USB/ Google drive</li>
                                    </ul>
                                    
                                    <h1>Lively Host/Emcee</h1>
                                    <ul>
                                      <li>Program Flow</li>
                                    </ul>
                                    
                                    <h1>Photobooth</h1>
                                    <ul>
                                      <li>2 hrs unlimited shots</li>
                                      <li>(4r or strips) with props</li>
                                      <li>Theme layout design</li>
                                      <li>(additional if upgrade magnet)</li>
                                    </ul>
                                    
                                    <h1>1 layer cake</h1>
                                    <ul>
                                      <li>Theme design (Customized) with free Cupcakes</li>
                                    </ul>
                                    
                                    <h1>Hair & Makeup</h1>
                                    <ul>
                                      <li>On the day</li>
                                    </ul>
                                    
                                    <h1>Sounds & lights with DJ</h1>
                                    
                                    <h1>Venue Coordinator</h1>
                                    
                                    <h1>Freebies</h1>
                                    <ul>
                                      <li>30 invitations</li>
                                      <li>30 souvenirs</li>
                                      <li>#18 Standee</li>
                                      <li>Roses for 18 roses</li>
                                      <li>Wine for 18 shots</li>
                                      <li>Candle for 18 candles</li>
                                      <li>12x16 frame</li>
                                      <li>Free use of red carpet</li>
                                      <li>Find your seats board</li>
                                    </ul>                                                                        
                                </div>
                            </div>
                        </dialog>
                    </li>
                    <li class="item3">
                        <div onclick="openDialog('affordable')" class="container_categories">
                            <img src="images\packages\home-packages-pics\debut_affordable.png" class="categories_image">
                            <div class="categories_text">
                                <h1>PHP 55,000</h1>
                                <h3>Affordable Debut Package</h3>
                                <p>| 50 Pax to 100 Pax</p>
                            </div>
                        </div>
                        <dialog class="modal" id="affordable">
                            <div class="column_left">
                                <div class="modal_title">
                                    <button onclick="closeDialog('affordable')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29px" height="29px" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                <path fill="#3F3F3F" d="M3.283 10.94a1.5 1.5 0 0 0 0 2.12l5.656 5.658a1.5 1.5 0 1 0 2.122-2.122L7.965 13.5H19.5a1.5 1.5 0 0 0 0-3H7.965l3.096-3.096a1.5 1.5 0 1 0-2.122-2.121z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="modal_categorytitle">
                                        <h1>Affordable Debut Package</h1>
                                        <p>| 50 Pax to 100 Pax</p>
                                    </div>
                                </div>
                                <div class="modal_pictures">
                                    <img src="images\packages\pictures-dn\Debut\Affordable\debut_affordable_01.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Affordable\debut_affordable_02.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Affordable\debut_affordable_03.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Affordable\debut_affordable_04.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Affordable\debut_affordable_05.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Affordable\debut_affordable_06.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\Debut\Affordable\debut_affordable_07.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                </div>
                                <div class="modal_bottom">
                                    <h1>PHP 55,000</h1>
                                    <button onclick="redirectToFormalQuote(3,3)">Get Formal Quote</button>
                                </div>
                            </div>
                            <div class="column_right">
                                <p>Other Details</p>
                                <div class="details">
                                    <h1>Catering Services</h1>
                                    <ul>
                                      <li>Pork or beef</li>
                                      <li>Chicken</li>
                                      <li>Fish or Veggies</li>
                                      <li>Pasta</li>
                                      <li>Dessert</li>
                                      <li>Rice</li>
                                      <li>Drinks</li>
                                    </ul>
                                    
                                    <h1>Complete Catering Equipment</h1>
                                    <ul>
                                      <li>Round tables with table number</li>
                                      <li>Chairs monoblocks</li>
                                      <li>Buffet table</li>
                                      <li>Registration table</li>
                                      <li>Gift & Cake table</li>
                                      <li>Waiter & servers</li>
                                    </ul>
                                    
                                    <h1>Backdrop with debutant name</h1>
                                    <ul>
                                      <li>Debutant couch</li>
                                      <li>Entrance arch with entrance signage</li>
                                      <li>Ceiling decorations & centerpiece</li>
                                    </ul>
                                    
                                    <h1>Photo & Video Coverage</h1>
                                    <ul>
                                      <li>Photographer on the day</li>
                                      <li>USB/ Google drive</li>
                                    </ul>
                                    
                                    <h1>Lively Host/Emcee</h1>
                                    <ul>
                                      <li>Program Flow</li>
                                    </ul>
                                    
                                    <h1>Photobooth</h1>
                                    <ul>
                                      <li>2 hrs unlimited shots</li>
                                      <li>(4r or strips) with props</li>
                                      <li>Theme layout design</li>
                                      <li>(additional if upgrade magnet)</li>
                                    </ul>
                                    <h1> OR</h1>
                                    <h1>1 layer cake with theme design (Customized) with free Cupcakes</h1>
                                    <h1>Sounds & lights with DJ</h1>
                                    
                                    <h1>Venue Coordinator</h1>
                                    
                                    <h1>Freebies</h1>
                                    <ul>
                                      <li>25 invitations</li>
                                      <li>25 souvenirs</li>
                                      <li>#18 Standee</li>
                                      <li>Roses for 18 roses</li>
                                      <li>Wine for 18 shots</li>
                                      <li>Candle for 18 candles</li>
                                      <li>12x16 frame</li>
                                      <li>Free use of red carpet</li>
                                      <li>Find your seats board</li>
                                    </ul>                                                                        
                                </div>
                            </div>
                        </dialog>
                    </li>
                </ul>
                <button onclick="handleClick3('previous')" class="button button--previous" type="button">➤</button>
                <button onclick="handleClick3('next')" class="button button--next" type="button">➤</button>
            </div>
        </div>

<!-- Baptism Packages -->
        <div class="category" id="baptism">
            <div class="title">Baptism Packages</div>
            <div class="carousel">
                <ul class="list3">
                    <li class="item4">
                        <div onclick="openDialog('baptism1')" class="container_categories" >
                            <img src="images\packages\home-packages-pics\baptism_package1.png" class="categories_image">
                            <div class="categories_text">
                                <h1>PHP 30,000</h1>
                                <h3>Package 1</h3>
                                <p>| 50 Pax</p>
                            </div>
                        </div>
                        <dialog class="modal" id="baptism1">
                            <div class="column_left">
                                <div class="modal_title">
                                    <button onclick="closeDialog('baptism1')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29px" height="29px" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                <path fill="#3F3F3F" d="M3.283 10.94a1.5 1.5 0 0 0 0 2.12l5.656 5.658a1.5 1.5 0 1 0 2.122-2.122L7.965 13.5H19.5a1.5 1.5 0 0 0 0-3H7.965l3.096-3.096a1.5 1.5 0 1 0-2.122-2.121z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="modal_categorytitle">
                                        <h1>Package 1</h1>
                                        <p>| 50 Pax</p>
                                    </div>
                                </div>
                                <div class="modal_pictures">
                                    <img src="images\packages\pictures-dn\baptism\package-1\baptism_package1_01.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\baptism\package-1\baptism_package1_02.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\baptism\package-1\baptism_package1_03.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\baptism\package-1\baptism_package1_04.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\baptism\package-1\baptism_package1_05.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\baptism\package-1\baptism_package1_06.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\baptism\package-1\baptism_package1_07.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\baptism\package-1\baptism_package1_08.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                </div>
                                <div class="modal_bottom">
                                    <h1>PHP 30,000</h1>
                                    <button onclick="redirectToFormalQuote(4,0)">Get Formal Quote</button>
                                </div>
                            </div>
                            <div class="column_right">
                                <p>Other Details</p>
                                <div class="details">
                                    <h1>Catering Services</h1>
                                    <ul>
                                      <li>Rice</li>
                                      <li>Pork or Beef</li>
                                      <li>Name Standee</li>
                                      <li>Chicken</li>
                                      <li>Fish or Veggies</li>
                                      <li>Pasta</li>
                                      <li>Dessert</li>
                                      <li>Drinks</li>
                                    </ul>
                                    
                                    <h1>Skirted Buffet Table</h1>
                                    <ul>
                                      <li>Tables & Chairs w/Cover (According to Theme Color)</li>
                                      <li>Food Attendant</li>
                                      <li>Friendly Waiters</li>
                                      <li>Table Numbers</li>
                                      <li>Complete Utensils</li>
                                    </ul>
                                    
                                    <h1>Theme Backdrop</h1>
                                    <ul>
                                      <li>Name Standee</li>
                                      <li>Entrance Signage</li>
                                    </ul>
                                    
                                    <h1>Balloon Decorations</h1>
                                    <ul>
                                      <li>Ceiling</li>
                                      <li>Pair Of Pillars</li>
                                      <li>Centrepiece</li>
                                      <li>Entrance</li>
                                    </ul>
                                    
                                    <h1>Portable Sound System OR Venue Basic Photographer</h1>
                                    
                                    <h1>8 Theme Round Cake with 12 Cupcakes</h1>
                                    
                                    <h1>3*5 Tarpaulin or 2*6 Tarpaulin</h1>
                                    <ul>
                                      <li>Signature Frame</li>
                                      <li>20 Simple Souvenirs</li>
                                      <li>20 Invitations or Soft Copy</li>
                                    </ul>                                                                        
                                </div>
                            </div>
                        </dialog>
                    </li>
                    <li class="item4">
                        <div onclick="openDialog('baptism2')" class="container_categories">
                            <img src="images\packages\home-packages-pics\baptism_package2.png" class="categories_image">
                            <div class="categories_text">
                                <h1>PHP 42,000</h1>
                                <h3>Package 2</h3>
                                <p>| 100 Pax</p>
                            </div>
                        </div>
                        <dialog class="modal" id="baptism2">
                            <div class="column_left">
                                <div class="modal_title">
                                    <button onclick="closeDialog('baptism2')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29px" height="29px" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                <path fill="#3F3F3F" d="M3.283 10.94a1.5 1.5 0 0 0 0 2.12l5.656 5.658a1.5 1.5 0 1 0 2.122-2.122L7.965 13.5H19.5a1.5 1.5 0 0 0 0-3H7.965l3.096-3.096a1.5 1.5 0 1 0-2.122-2.121z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="modal_categorytitle">
                                        <h1>Package 2</h1>
                                        <p>| 100 Pax</p>
                                    </div>
                                </div>
                                <div class="modal_pictures">
                                    <img src="images\packages\pictures-dn\baptism\package-2\baptism_package2_01.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\baptism\package-2\baptism_package2_02.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\baptism\package-2\baptism_package2_03.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\baptism\package-2\baptism_package2_04.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\baptism\package-2\baptism_package2_05.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\baptism\package-2\baptism_package2_07.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\baptism\package-2\baptism_package2_08.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                    <img src="images\packages\pictures-dn\baptism\package-2\baptism_package2_09.jpg" alt="" onclick="window.open(this.src, '_blank')">
                                </div>
                                <div class="modal_bottom">
                                    <h1>PHP 42,000</h1>
                                    <button onclick="redirectToFormalQuote(4,1)">Get Formal Quote</button>
                                </div>
                            </div>
                            <div class="column_right">
                                <p>Other Details</p>
                                <div class="details">
                                    <h1>Catering Services</h1>
                                    <ul>
                                      <li>Rice</li>
                                      <li>Pork or Beef</li>
                                      <li>Name Standee</li>
                                      <li>Entrance Signage</li>
                                      <li>Chicken</li>
                                      <li>Fish or Veggies</li>
                                      <li>Pasta</li>
                                      <li>Dessert</li>
                                      <li>Drinks</li>
                                    </ul>
                                    
                                    <h1>Skirted Buffet Table</h1>
                                    <ul>
                                      <li>Tables & Chairs w/Cover (According to Theme Color)</li>
                                      <li>Food Attendant</li>
                                      <li>Friendly Waiters</li>
                                      <li>Table Numbers</li>
                                      <li>Complete Utensils</li>
                                    </ul>
                                    
                                    <h1>Theme Backdrop</h1>
                                    <ul>
                                      <li>Name Standee</li>
                                      <li>Entrance Signage</li>
                                    </ul>
                                    
                                    <h1>Balloon Decorations</h1>
                                    <ul>
                                      <li>Ceiling</li>
                                      <li>Pair Of Pillars</li>
                                      <li>Centrepiece</li>
                                      <li>Entrance</li>
                                    </ul>
                                    
                                    <h1>8 Theme Round Cake with 36 Cupcakes</h1>
                                    
                                    <h1>Photobooth</h1>
                                    <ul>
                                      <li>2hrs unlimited shot</li>
                                    </ul>
                                    
                                    <h1>Portable Sound System</h1>
                                    <h1>Venue and Church Photographer</h1>
                                    
                                    <h1>3*5 Tarpaulin or 2*6 Tarpaulin</h1>
                                    <ul>
                                      <li>Signature Frame</li>
                                      <li>20 Simple Souvenirs</li>
                                      <li>20 Invitations or Soft Copy</li>
                                    </ul>                                    
                                </div>
                            </div>
                        </dialog>
                    </li>
                </ul>
                <button style="display: none;" onclick="handleClick4('previous')" class="button button--previous" type="button">➤</button>
                <button style="display: none;" onclick="handleClick4('next')" class="button button--next" type="button">➤</button>
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

		<a href="https://m.me/DNskreativepartyneeds" class="chatWithUs" title="Chat with us."  target="_blank">
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
    <script src="Script\PackagesPage.js"></script>
    <script src="Script\FormalQuote.js"></script>
	<script src="script\to-top.js"></script>
</html>