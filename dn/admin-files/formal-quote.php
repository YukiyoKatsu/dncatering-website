<?php 
   include("php/check-login-session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="view-transition" content="same-origin" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="headTitle" class="headTitle">Admin DN | Formal Quote</title>
    <link rel="icon" type="image/x-icon" href="pictures\logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles\styles.css">
    <link rel="stylesheet" href="styles\dataTables.css">
    <link rel="stylesheet" href="styles\log-out-dialog.css">
    <link rel="stylesheet" href="styles\quote-noarrow.css">

</head>

<body>
    <nav class="leftnavbar">
        <a href="../index.php" target="_blank"><img src="pictures\logo.png" alt=""
                title="Click here to go to User Page."></a>
        <ul class="nav-list">
            <li>
                <a href="feedback.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="3F3F3F"
                            d="M12 15q.425 0 .713-.288T13 14t-.288-.712T12 13t-.712.288T11 14t.288.713T12 15m-1-4h2V5h-2zM2 22V4q0-.825.588-1.412T4 2h16q.825 0 1.413.588T22 4v12q0 .825-.587 1.413T20 18H6zm3.15-6H20V4H4v13.125zM4 16V4z" />
                    </svg>
                    <p class="options">Customer's Feedback</p>
                </a>
            </li>
            <li class="active">
                <a class="active" href="formal-quote.php" aria-current="page">
                    <svg class="active" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="3F3F3F"
                            d="M12 12h5v5h-5zm7-9h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2m0 2v2H5V5zM5 19V9h14v10z" />
                    </svg>
                    <p class="options">Formal Quote</p>
                </a>
            </li>
            <li>
                <a href="change-password.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="3f3f3f" d="m9.25 22l-.4-3.2q-.325-.125-.612-.3t-.563-.375L4.7 19.375l-2.75-4.75l2.575-1.95Q4.5 12.5 4.5 12.338v-.675q0-.163.025-.338L1.95 9.375l2.75-4.75l2.975 1.25q.275-.2.575-.375t.6-.3l.4-3.2h5.5l.4 3.2q.325.125.613.3t.562.375l2.975-1.25l2.75 4.75l-2.575 1.95q.025.175.025.338v.674q0 .163-.05.338l2.575 1.95l-2.75 4.75l-2.95-1.25q-.275.2-.575.375t-.6.3l-.4 3.2zM11 20h1.975l.35-2.65q.775-.2 1.438-.587t1.212-.938l2.475 1.025l.975-1.7l-2.15-1.625q.125-.35.175-.737T17.5 12t-.05-.787t-.175-.738l2.15-1.625l-.975-1.7l-2.475 1.05q-.55-.575-1.212-.962t-1.438-.588L13 4h-1.975l-.35 2.65q-.775.2-1.437.588t-1.213.937L5.55 7.15l-.975 1.7l2.15 1.6q-.125.375-.175.75t-.05.8q0 .4.05.775t.175.75l-2.15 1.625l.975 1.7l2.475-1.05q.55.575 1.213.963t1.437.587zm1.05-4.5q1.45 0 2.475-1.025T15.55 12t-1.025-2.475T12.05 8.5q-1.475 0-2.488 1.025T8.55 12t1.013 2.475T12.05 15.5M12 12" />
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

        <h1 class="pagetitle">Formal Quote</h1>

        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th class="dataTitle" style="width: 12%;">Date of Request<p class="date">(YY-MM-DD)</p></th>
                    <th class="dataTitle" style="width: 13%;">Date of Event<p class="date">(YY-MM-DD)</p></th>
                    <th class="dataTitle" style="width: 13%;">Event Type</th>
                    <th class="dataTitle">First Name</th>
                    <th class="dataTitle">Middle Name</th>
                    <th class="dataTitle">Surname</th>
                    <th class="dataTitle" style="width: 5%;">Others</th>
                    <th class="dataTitle" style="width: 10%;">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("php/formal-quote-table.php");
                ?>
            </tbody>
        </table>

        <h1 class="pagetitle">Formal Quote (Completed)</h1>

        <table id="myTable2" class="display">
            <thead>
                <tr>
                    <th class="dataTitle" style="width: 12%;">Date of Request<p class="date">(YY-MM-DD)</p></th>
                    <th class="dataTitle" style="width: 12%;">Date of Event<p class="date">(YY-MM-DD)</p></th>
                    <th class="dataTitle" style="width: 13%;">Event Type</th>
                    <th class="dataTitle">First Name</th>
                    <th class="dataTitle">Middle Name</th>
                    <th class="dataTitle">Surname</th>
                    <th class="dataTitle" style="width: 3%;">Others</th>
                    <th class="dataTitle" style="width: 3%;">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("php/formal-quote-table-cmplt.php");
                ?>
            </tbody>
        </table>

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

    </main>
    <script src="scripts/jquery-3.7.1.js"></script>
    <script src="scripts/dataTables.js"></script>
    <script src="scripts/formal-quote-admin.js"></script>
    <script src="scripts/log-out-dialog.js"></script>
</body>

</html>
