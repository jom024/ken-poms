<?php

require "config.php";

// to connect php to sql database
function connect() {
    $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    if($mysqli->connect_errno != 0) {
        $error = $mysqli->connect_error;
        $error_date = date("F j, Y, g:i a");
        $message = "{$error} | {error_date} \r\n";
        file_put_contents("db-log.txt", $message, FILE_APPEND);
        return false;
    } else {
        return $mysqli;
    }
}

// to register user in the database
function registerUser($email, $username, $password, $confirm_password) {
    $mysqli = connect();
    $args = func_get_args();

    $args = array_map(function($value){
        return trim($value);
    }, $args);

    foreach ($args as $value){
        if(empty($value)){
            return "All fields are required.";
        }
    }

    foreach ($args as $value){
        if(preg_match("/([<|>])/", $value)){
            return "<> characters are not allowed.";
        }
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return "Email is not valid.";
    }

    $stmt = $mysqli->prepare("SELECT email FROM employees WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    if($data != NULL){
        return "Email already exists.";
    }

    if(strlen($username) > 50){
        return "Username is too long.";
    }

    $stmt = $mysqli->prepare("SELECT username FROM employees WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    if($data != NULL){
        return "Username already exists.";
    }

    if(strlen($password) > 50){
        return "Password is too long.";
    }

    if($password != $confirm_password){
        return "Passwords don't match.";
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $mysqli->prepare("INSERT INTO employees(username, password, email) VALUES(?,?,?)");
    $stmt->bind_param("sss", $username, $hashed_password, $email);
    $stmt->execute();
    if($stmt->affected_rows != 1){
        return "An error occured. Please try again.";
    } else {
        return "success";
    }
}

// to log the user in the system
function loginUser($username, $password) {
    $mysqli = connect();
    $username = trim($username);
    $password = trim($password);

    if($username == "" || $password == ""){
        return "Both fields are required.";
    }

    $username = filter_var($username, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($password, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    // $password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');

    $sql = "SELECT username, password FROM employees WHERE username = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    if($data == NULL){
        return "Wrong username or password.";
    }

    if(password_verify($password, $data["password"]) == FALSE){
        return "Wrong username or password.";
    } else {
        $_SESSION["user"] = $username;
        header("Location: index.php");
        exit();
    }
}

// to log out the user
function logoutUser() {}

// to reset password and send an email to the user
function passwordReset() {}

// to give user the option to delete account
function deleteAccount() {}