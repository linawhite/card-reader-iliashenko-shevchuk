<?php
    $json = file_get_contents('data.json');
    $json_data = json_decode($json, true);

    if (in_array($_POST["pin"], $json_data["pins"])) {
        $response = ['success' => true];
    } else {
        $response = ['success' => false];
    }

    // Send JSON response to the client
    header('Content-Type: application/json');
    echo json_encode($response);
?>