<?php

  //getting temperature and message variables & temperature-limit constant
  $temperature = floatval($_POST["temp-entered"]);
  define ("TEMP_LIMIT", 15);
  $message = "";

  //if: if temperature is greater or equal to 15 degrees
  if ($temperature >= TEMP_LIMIT) {
    $message = "This is considered hot. Prepare for warmer weather.";
  }
    
  //else: if temperature less than 15 degrees
  else {
    $message = "This is considered cold. Prepare for cooler weather.";
  }

  //displaying the correct message to the screen
  echo "$message";
?>