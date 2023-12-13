<?php

// Read the JSON data from data.json
$jsonData = file_get_contents('data.json');
$data = json_decode($jsonData, true);

// Get the submitted PIN from the request
$submittedPin = (string)$_POST['pin'];

// Compare the submitted PIN with the stored PIN as strings
if ($submittedPin === $data['pin']) {
    $response = ['success' => true];
} else {
    $response = ['success' => false];
}

// Send JSON response to the client
header('Content-Type: application/json');
echo json_encode($response);

?>
