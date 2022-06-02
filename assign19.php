<?php
      $n=45;
      $m=1;
      echo "I'm thinking of a number between 1-100. You have 7 guesses\n";
      $guess=(int)readline("First guess:\n");
      $m++;
      while($n!=$guess && $m<=7)
      {
          if($guess<$n)
            echo "Sorry, you are too low\n";
          else if($guess>$n)
            echo "Sorry, that guess is too high\n";
          $guess=(int)readline("Guess $m:\n");
          $m++;
      }
      if ($guess==$n)
            echo "\nYou guessed it right!!";
      else if($m>=7)
            echo "\nSorry, you didn't guess it in 7 tries. You Lose";
?>