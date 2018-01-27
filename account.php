<!DOCTYPE html>
<html>
<head>
	<title>Account - <?php include("name.php") ?> </title>
	<?php include("header.php") ?>
</head>
<body class="non-signin">

  <?php include("navbar.php") ?>

	<div class="container-fluid">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 custom-content-registration">
        <form class="form-horizontal">
          <fieldset>

          <!-- Form Name -->
          <legend>Account Settings</legend>

          <div class="form-group">
            <label class="col-md-12 control-label" for="old_password">Old Password</label>  
            <div class="col-md-12">
            <input id="old_password" name="old_password" type="password" class="form-control input-md" required="">
              
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-12 control-label" for="password">Password</label>  
            <div class="col-md-12">
            <input id="password" name="password" type="password" class="form-control input-md" required="">
              
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-12 control-label" for="password_confirm">Confirm Password</label>  
            <div class="col-md-12">
            <input id="password_confirm" name="password_confirm" type="password" class="form-control input-md" required="">
              
            </div>
          </div>

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-12 control-label" for="submit"></label>
            <div class="col-md-12">
              <center>
                <button id="submit" name="submit" class="btn btn-primary">Save Changes</button>
              </center>
            </div>
          </div>

          </fieldset>
        </form>
      </div>
    </div>
  </div>

</body>
</html>