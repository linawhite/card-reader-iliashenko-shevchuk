<?php 

header('Content-Type: application/json'); // Set the content type to application/json

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Function to get and append data to the existing JSON
    function get_data() {
        $file_name = 'users.json';
        $current_data = json_decode(file_get_contents($file_name), true);
        $new_user = array(
            'id' => $_POST['id'], 
            'name' => $_POST['name'], 
            'surname' => $_POST['surname'], 
            'age' => $_POST['age'], 
            'faculty' => $_POST['faculty'],
        ); 
        $current_data['users'][] = $new_user;
        return json_encode($current_data);
    }

    // Attempt to append the data and save the file
    $response = ['success' => false, 'message' => ''];
    if(file_put_contents("users.json", get_data())) {
        $response['success'] = true;
        $response['message'] = 'File created successfully';
    } else {
        $response['message'] = 'There is some error';
    }

    // Return the response as JSON
    echo json_encode($response);
}
?>
