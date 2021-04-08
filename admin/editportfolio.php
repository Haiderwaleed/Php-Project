<?php

include '../includes/bootstrap.php';

if ($_POST) {
    $id = (int) $_POST['id'];
    $image_upload = '';

    // upload file
    if ($_FILES['image']['tmp_name']) {
        // delete the old file
        $q = "SELECT image FROM portfolio WHERE id=:id";
        $stmt = $pdo->prepare($q);
        $stmt->execute([':id' => $id]);
        $row = $stmt->fetch();

        if ($row['image']) {
            unlink('.' . $row['image']);
        }


        $fileinfo = pathinfo($_FILES['image']['name']);
        $ext = $fileinfo['extension'];
        $new_filepath = './uploads/' . uniqid() . '.' . $ext;
        move_uploaded_file($_FILES['image']['tmp_name'], '.' . $new_filepath);
        $image_upload = ", image = '$new_filepath'";
    }
    $i_query = " UPDATE portfolio SET title = :title, body = :body, url = :url $image_upload WHERE id=:id";
    $stmt = $pdo->prepare($i_query);
    $stmt->execute([
        ':title' => $_POST['title'],
        ':body' => $_POST['body'],
        ':url' => $_POST['url'],
        ':id' => $_POST['id'],
    ]);
    header("location: index-portfolio.php");
    exit;
}

if (empty($_POST)) {

    if (!empty($_GET['id'])) {
        $id = (int) $_GET['id'];
    }

    $q = "SELECT * FROM portfolio WHERE id=:id";
        $stmt = $pdo->prepare($q);
        $stmt->execute([':id' => $id]);
        $page = $stmt->fetch();


    // show register
    include 'templates/editportfolio.php';
    include 'textedit.php';

}

