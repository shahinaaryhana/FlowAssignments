<?php
   
        function add_keychains($a)
       {
           echo "You have $a keychains.";
           $b= readline("How many to add?\n\n");
           if($b>=0)
                $a=$a+$b;
           else
                echo "only positive numbers should be used\n";
           echo "You have $a keychains\n";
           return $a;
       }
       function remove_keychains($a)
       {
           echo "You have $a keychains.?";
           $c= readline("How many to remove?\n\n");
           $a=$a-$c;
           echo "You have $a keychains\n";
           return $a;
       }
       function view_order($a,$cost,$tax,$shipOrder,$shipKey)
       {
           echo "You have $a keychains\n";
           echo "Keychains cost $cost each\n";
           echo "Shipping charges on the order is $shipOrder\n";
           echo "Shipping charges per keychain is $shipKey\n";
           $d=($a*$cost)+$shipOrder+($shipKey*$a);
           echo "Subtotal before tax is $d\n";
           $e=($tax/100)*$d;
           echo "Tax on the order is $tax%\n";
           $res=$e+$d;
           echo "Final cost of the order is $res\n";
       }
       function checkout($a,$cost,$tax,$shipOrder,$shipKey)
       {
             $name= readline("What is your name:\n\n");
              view_order($a,$cost,$tax,$shipOrder,$shipKey);
               echo "Thank you for your order,$name\n";
               exit(0);
       }
       $a=0; 
       $tax=8.25;
       $shipOrder=5;
       $shipKey=1;
       $cost=10;
   while(1)
   {
       
       echo "Ye Old keychain Shoppe \n\n1.Add Keychains to order \n2.Remove Keychains from order\n3.View Current order\n4.Checkout\n\n";
       $c= readline("Enter your choice:\n\n");
       switch($c)
       {
           case 1:
               echo "ADD KEYCHAINS\n\n";
                $a=add_keychains($a);
               break;
           case 2:
               echo "REMOVE KEYCHAINS\n\n";
               $a=remove_keychains($a);
               break;
           case 3:
               echo "VIEW ORDER\n\n";
               view_order($a,$cost,$tax,$shipOrder,$shipKey);
               break;
           case 4:
               echo "CHECKOUT\n\n";
                checkout($a,$cost,$tax,$shipOrder,$shipKey);
               break;
           default:
               echo"Invalid option\n";
               break;
       }
   }