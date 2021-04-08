<?php include "header.php"; ?>
<?php  if (!empty($errors)) { ?>
<?php foreach ($errors as $error ){ ?>
<div style="color: #c00;"> <?=$error ?> </div>
<?php } ?>
<?php } ?> 
<?php include "css.php"; ?>


<div class="css-page">
  <div class="form">
    <h1>Edit User</h1>
    <form class="add-form" method="post" action = "user-edit.php">
      <input type="hidden" name="id" value="<?= $id; ?>">
      <input type="text" name="firstname" placeholder="firstname" value="<?= $user['firstname'] ?>"/> <br>
      <input type="text" name="lastname" placeholder="lastname" value="<?= $user['lastname'] ?>"/><br>
      <input type="text" name="email" placeholder="email" value="<?= $user['email'] ?>"/><br>
      <button type="submit">update</button>
    </form>

  </div>
</div>


<?php include "footer.php"; ?>