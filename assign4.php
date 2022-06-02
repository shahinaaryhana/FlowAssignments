<?php
  $firstname=readline("Firstname:");
  $lastname=readline("Lastname:");
  $grade=(int)readline("Grade (9-12):");
  $id=(double)readline("Student ID:");
  $login=readline("Login:");
  $gpa=(float)readline("GPA(0.0-4.0):");
  echo "Your information\n\tLOGIN: $login\n\tID: $id\n\tNAME: $lastname,$firstname\n\tGPA: $gpa\n\tGrade: $grade\n";