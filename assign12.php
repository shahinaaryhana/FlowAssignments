<?php
      $a =readline('Are you ready for the Quiz?(Y/N):');
      $sum=0;
      if($a=='Y')
      {
         echo "Okay, Here it comes!!\nQ1)What is the capital of alaska?\n\t1)Melbourne\n\t2)Anchorage\n\t3)Juneau\n";
         $q1 = (int)readline("> ");
         switch($q1)
        {
          case 1:
            {
              echo "Sorry!! Melbourne is not the capital of alaska\n";
              break;
            }
              
            case 2:
            {
                echo "Sorry!! Anchorage is not the capital of alaska\n";  
                break;
            }
            case 3:
            {
                echo "That's Right\n";
                $sum=$sum+1;
                break;
            }
            default:
            {
                echo "Invalid Input";
                break;
            }
        }
            echo "\nQ1)Can you store the value of 'cat' in a variable of type int?\n\t1)yes\n\t2)no\n";
         $q2 = (int)readline("> ");
         switch($q2)
        {
          case 1:
            {
              echo "Sorry!! 'cat' is a string. int can store only numbers" ;
              break;
            }
              
            case 2:
            {
                echo "That's right";  
                $sum=$sum+1;
                break;
            }
            default:
            {
                echo "Invalid Input";
                break;
            }
        }
         echo "\nQ1)What is the result of 9+6/3?\n\t1)5\n\t2)11\n\t3)15/3\n";
         $q3 = (int)readline("> ");
         switch($q3)
        {
          case 1:
            {
              echo "Sorry!! 5 is not the result\n";
              break;
            }
              
            case 2:
            {
                echo "That's correct\n"; 
                 $sum=$sum+1;
                break;
            }
            case 3:
            {
                echo "Sorry!! 15/3 is not the result\n";
                break;
            }
            default:
            {
                echo "Invalid Input";
                break;
            }
         }
            echo "Overall You got $sum out of 3 correct.\nThanks for playing!!";
         
        }
      else{
          echo "Invalid Option";
      }
?>