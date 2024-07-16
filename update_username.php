<?php
// Assuming you have a database connection established
// Get the new username from the POST request
$newUsername = $_POST['newUsername'];
$newemail = $_POST['newemail'];
$newphone = $_POST['newphone'];

// Validate and sanitize input (e.g., prevent SQL injection)
// Example validation:
if (!isset($newUsername) || empty($newUsername)) {
    echo 'Error: Username cannot be empty.';
    exit;
}
if (!isset($newemail) || empty($newemail) || !filter_var($newemail, FILTER_VALIDATE_EMAIL)) {
    echo 'Error: Invalid email address.';
    exit;
}

if (!isset($newphone) || empty($newphone)) {
    echo 'Error: Phone number cannot be empty.';
    exit;
}
// Example sanitization (using PDO for database operations):
try {
    $pdo = new PDO('mysql:host=localhost;dbname=ken_poms', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Update the username in the database
    $sql = "UPDATE profile SET username = :newUsername, email = :newemail WHERE user_id = 2";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':newUsername', $newUsername);
    $stmt->bindParam(':newemail', $newemail);
    $stmt->execute();

    $sqlemp = "UPDATE employee SET phone_number = :newphone WHERE employee_id = 2";
    $stmtemp = $pdo->prepare($sqlemp);
    $stmtemp->bindParam(':newphone', $newphone);
    $stmtemp->execute();

    $pdo->commit();

    echo 'Profile updated successfully!';
} catch (PDOException $e) {
    // Rollback transaction if something went wrong
    $pdo->rollBack();
    echo 'Error updating profile: ' . $e->getMessage();
}
?>
