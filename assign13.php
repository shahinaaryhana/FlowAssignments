<?php
      echo "TWO QUESTIONS !!\nThink of an object and i'll try guess it.\n";
      echo "Question 1)Is it animal,vegetable or mineral?\n";
      $q1 = readline("> ");
      if($q1=="animal")
      {
         echo "Question 2)Is it bigger than a breadbox?\n";
         $q2 = readline("> ");
         if($q2=="yes")
         {
             echo "My guess is that you are thinking of a mouse.\nI would ask you if I'm right,but I don't actually care.\n";
         }
         else if($q2=="no")
         {
            echo "My guess is that you are thinking of a squirrel.\nI would ask you if I'm right,but I don't actually care.\n";
         }
      }
      else if($q1=="vegetable")
      {
         echo "Question 2)Is it bigger than a breadbox?\n";
         $q2 = readline("> ");
         if($q2=="yes")
         {
             echo "My guess is that you are thinking of a watermelon.\nI would ask you if I'm right,but I don't actually care.\n";
         }
         else if($q2=="no")
         {
            echo "My guess is that you are thinking of a carrot.\nI would ask you if I'm right,but I don't actually care.\n";
         }
          
      }
      else if($q1=="mineral")
      {
         echo "Question 2)Is it bigger than a breadbox?\n";
         $q2 = readline("> ");
         if($q2=="yes")
         {
             echo "My guess is that you are thinking of a Camaro.\nI would ask you if I'm right,but I don't actually care.\n";
         }
         else if($q2=="no")
         {
            echo "My guess is that you are thinking of a paper clip.\nI would ask you if I'm right,but I don't actually care.\n";
         }
      }
      else{
          echo "Invalid Option";
      }
?>