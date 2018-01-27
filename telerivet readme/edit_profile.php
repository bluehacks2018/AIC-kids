<?php
  session_start();
  $id = $_SESSION['id'];
  $conn = mysqli_connect('127.0.0.1', 'root', '', 'juanjob');
  if ($id < 1)
    header('Location: index.php');
  $query = "SELECT * FROM provider where provider_id = $id";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile - <?php include("name.php") ?> </title>
	<?php include("header.php") ?>
</head>
<body class="non-signin">

  <?php include("navbar.php") ?>

	<div class="container-fluid">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 custom-content-registration">
        <form class="form-horizontal" action="update.php" method="get">
          <fieldset>

          <!-- Form Name -->
          <legend>Edit Profile</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-12 control-label" for="last_name">Last Name</label>  
            <div class="col-md-12">
            <input id="last_name" name="last_name" value="<?php echo $row["last_name"]; ?>" type="text" placeholder="Rizal" class="form-control input-md" required="">
            </div>
          </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="first_name">First Name</label>  
              <div class="col-md-12">
              <input id="first_name" name="first_name" value="<?php echo $row["first_name"]; ?>" type="text" placeholder="Jose" class="form-control input-md" required="">
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="contact">Contact</label>  
              <div class="col-md-12">
              <input id="contact" name="contact" type="text" value="<?php echo $row["contact"]; ?>" class="form-control input-md" required="">
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="street">Street</label>  
              <div class="col-md-12">
              <input id="street" name="street" type="text" value="<?php echo $row["street"]; ?>" class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="barangay">Barangay</label>  
              <div class="col-md-12">
              <input id="barangay" name="barangay" value="<?php echo $row["brgy"]; ?>" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="City">City</label>  
              <div class="col-md-12">
              <input id="City" name="city" type="text" value="<?php echo $row["city"]; ?>" class="form-control input-md">
                
              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-12 control-label" for="submit"></label>
              <div class="col-md-12">
                <center>
                  <button id="submit" name="submit" class="btn btn-primary">Save Profile</button>
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