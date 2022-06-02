<?php
      $name =readline('what is your name?(Sorry I keep forgetting.)');
      echo "$name \n";
      echo "ok, $name, ";
      $age = (float)readline('how old are you?');
      echo "$age \n";
      
      if($age>=25)
      {
          echo "You can do pretty much anything,$name\n";
      }
      else if($age<25 && $age>18)
      {
          echo "You can vote but not rent a car,$name";
      }
      else if($age<18 && $age>16)
      {
          echo "You can drive but not vote,$name ";
      }
      else if($age<16)
      {
          echo "You can't drive,$name";
      }
      
      
?>