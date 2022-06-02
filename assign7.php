<?php
      $height = (float)readline('what is your height in metre?');
      echo "$height \n";
      $weight = (float)readline('what is your weight in kg?');
      echo "$weight \n";
      $BMI=$weight/($height * $height);
      echo "Your BMI is  $BMI";
      
?>