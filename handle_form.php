<?php
    // Error handling for reading JSON file
    $json = file_get_contents('data.json');
    if ($json === false) {
        die('Error reading JSON file');
    }

    // Error handling for decoding JSON
    $json_data = json_decode($json, true);
    if ($json_data === null) {
        die('Error decoding JSON');
    }

    // Sanitize the PIN value from the POST request
    $pin = isset($_POST["pin"]) ? htmlspecialchars($_POST["pin"]) : null;

    // Check if the PIN is set and exists in the array
    if (isset($pin)) {
        if (in_array($pin, $json_data["pins"])) {
            $response = ['success' => true];
        } else {
            $response = ['success' => false];
        }
    } else {
        // Handle the case where the PIN is not set
        $response = ['success' => false, 'error' => 'Pin not set'];
    }

    // Send JSON response to the client
    header('Content-Type: application/json');
    echo json_encode($response);
?>
