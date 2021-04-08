<?php include "header.php"; ?>
<?php include "css.php"; ?>

<div class="css-page">
  <div class="form">
    <h1>Add Page</h1>
    <?php  if (!empty($errors)) { ?>
      <?php foreach ($errors as $error ){ ?>
        <div style="color: #c00;"> <?=$error ?></div>
      <?php } ?>
    <?php } ?>
    <form class="add-form" method="post" action = "addpage.php" enctype="multipart/form-data">
      <input type="text" name="title" placeholder="title"/> <br>
      <textarea type="text" name="body" placeholder="body"></textarea><br>
      <input type="file" id="img" name="image" accept="image/*"><br>
      <!-- <input type="text" name="link" placeholder="link"/><br> -->
      <button type="submit">Submit</button>
    </form>
  </div>
</div>


<?php include "footer.php"; 
?>