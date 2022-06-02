<?php
     function AreaRectangle($l,$w)
     {
         $area=$l*$w;
         echo $area;
     }
     $l=(int)readline("Enter the length:");
     $w=(int)readline("Enter the width:");
     AreaRectangle($l,$w);
?>