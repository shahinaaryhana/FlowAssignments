<?php
   function month_name($num)
   {
        $a="January";
        $b="February";
        $c="March";
        $d="April";
        $e="May";
        $f="June";
        $g="July";
        $h="August";
        $i="September";
        $j="October";
        $k="November";
        $l="December";
        
       switch($num)
       {
           case 1:
               return $a;
               break;
           case 2:
               return $b;
               break;
           case 3:
               return $c;
               break;
           case 4:
               return $d;
               break;
           case 5:
               return $e;
               break;
           case 6:
               return $f;
               break;
           case 7:
               return $g;
               break;
           case 8:
               return $h;
               break;
           case 9:
               return $i;
               break;
           case 10:
               return $j;
               break;
           case 11:
               return $k;
               break;
           case 12:
               return $l;
               break;
       }
   }
   $num=(int)readline("Enter the number:");
   echo month_name($num);