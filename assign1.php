<?php
    $course=array("English III","Precalculus","Music Theory","BioTechnology","Principles of Technology I","Latin II","AP US History","Business Computer Information System");
    $teacher=array("Ms.Lapan","Mrs.Gideon","Mr.Davis","Ms.Palmer","Ms.Gracia","Mrs.Barnett","Ms. Johanessan","Mr.James");
   for($i=0;$i<=57;$i++)
   {
       if($i==0 || $i==57)
            echo "+";
       else
            echo "-";     
   }
   echo "\n";
    for($j=0;$j<8;$j++)
    {
    $m=$j+1;
    echo "|$m|";
    $s=36-strlen($course[$j]);
    for($i=0;$i<=$s;$i++)
    {
        echo" ";
    }
    echo "$course[$j]|";
    $s=15-strlen($teacher[$j]);
    for($i=0;$i<=$s;$i++)
    {
        echo" ";
    }
    echo "$teacher[$j]|\n";
    }
    
    
   for($i=0;$i<=57;$i++)
   {
       if($i==0 || $i==57)
            echo "+";
       else
            echo "-";     
   }