<?php
  session_start();
  echo($_SESSION["username"]);
  unset($_SESSION["username"]);
  echo("You have been loged out");
  header("Refresh:2; URL=login1.php")
?>
