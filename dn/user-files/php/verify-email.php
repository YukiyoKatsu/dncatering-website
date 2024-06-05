<?php
// verify-email.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Use ZeroBounce email verification service
    $apiKey = 'be9ef6b22a7a4485a03f09c714bad60e';
    $apiUrl = 'https://api.zerobounce.net/v2/validate?api_key=' . $apiKey . '&email=' . urlencode($email);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($ch);
    curl_close($ch);

    $responseData = json_decode($response, true);

    // ZeroBounce returns a field 'status' that can be 'valid', 'invalid', 'catch-all', etc.
    if ($responseData['status'] == 'valid') {
        echo json_encode(['valid' => true]);
    } else {
        echo json_encode(['valid' => false]);
    }
}
?>
