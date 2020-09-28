<?php
    $arr = [1,2,3,4];
 
    for ($j=count($arr)/2;  $j < count($arr);  $j++) { 
        $him=$arr[$j].",";
        echo $him;
        
    }
    for ($i=0; $i < count($arr)/2; $i++) { 
        $hi=$arr[$i].",";
        echo $hi;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
         let arr = [1,2,3,4];
         for (let j=arr.length/2;  j < arr.length;  j++) { 
        let him=arr[j]+",";
        console.log(him);
        
    }
    for (let i=0; i < arr.length/2; i++) { 
        let hi=arr[i]+",";
        console.log(hi) ;
    }
   
    </script>
</body>
</html>