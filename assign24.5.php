<?php
     function AreaTrapezium($a,$b,$h)
     {
         $area=0.5*($a+$b)*$h;
         echo $area;
     }
     $a=(int)readline("Enter the base a:");
     $b=(int)readline("Enter the base b:");
     $h=(int)readline("Enter the height:");
     AreaTrapezium($a,$b,$h);
?>