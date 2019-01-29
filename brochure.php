<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Graphics</title>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/graphics.css">


</head>

<body>

  <!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Design Type</li>
                <li>Social Profiles</li>
                <li>Account Setup</li>
                <li>Account Setup</li>
                <li>Account Setup</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Design Name</h2>
                <input type="text" name="name" placeholder="Enter Name of Design"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
              <h3 class="fs-subtitle">Enter the type of brochure:</h3>
              <label class="container">Half Folds(4 sides)
                <input type="radio" checked="checked" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="container">Tri Folds(4 sides)
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="container">Gate Fold(3 sides)
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="container">Others
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <h3 class="fs-subtitle">Size:</h3>
              <label class="container">Letter
                <input type="radio" checked="checked" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="container">A4
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="container">A3
                <input type="radio" checked="checked" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="container">Others
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label for="design">Describe Your Design:</label>
                <textarea class="form-control" rows="4" id="slogan"></textarea>

              <h3 class="fs-subtitle">Content on Design:</h3>
              <textarea class="form-control" rows="2" id="slogan" placeholder="Slide-1"></textarea>
              <textarea class="form-control" rows="2" id="slogan" placeholder="Slide-2"></textarea>
              <textarea class="form-control" rows="2" id="slogan" placeholder="Slide-3"></textarea>
              <textarea class="form-control" rows="2" id="slogan" placeholder="Others"></textarea>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Draw Your Design</h2>
                <h3 class="fs-subtitle">Try, draw, and download your idea on our editor.</h3>
                <a href="draw.php" style="border:5px solid #eee;">Enter The Editor</a>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Upload Files</h2>
                <h3 class="fs-subtitle">Upload files for reference purposes</h3>
                <input type="text" name="email" placeholder="Email"/>
                <input type="password" name="pass" placeholder="Password"/>
                <input type="password" name="cpass" placeholder="Confirm Password"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>
                <input type="text" name="email" placeholder="Email"/>
                <input type="password" name="pass" placeholder="Password"/>
                <input type="password" name="cpass" placeholder="Confirm Password"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="submit" class="submit action-button" value="Submit"/>
            </fieldset>
        </form>
    </div>
</div>
<!-- /.MultiStep Form -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>



    <script  src="js/graphics.js"></script>




</body>

</html>
