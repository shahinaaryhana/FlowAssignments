<?php
      echo "I will add up the numbers you give me\n";
      $n=(int)readline("");
      $sum=$n;
      while($n!=0)
      {
          echo "The total so far is $sum\n";
          $num=(int)readline("Number:");
          $sum=$sum+$num;
          if($num==0)
          {
            echo "The total is $sum";
            break;
          }
      }
?>