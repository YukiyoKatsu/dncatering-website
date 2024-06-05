<?php
    if(isset($_POST['submit']) && $_POST['g-recaptcha-response'] != ""){
        $secret = '6Lca0vApAAAAAEidP-MPwE4o_LOZ24juiE38oiZ-';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        
        if($responseData->success){
            $first_name = $_POST['first_name'];
            $middle_name = $_POST['middle_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $date = $_POST['date'];
            $event_type = $_POST['event_type'];
            $package = $_POST['package'];
            $other_details = $_POST['other_details'];

            // Prepare and bind the SQL statement
            $stmt = $con->prepare("INSERT INTO inquiry(first_name,middle_name,last_name,email,phone_number,date,event_type,package,other_details) 
            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->bind_param("sssssssss", $first_name, $middle_name, $last_name, $email, $phone_number, $date, $event_type, $package, $other_details);

            // Execute the statement
            $stmt->execute();

            // Close the statement
            $stmt->close();

            // Provide feedback for success
            echo "<dialog open>
                    <div class='close'>
                        <p>DN's</p>
                        <svg class='close-button' xmlns='http://www.w3.org/2000/svg' width='15px' height='25px' viewBox='0 0 8 8'>
                            <path fill='white' d='M1.41 0L0 1.41l.72.72L2.5 3.94L.72 5.72L0 6.41l1.41 1.44l.72-.72l1.81-1.81l1.78 1.81l.69.72l1.44-1.44l-.72-.69l-1.81-1.78l1.81-1.81l.72-.72L6.41 0l-.69.72L3.94 2.5L2.13.72z'></path>
                        </svg>
                    </div>
                    <div class='thankyou'>
                        <p>Your formal quote request has been sent. <br> We'll review it and get back to you soon.</p>
                    </div>
                    <script>
                        const dialog = document.querySelector('dialog');
                        const closeModal = document.querySelector('.close-button');

                        closeModal.addEventListener('click', () => {
                            dialog.close();
                        }); 
                    </script>
                </dialog>";

        }
    }
?>