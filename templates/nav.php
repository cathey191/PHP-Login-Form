<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Logo</a>

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login </a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
        <input type="password" class="form-control" name="password" placeholder="Password" required>
      <button type="submit" name="login" class="btn btn-success">Login</button>
    </form> -->
    <p><?= $name ?></p>
  </div>
</nav>
