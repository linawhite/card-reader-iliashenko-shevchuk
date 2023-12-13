<!-- <?php
    $inputData = $_POST["pin"];
    
    // Read the JSON data from data.json
    $jsonData = file_get_contents('./data.json');
    $data = json_decode($jsonData, true);
    // Compare the submitted PIN with the stored PIN as strings
    if ($inputData === $data['pin']) {
        $response = ['success' => true];
    } else {
        $response = ['success' => false];
    }

    // Send JSON response to the client
    header('Content-Type: application/json');
    echo json_encode($response);

?> -->

<?php
    $inputData = $_POST["pin"];
    
    // Read the JSON data from data.json
    $jsonData = file_get_contents('./data.json');
    $data = json_decode($jsonData, true);
    // Compare the submitted PIN with the stored PIN as strings
    if (in_array(inputData, $data['pins'])) {
        $response = ['success' => true];
    } else {
        $response = ['success' => false];
    }

    // Send JSON response to the client
    header('Content-Type: application/json');
    echo json_encode($response);

?>