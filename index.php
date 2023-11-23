<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>All Blue /Login</title>
    <link rel="stylesheet" href="./assets/css/login.css" />
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post" action = "./assets/pages/login.php">
      <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <div class="txt_field">
          <input type="text" name="username" required />
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required />
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Login" />
      </form>
    </div>
    <div class="bottom">
      <img src="./assets/img/AniWave.svg" alt="wave" class="wave" />
    </div>
  </body>
</html>
