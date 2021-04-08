<?php include "header.php"; ?>
<?php include "css.php"; ?>

<div class="css-page">
  <div class="form">
  <?php  if (!empty($errors)) { ?>
  <?php foreach ($errors as $error ){ ?>
  <div style="color: #c00;"> <?=$error ?> </div>
  <?php } ?>
  <?php } ?> 
    <h1>Registeration</h1>
    <form class="login-form" method="post" action = "register.php">
      <input type="text" name="firstname" placeholder="firstname" required/> <br>
      <input type="text" name="lastname" placeholder="lastname" required/><br>
      <input type="text" name="email" placeholder="email" required/><br>
      <input type="text" name="password" placeholder="password" required/><br>
      <input type="text" name="confirm_password" placeholder="confirm_password" required/><br>
      <button type="submit">Creat Account</button>
    </form>
  </div>
</div>
<?php include "footer.php"; ?>