<?php
    $inputData = $_POST["pin"];

    // Read the JSON data from data.json
    $jsonData = file_get_contents('./data.json');
    $data = json_decode($jsonData, true);

    $ids = [];

    // Loop through the users and collect their IDs
    foreach ($data['users'] as $user) {
        $ids[] = $user['id'];
    }

    echo '<script>console.log(' . json_encode($ids) . ');</script>';

    // // Compare the submitted PIN with the stored PIN as strings
    // if ($inputData === $data['pin']) {
    //     $response = ['success' => true];
    // } else if (in_array($inputData, $ids)) {
    //     // If inputData is found in the ids array
    //     $response = ['success' => true];
    // } else {
    //     // If inputData is not found in the ids array and it's not equal to the stored pin
    //     $response = ['success' => false];
    // }

    // // Send JSON response to the client
    // header('Content-Type: application/json');
    // echo json_encode($response);

?>
