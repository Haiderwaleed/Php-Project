<?php

include '../includes/bootstrap.php';

if ($_POST) {

// Email validation 

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid Email';
    }
// insert users
    if (!$errors) {
        $id = (int)$_POST['id'];
        $i_query = " UPDATE users SET firstname = :firstname, lastname = :lastname, email = :email WHERE id='$id'";
        $stmt = $pdo->prepare($i_query);
        $stmt->execute([
            ':firstname' => $_POST['firstname'],
            ':lastname' => $_POST['lastname'],
            ':email' => $_POST['email'],
        ]);
        header("location: index-users.php");
        exit;
    }
}
if (empty($_POST) || !empty($errors)) {

    if (!empty($_GET['id'])) {
        $id = (int)$_GET['id'];
    } elseif (!empty($_POST['id'])) {
        $id = (int)$_POST['id'];

    }

    $q = "SELECT * FROM users WHERE id=$id";
    $stmt = $pdo->prepare($q);
    $stmt->execute([':id' => $id]);
    $user = $stmt->fetch();


    // show register
    include 'templates/user-edit.php';

}

