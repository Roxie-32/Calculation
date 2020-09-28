<?php 
//     if(isset($_POST['submit'])){
//         $num1 =$_POST['num1'];
//         $num2 =$_POST['num2'];
//         function calc($x, $y){
//             if(($x==50|| $y==50)|| ($x+$y)==50){
//                 $ans= "true";
//             }else{
//                 $ans = "false";
//             }
//     return $ans;
//         }
//   echo calc($num1, $num2);
        
       
//         }
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
        <input type="number"name="num1" placeholder="ENter the first  number" id="num1" >
        <input type="number"name="num2" placeholder="ENter the second number" id="num2">
        <input type="button" value="Submit" id="submit" name="submit" onclick="calc()">
    <!--     <button  name="submit">Submit</button>
         //php(donnt still give it a type of button) --> 
        <h5 id="output"></h5>
    </form>
    <script>
        function calc(){
            let num1=document.getElementById("num1").value;
            let num2=document.getElementById("num2").value;
            let output=document.getElementById("output");
            let x =parseInt(num1);
            let y =parseInt(num2);
            if((x==50|| y==50)|| (x+y)==50){
                ans= true;
            }else{
                ans = false;
            }
    
output.innerHTML=ans;
        }
        </script>      
</body>
</html>