<?php
  ob_start();
  session_start();
  $page = "Log In";
  $name = "";

  $msg="";
  if (isset($_POST["login"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
    if ($_POST["username"] == "Yoobee" && $_POST["password"] == 1234) {
      $name = $_POST["username"];
    }
  }
?>
  <?php require("templates/head.php"); ?>
  <body>
    <?php require("templates/nav.php"); ?>
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
