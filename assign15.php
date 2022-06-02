<?php
      echo "TWO MORE QUESTIONS,BABY !\n\n\nThink of an object and i'll try guess it.\n";
      echo "Question 1)Does it belong inside or outside or both?\n";
      $q1 = readline("> ");
      if($q1=="inside")
      {
         echo "Question 2)Is it alive?\n";
         $q2 = readline("> ");
         if($q2=="yes")
         {
             echo "My guess is that you are thinking of a houseplant.\n";
         }
         else if($q2=="no")
         {
            echo "My guess is that you are thinking of a shower curtain.\n";
         }
      }
      else if("$q1==outside")
      {
         echo "Question 2)Is it alive?\n";
         $q2 = readline("> ");
         if($q2=="yes")
         {
             echo "My guess is that you are thinking of a bison.\n";
         }
         else if($q2=="no")
         {
            echo "My guess is that you are thinking of a billboard.\n";
         }
          
      }
      else if("$q1==both")
      {
         echo "Question 2)Is it alive?\n";
         $q2 = readline("> ");
         if($q2=="yes")
         {
             echo "My guess is that you are thinking of a dog.\n";
         }
         else if($q2=="no")
         {
            echo "My guess is that you are thinking of a cellphone.\n";
         }
      }
      else{
          echo "Invalid Option";
      }
?>