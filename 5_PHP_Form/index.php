
<?php
$display_name = "nafis"
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PHP Basics by  <?php $display_name ?> </title>
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div id="wrap">
      <section class="sidebar text-center">
        <div class="avatar">
          <img src="img/logo.png" alt="Alt For Image" />
        </div>
        <h1><?php $display_name ?></h1>
        <p>
          Contact:<br />
          <a href="mailto:">EMAIL</a>
        </p>
        <hr />
        <ul class="social">
          <li>
            <a href=""><span class="icon twitter"></span></a>
          </li>
        </ul>
        <hr />
        <p>Today: D, d M Y</p>
      </section>
      <section class="main">
        <h1>My First PHP Page</h1>

        <h2>Unit Conversion</h2>
        <?php include "inc/units.php"; ?>

        <!--

Weight: 140 lb = 63.50288 kgDistance: 2.5 miles = 4.02335 km // this will be displayed 
-->

        <hr />

        <h2>Daily Exercise</h2>
        <?php include "inc/exercise.php"; ?>
      </section>
    </div>
    <section class="footer text-center">
      &copy; <?php echo date('Y');
      echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
      
      
      ?> 
      <!--
        php echo date('Y')
         this gets the current year. 
        Y parameter is the parameter for the current year

-->
    </section>
  </body>
</html>
