<?php
    $course1="English III";
    $course2="Precalculus";
    $course3="Music Theory";
    $course4="BioTechnology";
    $course5="Principles of Technology I";
    $course6="Latin II";
    $course7="AP US History";
    $course8="Business Computer Information System";
    $teacher1="Ms.Lapan";
    $teacher2="Mrs.Gideon";
    $teacher3="Mr.Davis";
    $teacher4="Ms.Palmer";
    $teacher5="Ms.Gracia";
    $teacher6="Mrs.Barnett";
    $teacher7="Ms. Johanessan";
    $teacher8="Mr.James";
    
   for($i=0;$i<=55;$i++)
   {
       if($i==0 || $i==55)
            echo "+";
       else
            echo "-";     
   }
   echo "\n";
    echo "|1|\t\t\t    $course1|";
    echo "       $teacher1|\n";
    echo "|2|\t\t\t    $course2|";
    echo "     $teacher2|\n";
    echo "|3|\t\t\t   $course3|";
    echo "       $teacher3|\n";
    echo "|4|\t\t\t  $course4|";
    echo "      $teacher4|\n";
    echo "|5|\t     $course5|";
    echo "      $teacher5|\n";
    echo "|6|\t\t\t       $course6|";
    echo "    $teacher6|\n";
    echo "|7|\t\t\t  $course7|";
    echo " $teacher7|\n";
    echo "|8|$course8|";
    echo "       $teacher8|\n";
      
   for($i=0;$i<=55;$i++)
   {
       if($i==0 || $i==55)
            echo "+";
       else
            echo "-";     
   }