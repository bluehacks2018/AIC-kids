<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="dashboard.php"><?php include("name.php") ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-uppercase" id="navbarsExample03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="edit_profile.php">Edit Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="account.php">account</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-md-0" action="logout.php" method="post">
      <button id="submit" name="submit" class="btn btn-danger">LOG OUT</button>
    </form>
  </div>
</nav>