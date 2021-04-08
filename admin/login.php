<?php

include '../includes/bootstrap.php';

if ($_POST) {


    $q = "SELECT * FROM users WHERE email=:email AND password = :password";
    $stmt = $pdo->prepare($q);
    $stmt->execute([
        ':email' => $_POST['email'],
        ':password' => $_POST['password'],
    ]);
    $user = $stmt->fetch();

    if ($user && $user['id'] > 0) {
        $_SESSION['is_logged'] = $user['id'];
        header("Location: index.php");
        exit;
    }

    $errors[] = "Wrong username or password";
}


include 'templates/header.php';

include 'templates/login.php';

include 'templates/footer.php';