<?php
    if(isset($_POST['submit']) && $_POST['g-recaptcha-response'] != ""){
        echo "
        <dialog id='myDialog' class='homepage-thankyou' open>
            <div class='close'>
                <p>DN's</p>
                <svg class='close-button' xmlns='http://www.w3.org/2000/svg' width='15px' height='25px' viewBox='0 0 8 8'>
                    <path fill='white' d='M1.41 0L0 1.41l.72.72L2.5 3.94L.72 5.72L0 6.41l1.41 1.44l.72-.72l1.81-1.81l1.78 1.81l.69.72l1.44-1.44l-.72-.69l-1.81-1.78l1.81-1.81l.72-.72L6.41 0l-.69.72L3.94 2.5L2.13.72z'></path>
                </svg>
            </div>
            
            <div class='thankyou'>
                <p>Thanks for sending your feedback.</p>
            </div>
        </dialog>
        
        <script>
            const dialog = document.getElementById('myDialog');
            const closeModal = document.querySelector('.close-button');
        
            closeModal.addEventListener('click', () => {
                dialog.style.display = 'none';
            }); 
        </script>";
    } 
?>