<?php

include '../includes/bootstrap.php';

if($_POST){

    $errors = [];

    if (!$_POST['title']) {
        $errors[] = "Title field is mandatory!";
    }

    // insert users
    if (!$errors){
        // upload file
        if ($_FILES['image']['tmp_name']) {
            $fileinfo = pathinfo($_FILES['image']['name']);
            $ext = $fileinfo['extension'];
            $new_filepath = './uploads/' . uniqid() . '.' . $ext;
            move_uploaded_file($_FILES['image']['tmp_name'], '.' . $new_filepath);
        }

        $i_query = "INSERT INTO portfolio (title, body, url, image) VALUES (:title, :body, :link, :new_filepath)";
        $stmt = $pdo->prepare($i_query);
        $stmt->bindParam(':title', $_POST['title']);
        $stmt->bindParam(':body', $_POST['body']);
        $stmt->bindValue(':link', isset($_POST['link']) ? $_POST['link'] : ''); /* old way */
        $stmt->bindParam(':new_filepath', $new_filepath);
        $stmt->execute();

        header("location: index-portfolio.php");
        exit;
    }

}
if (empty($_POST) || !empty($errors)) {
    // show add protfolio form
    include 'templates/addportfolio.php';
    include 'textedit.php';

}

