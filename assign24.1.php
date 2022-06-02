<?php
function AreaTriangle($sideOne,$sideTwo,$sideThree)
{
    $s=($sideOne+$sideTwo+$sideThree)/2;
    $area=sqrt($s*($s-$sideOne)*($s-$sideTwo)*($s-$sideThree));
    echo $area;
}
$sideOne=(float)readline("Enter the length of first side:");
$sideTwo=(float)readline("Enter the length of second side:");
$sideThree=(float)readline("Enter the length of third side:");
AreaTriangle($sideOne,$sideTwo,$sideThree);
