<?php
  while(1)
   {
       echo "Ye Old keychain Shoppe \n\n1.Add Keychains to order \n2.Remove Keychains from order\n3.View Current order\n4.Checkout\n\n";
       $c= readline("Enter your choice:\n\n");
       switch($c)
       {
           case 1:
               echo "ADD KEYCHAINS\n\n";
               break;
           case 2:
               echo "REMOVE KEYCHAINS\n\n";
               break;
           case 3:
               echo "VIEW ORDER\n\n";
               break;
           case 4:
               echo "CHECKOUT\n\n";
               exit(0);
               break;
       }
   }