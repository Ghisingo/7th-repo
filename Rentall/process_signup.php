<?php
// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$phoneNumber = $_POST['phoneNumber'];
$username = $_POST['username'];

// Validation (add your own validation logic here)

// Generate unique user ID
$userId = uniqid(); // You can generate a unique user ID here using a preferred method

// Create an associative array with user data
$userData = array(
    'userId' => $userId,
    'email' => $email,
    'password' => $password,
    'phoneNumber' => $phoneNumber,
    'username' => $username
);

// Write user data to a file (admin.txt)
$adminFile = 'admin.txt';
$file = fopen($adminFile, 'a'); // Open file in append mode

if ($file) {
    fwrite($file, json_encode($userData) . "\n"); // Write user data in JSON format
    fclose($file); // Close the file
    echo 'User data has been saved in admin file.';
} else {
    echo 'Error: Unable to save user data.';
}
?>
