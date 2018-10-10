<?php
  ob_start();
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Session</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <h2>Please Enter your Username and Password</h2>

      <div>
        <?php
          $msg="";
          if (isset($_POST["login"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
            if ($_POST["username"] == "Yoobee" && $_POST["password"] == 1234) {
              $_SESSION["valid"] = true;
              $_SESSION["timeout"] = time();
              $_SESSION["username"] = $_POST["username"];
              echo('You have entered in the correct username and password');
            } else {
              echo('The password or username is incorrect');
            }
          }
        ?>
      </div>

      <div class="form">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" required autofocus>
          </div>
          <div class="form-group">
            <label for="password">Password</label><br>
            <input type="password" class="form-control" name="password" required><br>
          </div>
          <button type="submit" name="login" class="btn btn-success">Login</button>
        </form>
        <br><br>
        <a href="logout1.php" title="logout" class="btn btn-dark">Log out</a>
      </div>
    </div>

  </body>
</html>
