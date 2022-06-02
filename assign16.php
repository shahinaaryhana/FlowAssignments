<?php
      $gender = readline("What is your gender (M or F):");
      $firstname = readline("First Name:");
      $lastname = readline("Last Name:");
      $age =(int)readline("Age:");
      if($gender=="F")
      {
         if($age>=20)
         {
             echo "Are you married, $firstname (y or n)?";
             $marriage = readline("");
             if($marriage=="y")
                echo "Mrs.$firstname $lastname\n";
             else if($marriage=="n")
                echo "Ms.$firstname $lastname\n"; 
         }
         else
         {
           echo "$firstname $lastname\n";
         }
      }
      else if($gender=="M")
      {
         if($age>=20)
             echo "Mr.$firstname $lastname\n"; 
         else
           echo "$firstname $lastname\n";
      }
      else
          echo "Invalid Option";
?>