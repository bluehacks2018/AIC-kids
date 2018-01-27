<!DOCTYPE html>
<html>
<head>
	<title>Registration - <?php include("name.php") ?> </title>
	<?php include("header.php") ?>
</head>
<body class="non-signin">

  <?php include("navbar.php") ?>
  <?php 
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'juanjob');
    $query = "SELECT * FROM job";

    $result = mysqli_query($conn, $query);
  ?>

	<div class="container-fluid">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 custom-content-registration">
        <form class="form-horizontal" method="post" action="register.php">
          <fieldset>

          <!-- Form Name -->
          <legend>Registration</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-12 control-label" for="last_name">Last Name</label>  
            <div class="col-md-12">
            <input id="last_name" name="last_name" type="text" placeholder="Rizal" class="form-control input-md" required="">
              
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-12 control-label" for="first_name">First Name</label>  
            <div class="col-md-12">
            <input id="first_name" name="first_name" type="text" placeholder="Jose" class="form-control input-md" required="">
              
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-12 control-label" for="contact">Contact</label>  
            <div class="col-md-12">
            <input id="contact" name="contact" type="text" placeholder="09999999999" class="form-control input-md" required="">
              
            </div>
          </div>

          

          <div class="form-group">
            <label class="col-md-12 control-label" for="job">Job(s)</label>
            <div class="col-md-12">
              <select id="job" name="job" class="form-control">
                <?php
                  while ($row = mysqli_fetch_assoc($result)) {
                    //echo $row['job_id']." ".$row['job_title'];
                    //echo '<option value="'$row[0];'">'$row[1]'</option>';
                    //<option value=echo $row['job_id']>$row['job_title']</option>
                    echo '<option value=';
                    echo $row['job_id'];
                    echo '>';
                    echo $row['job_title'];
                    echo '</option>';

                  }
                ?>
              </select>
            </div>
          </div>

          <!-- Text input-->
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

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-12 control-label" for="street">Street</label>  
            <div class="col-md-12">
            <input id="street" name="street" type="text" placeholder="" class="form-control input-md" required="">
              
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-12 control-label" for="barangay">Barangay</label>  
            <div class="col-md-12">
            <input id="barangay" name="barangay" type="text" placeholder="" class="form-control input-md">
              
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-12 control-label" for="City">City</label>  
            <div class="col-md-12">
            <input id="City" name="city" type="text" placeholder="" class="form-control input-md">
              
            </div>
          </div>

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-12 control-label" for="submit"></label>
            <div class="col-md-12">
              <center>
                <button id="submit" name="submit" class="btn btn-primary">Submit</button>
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