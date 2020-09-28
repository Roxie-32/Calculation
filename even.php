<?php 

        $arr = array(7, 62, 9, 7, 23, 5);
        
        $sum = 0;
            // using foreach loop
        foreach($arr as $value){
            if($value % 2 == 0){
                $sum = $sum + $value;
            }
        }

        echo $sum ;


            //using for loop
            $arr = array(7, 62, 6, 7, 48, 5);
            $length = count($arr);
            
            $sum = 0;
        for($i = 0; $i < $length; $i++){
            if ($arr[$i] % 2 == 0){
                $sum = $sum + $arr[$i];
            }
             
        }
        echo $sum; 
?>