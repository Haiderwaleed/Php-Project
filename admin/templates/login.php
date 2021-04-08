
<?php include "css.php"; ?>


<div class="css-page">
  <div class="form">
  <?php  if (!empty($errors)) { ?>
  <?php foreach ($errors as $error ){ ?>
  <div style="color: #c00;"> <?=$error ?> </div>
  <?php } ?>
  <?php } ?>
    <h1>Login</h1>
    <form class="login-form" action="login.php" method="POST">
      <input type="text" placeholder="email" name="email"><br>
      <input type="password" placeholder="password" name="password"><br>
      <button type="submit">login</button>
    </form>
  </div>
</div>
