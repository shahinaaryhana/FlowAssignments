<?php
      $name =readline('what is your name?');
      echo "$name \n";
      echo "ok, $name, ";
      $age = (float)readline('how old are you?');
      echo "$age \n";
      
      if($age>=25)
      {
          echo "You can do anything that's legal,$name\n";
      }
      else if($age<25 && $age>18)
      {
          echo "You can't rent a car $name";
      }
      else if($age<18 && $age>16)
      {
          echo "You can't vote $name\n You can't rent a car $name ";
      }
      else if($age<16)
      {
          echo "You can't drive $name\nYou can't vote $name\nYou can't rent a car $name ";
      }
      
      
?>