<?php
  session_start();

?>
<html>
	<head>
		<title>Login - <?php include("name.php") ?></title>
		<?php include("header.php") ?>
    <link href="./css/signin.css" rel="stylesheet">
	</head>

	<body class="text-center">
    <?php include("navbar.php") ?>
    <form class="form-signin" action="login.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Contact Number</label>
      <input type="text" id="inputEmail" class="form-control" placeholder="09XXXXXXXXX" required="" autofocus="" name="contact">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <button class="btn btn-lg btn-primary btn-block" type="button">Register</button>
      <?php if ($_SESSION['success']) 
          echo "REGISTRATION SUCCESSFUL";
          $_SESSION['success'] = false;
      ?>
      <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
    </form>
		<!-- <ul>
			<li><a href='send_sms.php'>Send am SMS message</a></li>
			<li><a href='add_contact.php'>Add or update a Telerivet contact via a web form</a></li>
		</ul> -->
	</body>
</html>
