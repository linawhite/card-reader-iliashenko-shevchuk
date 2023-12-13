<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if "pin" is set in the POST data
        if (isset($_POST["pin"])) {
            $json = file_get_contents('data.json');
            $json_data = json_decode($json, true);
            
            // Check if the entered PIN matches the one in the data.json file
            if ($_POST["pin"] === $json_data["pin"]) {
                echo json_encode(array('success' => true));
            } else {
                echo json_encode(array('success' => false, 'message' => 'Invalid PIN'));
            }
        } else {
            echo json_encode(array('success' => false, 'message' => 'PIN not provided'));
        }
    }
?>
