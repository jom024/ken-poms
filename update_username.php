<?php
// Assuming you have a database connection established
// Get the user ID from your frontend
$newUsername = $_POST['newUsername']; // Get the new username from your frontend

// Sanitize and validate input (e.g., prevent SQL injection)
// ...

// Update the username in the 'users' table
$sqlUsers = "UPDATE users SET username = :newUsername WHERE user_id = 1";
$stmtUsers = $pdo->prepare($sqlUsers);
$stmtUsers->bindParam(':newUsername', $newUsername);


if ($stmtUsers->execute()) {
    echo 'Username updated successfully in the users table!';
} else {
    echo 'Error updating username in the users table.';
}
?>