<?php
   
        function add_keychains($a)
       {
           echo "You have $a keychains.";
           $b= readline("How many to add?\n\n");
           $a=$a+$b;
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
       function view_order($a,$cost)
       {
           echo "You have $a keychains\n";
               echo "Keychains cost $10 each\n";
               $d=$a*$cost;
               echo "Total cost is $d\n";
       }
       function checkout($a,$cost)
       {
             $name= readline("What is your name:\n\n");
               echo "You have $a keychains\n";
               echo "Keychains cost $10 each\n";
               $d=$a*10;
               echo "Total cost is $d\n";
               echo "Thank you for your order,$name\n";
               exit(0);
       }
       $a=0; 
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
               view_order($a,$cost);
               break;
           case 4:
               echo "CHECKOUT\n\n";
                checkout($a,$cost);
               break;
       }
   }