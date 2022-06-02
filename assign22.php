<?php
    $x=(float)0;
    echo "x\ty\n---------------\n";
      for($x=-10;$x<=10;$x=$x+0.5)
      {
          $y=$x*$x;
          echo "$x\t$y\n";
      }
?>