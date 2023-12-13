<?php
// This is a basic example, and you should use secure methods for handling user credentials.

$validUser = 'user';
$validPassword = 'password';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $validUser && $password === $validPassword) {
        // Successful login
        echo json_encode(['success' => true]);
    } else {
        // Invalid login
        echo json_encode(['success' => false]);
    }
} else {
    // Handle non-POST requests (optional)
    echo json_encode(['success' => false]);
}
?>
