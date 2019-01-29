<?php
// Initialize the session
session_start();
?>

<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$name = $logo_title = $tagline = $industry = $description = $color = "";
$name_err = $logo_title_err = $tagline_err = $industry_err = $description_err = $color_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate name
    if(empty(trim($_POST["name"]))){
        $name_err = "Please enter your name.";
    }  else{
        $name= trim($_POST["name"]);
    }

    // Validate logo title
    if(empty(trim($_POST["logo_title"]))){
        $logo_title_err = "Please enter your logo title.";
    }  else{
        $logo_title= trim($_POST["logo_title"]);
    }

    // Validate tagline
    if(empty(trim($_POST["tagline"]))){
        $tagline_err = "Please enter your tagline.";
    }  else{
        $tagline= trim($_POST["tagline"]);
    }

    // Validate industry
    if(empty(trim($_POST["industry"]))){
        $industry_err = "Please enter your target audience.";
    }  else{
        $industry= trim($_POST["industry"]);
    }

    // Validate description
    if(empty(trim($_POST["description"]))){
        $description_err = "Please enter descrption of your design.";
    }  else{
        $description= trim($_POST["description"]);
    }

    // Validate color
    if(empty(trim($_POST["color"]))){
        $color_err = "Please add a color.";
    }  else{
        $color= trim($_POST["color"]);
    }


    // Check input errors before inserting in database
    if(empty($name_err) && empty($logo_title_err) && empty($tagline_err) && empty($industry_err) && empty($description_err) && empty($color_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO logo (name, logo_title, tagline, industry, description, color) VALUES (?, ?, ?, ?, ?, ?)";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssssss", $param_name, $param_logo_title, $param_tagline, $param_industry, $param_description, $param_color);

            // Set parameters
            $param_name = $name;
            $param_logo_title = $logo_title;
            $param_tagline = $tagline;
            $param_industry = $industry;
            $param_description = $description;
            $param_color = $color;

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: index.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $mysqli->close();
}
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
        <form id="msform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Design Name</li>
                <li>Description</li>
                <li>Draw Your Idea</li>
                <li>Upload Files</li>
                <li>Payment</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">Design Name</h2>
                <input type="text" name="name" placeholder="Enter Name of Design" value="<?php echo $name; ?>"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Describe Your Design</h2>
                <input type="text" name="logo_name" placeholder="Enter the exact name on your logo"/>
                <label for="design">Slogan or Tagline:</label>
                 <textarea class="form-control" rows="2" id="slogan"></textarea>
                 <label for="design">Target Audience:</label>
                  <textarea class="form-control" rows="2" id="slogan"></textarea>
                <label for="design">Brief description of how you envision your logo:</label>
                 <textarea class="form-control" rows="5" id="design"></textarea>
                <label for="color">Color Preference:</label>
                 <input type="color" name="theme_color" value="#ff0000" style="padding:0px;">
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
