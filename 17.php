<?php 
   /*  if(isset($_POST['submit'])){
        $num1 =$_POST['num1'];

        function calc ($x){
            if ($x > 19){
                        //absolute difference values are always non-negative thats why i put difference  in a manner that it always return positive
                $ans=(($x-19)*3);
                }else{
                     $ans=19-$x;
                     
        }
        return $ans;    
            }
             echo calc($num1);  
        } */
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
        <input type="button" value="Submit" id="submit" name="submit" onclick="calc()">
  
         <!-- //php(donnt still give it a type of button)  -->
         <!-- <button  name="submit">Submit</button> -->
        <h5 id="output"></h5>
    </form>
    <script>
        function calc(){
            let num1=document.getElementById("num1").value;
            let output=document.getElementById("output");
            let x =parseInt(num1);
            if (x > 19){
                //absolute difference values are always non-negative thats why i put difference  in a manner that it always return positive
                ans=((x-19)*3);
            }else{
                ans=19-x;
            }
            output.innerHTML=ans;
           
        
        }
       

    </script>
</body>
</html>