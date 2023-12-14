<?php
// Read existing data from users.json
$json = file_get_contents('users.json');
$data = json_decode($json, true);

// Add new user data
$newUserData = json_decode(file_get_contents('php://input'), true);
$data['users'][] = $newUserData;

// Save the updated data back to users.json
file_put_contents('users.json', json_encode($data));

// Respond with success
echo json_encode(['success' => true]);
?>
