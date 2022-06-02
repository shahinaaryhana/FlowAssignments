<?php
   echo "Welcome\n";
   $a=readline("You are in R1! Would you like to go into R2 or R3?\n");
   if($a=="R2")
  {
      $b=readline("You are in R2! Would you like to go into R4 or R5?\n");
      if($b=="R4")
      {
        $c=readline("You are in R4! Would you like to go into E1 or E2?\n");
        if($c=="E1")
        {
             echo "you are in E1\n";        }
        else if($c=="E2")
        {
            echo "you are in E2\n"; 
        }
      }
      else if($b=="R5")
      {
        $c=readline("You are in R5! Would you like to go into E3 or E4?\n");
        if($c=="E3")
        {
             echo "you are in E3\n";        }
        else if($c=="E4")
        {
            echo "you are in E4\n"; 
        }
      }
  }
  else if($a=="R3")
  {
      $b=readline("You are in R3! Would you like to go into R6 or R7?\n");
      if($b=="R6")
      {
        $c=readline("You are in R4! Would you like to go into E5 or E6?\n");
        if($c=="E5")
        {
             echo "you are in E5\n";        }
        else if($c=="E6")
        {
            echo "you are in E6\n"; 
        }
      }
      else if($b=="R7")
      {
        $c=readline("You are in R5! Would you like to go into E7 or E8?\n");
        if($c=="E7")
        {
             echo "you are in E7\n";        }
        else if($c=="E8")
        {
            echo "you are in E8\n"; 
        }
      }
  }
  