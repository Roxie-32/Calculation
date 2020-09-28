<?php 
// if(isset($_POST['submit'])){

//         $num= $_POST['num'];

//         function calc($x){
//             if ($x >= 13) {
//                 $y=13-$x;
//               $ans = pow($y,2);
                
//             }else{
//                 $ans= 13-$x;
//             }
//             echo $ans;
//         }
//         calc($num);
//     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Enter your number:
        <input type="number" id="num" name="num">
        <!-- //use button for php and input  of button for javascript -->
        <!-- <button name="submit" >Submit</button> -->
        <input type="button" value="Submit" onclick= "calc()" name="submit" >
        <h2 id="output"></h2>
    </form>
    <script>

        function calc(){
            
        let num= document.getElementById("num").value;  
        
        let output = document.getElementById("output");
        let ans;
            if (num >= 13) {
              ans = ((num-13)*2);
                
            }else{
                ans= 13-num;
            }

           output.innerHTML=ans; 
        }

    </script>

    </body>
</html>