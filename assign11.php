<?php
      $w =(int)readline('Please enter your current earth weight:');
      echo "$w \r";
      echo "I have information for the following planets:\n1.Venus\t2.Mars\t3.Jupiter\n4.saturn\t5.Uranus\t6.Neptune\n";
      $n = (int)readline('which planet are you visiting?');
      echo "$n\n"; 
      switch($n)
      {
          case 1:
            {
              $p=$w*0.78;
              echo "Your weight would be $p pounds on that planet";
              break;
            }
              
            case 2:
            {
                $p=$w*0.39;
                echo "Your weight would be $p pounds on that planet";  
                break;
            }
            case 3:
            {
                $p=$w*2.65;
                echo "Your weight would be $p pounds on that planet";
                break;
            }
            case 4:
            {
                $p=$w*1.17;
                echo "Your weight would be $p pounds on that planet";
                break;
            }
            case 5:
            {
                $p=$w*1.05;
                echo "Your weight would be $p pounds on that planet";
                break;
            }
            case 6:
            {
                $p=$w*1.23;
                echo "Your weight would be $p pounds on that planet";
                break;
            }
            default:
            {
                echo "Invalid Input";
                break;
            }
            
                
                
      }
?>