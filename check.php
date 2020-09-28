<?php 
    
   /*  $arr = array(7, 62, 9, 7, 23, 5);
        
    $int = false;

    for ($i=0; $i < count($arr); $i++) { 
        for ($j=0; $j < count($arr) ; $j++) { 
         if ($i == $j) {
           continue;
        }
           if ($arr[$i] + $arr[$j] == 12) {
            $int = true;
            break;
            
        
         } 
         
        }
    }
    print $int; */

     //What if i want to echo the numbers that paired up
    /* $arr = array(7, 62, 9, 7, 23, 5);
        
    $int = false;

    for ($i=0; $i < count($arr); $i++) { 
        for ($j=0; $j < count($arr) ; $j++) { 
         if ($i == $j) {
           continue;
        }
           if ($arr[$i] + $arr[$j] == 12) {
        
            $first = $arr[$i];
            $sec = $arr[$j];
            $int = true;
            break;
        
         } 
         
        }
    }
    print $int;
    print $first;
    print $sec; */

    //another way  but this is same time complexity as above
/* 
    $arr = array(7, 62, 9, 7, 23, 5);
        
    $int = 'false';

    for ($i=0; $i < count($arr); $i++) { 
        for ($j=0; $j < count($arr) ; $j++) { 
         if ($i <= $j) {
           continue;
        }
           if ($arr[$i] + $arr[$j] == 12) {
            $int = 'true';
            break;
            
        
         } 
         
        }
    }
    print $int;  */

    //A more efficient way reducing the algorithm complexity
    
/*     $arr = array(7, 62, 9, 7, 23, 5);
        
    $int = 'false';

    for ($i=0; $i < count($arr); $i++) { 
        for ($j=$i+1; $j < count($arr) ; $j++) { 
           if ($arr[$i] + $arr[$j] == 12) {
            $int = 'true';
            break;
            
        
         } 
         
        }
    }
    print $int;  */

    //A better way
    $init = array(12,34,45,75,67,3);
    $sum =15;

    echo find($init,$sum);
    
      function find($array, $sumVal){
         $store= array();
         foreach($array as $val){
            if(isset($store[$sumVal-$val])){
               return "true";
            break;
            }
            $store[$val] = "1";
         }
         return 'false';
         
      }
  
?>