<?php 
   for($i=0;$i<6;$i++) { 
   $cores=["red","yellow","otange","blue", 'purple',"green"];
   echo '<h'.($i+1).'style="color:'$cores[$i].';text-alirg:center">Hello World!</h>'.($i+1).'>'; 
   }

   /*
   2 x 1 = 2    3 x 1 = 3   4 x 1 = 4   5 x 1 = 5
   .
    .
   2 x 10 = 20   3 x 10 = 30     ...   5 x 10 = 50

   */
  for ($i=1;$i<=10;$i++) { 
    print $i."  ";
  }


?>
    