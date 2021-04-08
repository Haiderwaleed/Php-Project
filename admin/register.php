<?php

include '../includes/bootstrap.php';

if($_POST){

// without space

$_POST['email'] = trim($_POST['email']);
$_POST['firstname'] = trim($_POST['firstname']);
$_POST['lastname'] = trim($_POST['lastname']);
$errors =[];

// comapre password

if ($_POST['password'] != $_POST['confirm_password']){
    $errors[] = 'The password not matched';
}

// Email validation 

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors[] = 'Invalid Email';
}
// insert users
if (!$errors){

$i_query = "INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)";
$stmt = $pdo->prepare($i_query);

    $stmt->bindParam(':firstname', $_POST['firstname']);
    $stmt->bindParam(':lastname', $_POST['lastname']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':password', $_POST['password']);
    $stmt->execute();
    header("location: index-users.php");
exit;

}

}
if (empty($_POST) || !empty($errors)) {
// show register
    include 'templates/register.php';

}

