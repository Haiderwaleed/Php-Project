<?php

include '../includes/bootstrap.php';

if ($_POST) {
    $id = (int) $_POST['id'];

    $image_upload = '';

    // upload file
    if ($_FILES['image']['tmp_name']) {
        // delete the old file
        $q = "SELECT image FROM pages WHERE id=:id";
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
    $i_query = "UPDATE pages SET title = :title, body = :body, link = :link $image_upload WHERE id=:id";
    $stmt = $pdo->prepare($i_query);
    $stmt->execute([
      ':title' => $_POST['title'],
      ':body' => $_POST['body'],
      ':link' => $_POST['link'],
      ':id' => $_POST['id'],
    ]);
    header("location: index-pages.php");
    exit;
}

if (empty($_POST)) {

    if (!empty($_GET['id'])) {
        $id = (int) $_GET['id'];
    }

    $q = "SELECT * FROM pages WHERE id=:id";
    $stmt = $pdo->prepare($q);
    $stmt->execute([':id' => $id]);
    $page = $stmt->fetch();


    // show register
    include 'templates/editpage.php';
    include 'textedit.php';

}
