<?php include "header.php"; ?>
<?php include "css.php"; ?>

<div class="css-page">
  <div class="form">
    <h1>Edit Project</h1>
    <form class="add-form" method="post" action = "editportfolio.php"  enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $id; ?>">
      <input type="text" name="title" placeholder="Page title" value="<?= $page['title'] ?>"/> <br>
      <textarea name="body" placeholder="body"><?= $page['body'] ?></textarea><br>
      <input type="file" id="img" name="image" accept="image/*"><br>
      <?php if ($page['image']) { ?> <img src=".<?= $page['image'] ?>" width="200" /><br>
      <?php } ?>
      <input type="text" name="url" placeholder="url" value="<?= $page['url'] ?>"/><br>
      <button type="submit">update</button>
    </form>
  </div>
</div>

<?php include "footer.php"; ?>

