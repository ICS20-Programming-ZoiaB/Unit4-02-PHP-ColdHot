<!DOCTYPE html>
<html lang="en-ca">
 <head>
   
   <!-- Metadata -->
   <meta charset="utf-8">
   <meta name="description" content="Temperature Website PHP Webpage">
   <meta name="keywords" content="immaculata, ics2o">
   <meta name="author" content="ZoiaB">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Code for the favicon -->
   <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/android-chrome-512x512.png">
   <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/android-chrome-512x512.png">
   <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/android-chrome-512x512.png">
   <link rel="manifest" href="./fav_index/android-chrome-512x512.png">
   
   <!-- Stylesheet -->
   <link rel="stylesheet" href="./css/style.css">
   <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.orange-deep_orange.min.css"/>
   
   <!-- Title -->
   <title>Temperature Webpage in PHP</title>
 </head>
  <body>
    
   <!-- Header -->
   <?php echo "<h1>Temperature Website in PHP</h1>"; ?>

   <!-- Image -->
   <center>
   <img src="./images/weather.jpg" alt="Weather" width="300" length="300">

   <!-- Div -->
   <div>
     <?php
       echo "<h3>Is it hot or cold...?</h3>";
       echo "<p>This web page can help you determine whether the temperature is hot or cold!</p>";
     ?>
    </div>

    <?php echo "<h3>Your Input:</h3>"; ?>
    <form action="./results.php" method="post" target="results">
      <label for="user-input">Enter the temperature (degrees Celsius):</label>
      <input type="float" step="0.01" name="temp-entered" placeholder="Degrees"><br><br>
      <input type="submit" id="button" value="Evaluate" button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
    </form>
     
    <!-- iFrame -->
    <iframe name="results" id="results"></iframe>
   </center>
  </body>
</html>