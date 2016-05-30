<!DOCTYPE html>
<html>
   <head>
    <title>numbers</title>  
   </head>
   <body>
   <?php
   $numbers = array(4,8,15,16,23,42);
   echo $numbers[1]; 
  $mixed = array(9,"fox","dog",array("x","y","z"));
   echo $mixed[2];
   echo $mixed[3];
   echo print_r($mixed);
   $mixed[2]="cat";
   $mixed[4]="mouse";
   $mixed[1]="horse";
   echo print_r($mixed);
?>
      
   </body>
</html>

