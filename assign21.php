<?php
      $height = (float)readline('what is your height in metre?');
      echo "$height \n";
      $weight = (float)readline('what is your weight in kg?');
      echo "$weight \n";
      $BMI=$weight/($height * $height);
      echo "Your BMI is  $BMI\n";
      if($BMI<18.5)
        echo "BMI Category: Underweight\n";
      else if($BMI>=18.5 || $BMI<=24.9)
        echo "BMI Category: Normal weight\n";
      else if($BMI>=25.0 || $BMI<=29.9)
        echo "BMI Category: Over weight\n";
      else if($BMI>=30.0)
        echo "BMI Category: Obese\n";
    
?>