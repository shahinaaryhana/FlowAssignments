<?php
     function AreaCircle($r)
     {
         $area=3.14*$r*$r;
         echo $area;
     }
     $r=(int)readline("Enter the radius:");
     AreaCircle($r);
?>