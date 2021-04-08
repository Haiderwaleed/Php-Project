<?php

include '../includes/bootstrap.php';

if($_POST){

    $errors = [];

    if (!$_POST['title']) {
        $errors[] = "Title field is mandatory!";
    }

    // insert users
    // mysqli_real_escape_string: escapes special characters in a string for use in an SQL query
    if (!$errors){

        // upload file
        $new_filepath = '';
        if ($_FILES['image']['tmp_name']) {
            $fileinfo = pathinfo($_FILES['image']['name']);
            $ext = $fileinfo['extension'];
            $new_filepath = './uploads/' . uniqid() . '.' . $ext;
            move_uploaded_file($_FILES['image']['tmp_name'], '.' . $new_filepath);
        }
        $i_query = "INSERT INTO pages (title, body, link,image) VALUES (:title, :body, :link, :new_filepath)";
        $stmt = $pdo->prepare($i_query);

        $stmt->bindParam(':title', $_POST['title']);
        $stmt->bindParam(':body', $_POST['body']);
        $stmt->bindValue(':link', isset($_POST['link']) ? $_POST['link'] : ''); /* old way */
        $stmt->bindParam(':new_filepath', $new_filepath);

        $stmt->execute();
        header("location: index-pages.php");
        exit;
        
    }

}
if (empty($_POST) || !empty($errors)) {
    // show register
    include 'templates/addpage.php';
    include 'textedit.php';
}



