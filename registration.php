<!DOCTYPE html>
<html>
<head>
	<title>Registration - <?php include("name.php") ?> </title>
	<?php include("header.php") ?>
</head>
<body class="non-signin">

	<div class="container-fluid">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10 custom-content">
        <form class="form-horizontal">
          <fieldset>

          <!-- Form Name -->
          <legend>Registration</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="last_name">Last Name</label>  
            <div class="col-md-12">
            <input id="last_name" name="last_name" type="text" placeholder="Rizal" class="form-control input-md" required="">
              
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="first_name">First Name</label>  
            <div class="col-md-12">
            <input id="first_name" name="first_name" type="text" placeholder="Jose" class="form-control input-md" required="">
              
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="contact">Contact</label>  
            <div class="col-md-12">
            <input id="contact" name="contact" type="text" placeholder="09999999999" class="form-control input-md" required="">
              
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="street">Street</label>  
            <div class="col-md-12">
            <input id="street" name="street" type="text" placeholder="" class="form-control input-md" required="">
              
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="barangay">Barangay</label>  
            <div class="col-md-12">
            <input id="barangay" name="barangay" type="text" placeholder="" class="form-control input-md">
              
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="City">City</label>  
            <div class="col-md-12">
            <input id="City" name="City" type="text" placeholder="" class="form-control input-md">
              
            </div>
          </div>

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-12">
              <button id="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>

          </fieldset>
        </form>
      </div>
    </div>
  </div>

</body>
</html>